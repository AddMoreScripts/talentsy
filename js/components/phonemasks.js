import IMask from 'imask';

/**
 * Маска ввода номера телефона
 * см. https://imask.js.org/
 */

const SELECTOR = 'input[type="tel"]';

export default () => {
  function applyInputMasks(elem) {
    const input = elem;
    if (input.mask) return false;
    input.mask = IMask(input, {
      mask: '+{7} 000 000-00-00',
      lazy: true,
      autofix: true,
    });
    return input.mask;
  }

  function iMaskUpdate() {
    document.querySelectorAll(SELECTOR).forEach((elem) => {
      applyInputMasks(elem);
    });
  }

  document.addEventListener('focusin', (e) => {
    const phoneInput = e.target.closest(SELECTOR);
    if (!phoneInput) return;
    applyInputMasks(phoneInput);
    phoneInput.mask.updateOptions({
      lazy: false,
    });
    phoneInput.mask.alignCursorFriendly();
  });

  document.addEventListener('focusout', (e) => {
    const phoneInput = e.target.closest(SELECTOR);
    if (!phoneInput || !phoneInput.mask || phoneInput.mask.masked.isComplete) return;
    phoneInput.mask.updateOptions({
      lazy: true,
    });
    phoneInput.mask.value = '';
  });

  iMaskUpdate();
  window.inputMask = iMaskUpdate;
};
