/* public/assets/js/a11y-custom.js
   Extiende la toolbar (a11y-toolbar.js) con controles avanzados.
   Cargar después de a11y-toolbar.js (usar defer)
*/
(function () {
  'use strict';

  const KEY = 'ci_uni_a11y_v1';
  const DEFAULTS = {
    saturation: 1,
    invert: false,
    highlightLinks: false,
    fontScale: 1.0,
    lineHeight: 1.5,
    letterSpacing: 0,
    textAlign: 'left',
    contrast: 1,
    hideMedia: false,
    cursor: 'default'
  };

  const TOOLBAR_SELECTORS = [
    '.a11y-toolbar',
    '.accessibility-toolbar',
    '#a11y-toolbar',
    '.a11y',
    '[data-a11y-toolbar]'
  ];

  function $(s, ctx = document) {
    return ctx.querySelector(s);
  }

  function $all(s, ctx = document) {
    return Array.from(ctx.querySelectorAll(s));
  }

  function loadState() {
    try {
      const raw = localStorage.getItem(KEY);
      return raw ? JSON.parse(raw) : { ...DEFAULTS };
    } catch (e) {
      return { ...DEFAULTS };
    }
  }

  function saveState(state) {
    try {
      localStorage.setItem(KEY, JSON.stringify(state));
    } catch (e) { }
  }

  function applyState(state) {
    const doc = document.documentElement;
    doc.style.setProperty('--a11y-font-scale', state.fontScale);
    doc.style.setProperty('--a11y-line-height', state.lineHeight);
    doc.style.setProperty('--a11y-letter-spacing', state.letterSpacing + 'px');
    doc.style.setProperty('--a11y-text-align', state.textAlign);
    doc.style.setProperty('--a11y-saturation', state.saturation);
    doc.style.setProperty('--a11y-contrast', state.contrast);
    doc.style.setProperty('--a11y-invert', state.invert ? 1 : 0);

    document.body.classList.toggle('a11y-highlight-links', !!state.highlightLinks);
    document.body.classList.toggle('a11y-hide-media', !!state.hideMedia);
    document.body.classList.remove('cursor-large', 'cursor-dot');
    if (state.cursor === 'large') document.body.classList.add('cursor-large');
    if (state.cursor === 'dot') document.body.classList.add('cursor-dot');

    window.__CI_A11Y_STATE = state;
  }

  function createControlsPanel() {
    const panelId = 'ci-a11y-custom-panel';

    const existing = document.getElementById(panelId);
    if (existing) {
      return existing;
    }

    const panel = document.createElement('div');
    panel.id = panelId;
    panel.className =
      'a11y-custom-panel fixed bottom-28 left-4 w-80 max-w-[90vw] bg-white dark:bg-slate-800 p-3 rounded shadow-lg ring-1 ring-slate-200 z-[9999]';
    panel.setAttribute('role', 'dialog');
    panel.setAttribute('aria-modal', 'false');
    panel.setAttribute('aria-hidden', 'true');

    panel.innerHTML = `
      <div class="flex items-center justify-between mb-2">
        <strong class="text-sm">Preferencias de accesibilidad</strong>
        <button id="ci-a11y-close" aria-label="Cerrar panel" class="ml-2 p-1 rounded focus:outline-none">✕</button>
      </div>
      <div id="ci-a11y-controls" class="text-sm space-y-2">
        <div class="control-row">
          <label for="ci-a11y-sat">Saturación</label>
          <input id="ci-a11y-sat" type="range" min="0" max="2" step="0.01">
        </div>

        <div class="control-row"><label><input id="ci-a11y-inv" type="checkbox"> Invertir colores</label></div>
        <div class="control-row"><label><input id="ci-a11y-hl" type="checkbox"> Enlaces resaltados</label></div>

        <div class="control-row">
          <label for="ci-a11y-font">Tamaño fuente</label>
          <input id="ci-a11y-font" type="range" min="0.8" max="1.6" step="0.01">
        </div>

        <div class="control-row">
          <label for="ci-a11y-line">Altura línea</label>
          <input id="ci-a11y-line" type="range" min="1" max="2" step="0.01">
        </div>

        <div class="control-row">
          <label for="ci-a11y-letter">Espaciado letras</label>
          <input id="ci-a11y-letter" type="range" min="0" max="5" step="0.1">
        </div>

        <div class="control-row">
          <label for="ci-a11y-align">Alinear</label>
          <select id="ci-a11y-align" class="ml-2">
            <option value="left">Izquierda</option>
            <option value="center">Centrado</option>
            <option value="justify">Justificar</option>
            <option value="right">Derecha</option>
          </select>
        </div>

        <div class="control-row">
          <label for="ci-a11y-contrast">Contraste</label>
          <input id="ci-a11y-contrast" type="range" min="0.5" max="2" step="0.01">
        </div>

        <div class="control-row"><label><input id="ci-a11y-hide-media" type="checkbox"> Ocultar imágenes / vídeos</label></div>

        <div class="control-row">
          <label for="ci-a11y-cursor">Cursor</label>
          <select id="ci-a11y-cursor" class="ml-2">
            <option value="default">Normal</option>
            <option value="large">Grande</option>
            <option value="dot">Punto</option>
          </select>
        </div>

        <div class="flex gap-2 mt-3">
          <button id="ci-a11y-reset" class="flex-1 bg-red-600 text-white p-2 rounded">Reestablecer</button>
          <button id="ci-a11y-save" class="flex-1 bg-slate-200 p-2 rounded">Guardar</button>
        </div>
      </div>
    `;

    document.body.appendChild(panel);

    const addedPanel = document.getElementById(panelId);
    if (!addedPanel) {
      console.error('ERROR: No se pudo agregar el panel al DOM');
      return null;
    }

    return addedPanel;
  }

  function createToggleButton() {
    let host = null;
    for (const sel of TOOLBAR_SELECTORS) {
      const n = document.querySelector(sel);
      if (n) { host = n; break; }
    }
    const btn = document.createElement('button');
    btn.id = 'ci-a11y-toggle';
    btn.className = 'fixed bottom-4 flex justify-center items-center left-4 z-[9998] bg-blue-600 text-white rounded-full p-3 shadow-lg focus:outline-none';
    btn.setAttribute('aria-controls', 'ci-a11y-custom-panel');
    btn.setAttribute('aria-expanded', 'false');
    btn.innerHTML = `<img src="${miThemeData.imgAccesibilidad}" alt="Accesibilidad" class="w-6 h-6">`;
    document.body.appendChild(btn);

    return btn;
  }

  function togglePanel(show) {
    const panel = document.getElementById('ci-a11y-custom-panel');
    const btn = document.getElementById('ci-a11y-toggle');

    if (!panel || !btn) return;

    if (show === undefined) show = panel.getAttribute('aria-hidden') === 'true';

    panel.setAttribute('aria-hidden', show ? 'false' : 'true');
    btn.setAttribute('aria-expanded', show ? 'true' : 'false');
    panel.classList.toggle('hidden', !show);
  }

  function wireUi(panel) {
    if (!panel) {
      console.error('ERROR: Panel es null en wireUi');
      return;
    }

    const state = loadState();

    // Mapear elementos
    const elementMap = {
      'ci-a11y-sat': document.getElementById('ci-a11y-sat'),
      'ci-a11y-inv': document.getElementById('ci-a11y-inv'),
      'ci-a11y-hl': document.getElementById('ci-a11y-hl'),
      'ci-a11y-font': document.getElementById('ci-a11y-font'),
      'ci-a11y-line': document.getElementById('ci-a11y-line'),
      'ci-a11y-letter': document.getElementById('ci-a11y-letter'),
      'ci-a11y-align': document.getElementById('ci-a11y-align'),
      'ci-a11y-contrast': document.getElementById('ci-a11y-contrast'),
      'ci-a11y-hide-media': document.getElementById('ci-a11y-hide-media'),
      'ci-a11y-cursor': document.getElementById('ci-a11y-cursor')
    };

    // Verificar que todos los elementos existen
    const missingElements = Object.keys(elementMap).filter(key => !elementMap[key]);
    if (missingElements.length > 0) {
      console.error('ERROR: Elementos faltantes:', missingElements);
      return;
    }

    // Función para sincronizar valores del estado con el UI
    const syncValues = () => {
      elementMap['ci-a11y-sat'].value = state.saturation;
      elementMap['ci-a11y-inv'].checked = state.invert;
      elementMap['ci-a11y-hl'].checked = state.highlightLinks;
      elementMap['ci-a11y-font'].value = state.fontScale;
      elementMap['ci-a11y-line'].value = state.lineHeight;
      elementMap['ci-a11y-letter'].value = state.letterSpacing;
      elementMap['ci-a11y-align'].value = state.textAlign;
      elementMap['ci-a11y-contrast'].value = state.contrast;
      elementMap['ci-a11y-hide-media'].checked = state.hideMedia;
      elementMap['ci-a11y-cursor'].value = state.cursor;
    };

    syncValues();
    applyState(state);

    // Remover listeners anteriores si existen
    if (panel._a11yHandler) {
      panel.removeEventListener('input', panel._a11yHandler);
      panel.removeEventListener('change', panel._a11yHandler);
      panel.removeEventListener('click', panel._a11yHandler);
    }

    // Crear el handler único con delegación de eventos
    const handleEvent = (e) => {
      const target = e.target;
      const id = target.id;

      switch (id) {
        case 'ci-a11y-sat':
          state.saturation = +target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-inv':
          state.invert = target.checked;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-hl':
          state.highlightLinks = target.checked;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-font':
          state.fontScale = +target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-line':
          state.lineHeight = +target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-letter':
          state.letterSpacing = +target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-align':
          state.textAlign = target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-contrast':
          state.contrast = +target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-hide-media':
          state.hideMedia = target.checked;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-cursor':
          state.cursor = target.value;
          applyState(state);
          saveState(state);
          break;
        case 'ci-a11y-reset':
          localStorage.removeItem(KEY);
          Object.assign(state, DEFAULTS);
          applyState(state);
          saveState(state);
          syncValues();
          break;
        case 'ci-a11y-close':
          togglePanel(false);
          break;
        case 'ci-a11y-save':
          saveState(state);
          // Verificar si ya existe una notificación
          const existingNotif = document.getElementById('a11y-save-notification');
          if (existingNotif) {
            existingNotif.remove();
          }
          // Crear notificación temporal con estilos inline completos
          const notif = document.createElement('div');
          notif.id = 'a11y-save-notification';
          notif.textContent = ' Preferencias guardadas';
          notif.style.cssText = `
    position: fixed;
    top: 20px;
    right: 20px;
    background: #16a34a;
    color: white;
    padding: 12px 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 2px 4px rgba(0, 0, 0, 0.06);
    z-index: 10000;
    font-weight: 500;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s ease;
  `;
          document.body.appendChild(notif);
          // Fade in
          requestAnimationFrame(() => {
            notif.style.opacity = '1';
          });

          // Fade out y remover
          setTimeout(() => {
            notif.style.opacity = '0';
            setTimeout(() => {
              notif.remove();
            }, 300);
          }, 2000);
          togglePanel(false);
          break;
      }
    };

    // Guardar referencia del handler en el panel
    panel._a11yHandler = handleEvent;

    // Agregar listeners con delegación
    panel.addEventListener('input', handleEvent);
    panel.addEventListener('change', handleEvent);
    panel.addEventListener('click', handleEvent);

    // Listener para ESC (solo agregar una vez)
    if (!document._a11yEscHandler) {
      document._a11yEscHandler = (ev) => {
        if (ev.key === 'Escape') togglePanel(false);
      };
      document.addEventListener('keydown', document._a11yEscHandler);
    }
  }

  // Función de inicialización
  function initializeA11y() {
    try {
      const panel = createControlsPanel();
      if (!panel) {
        console.error('ERROR: No se pudo crear el panel');
        return false;
      }

      const toggle = createToggleButton();
      if (!toggle) {
        console.error('ERROR: No se pudo crear el botón toggle');
        return false;
      }

      panel.classList.add('hidden');

      setTimeout(() => {
        wireUi(panel);

        // Remover listener anterior del toggle si existe
        if (toggle._toggleHandler) {
          toggle.removeEventListener('click', toggle._toggleHandler);
        }

        // Crear y guardar el handler
        toggle._toggleHandler = () => togglePanel();
        toggle.addEventListener('click', toggle._toggleHandler);

        window.CI_A11Y_APPLY = applyState;
        window.CI_A11Y_LOAD = loadState;
      }, 50);

      return true;
    } catch (err) {
      console.error('a11y-custom init error', err);
      return false;
    }
  }

  // Inicialización
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeA11y);
  } else {
    initializeA11y();
  }

  window.addEventListener('load', () => {
    if (!document.getElementById('ci-a11y-custom-panel')) {
      initializeA11y();
    }
  });

})();
