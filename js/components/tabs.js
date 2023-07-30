/* eslint-disable prefer-template */
/* eslint-disable no-useless-escape */
export function getCookie(name) {
  const matches = document.cookie.match(new RegExp(
    '(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)',
  ));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}

export const initCookieTabs = (tabName, wrapper) => {
  wrapper.querySelectorAll('[data-tab]').forEach((tab) => {
    tab.classList.toggle('is-active', tab.dataset.tab === tabName);
  });
  wrapper.querySelectorAll('[data-tablink]').forEach((button) => {
    button.classList.toggle('is-active', button.dataset.tablink === tabName);
  });
  window.msnry?.layout();
  ScrollTrigger.refresh();
};

export const startTabs = () => {
  if (document.querySelector('[data-cookietab]')) {
    const savedActiveTab = getCookie('activeTab');
    if (savedActiveTab) initCookieTabs(savedActiveTab, document);
  }

  document.addEventListener('click', (e) => {
    const tabLink = e.target.closest('[data-tablink]');
    const wrapper = e.target.closest('[data-tabwrap]');
    if (!tabLink || !wrapper) return;
    e.preventDefault();
    initCookieTabs(tabLink.dataset.tablink, wrapper);
    const activeTab = document.querySelector('.is-active[data-cookietab][data-tab]');
    if (!activeTab || !activeTab.dataset.cookietab) return;
    document.cookie = `activeTab=${activeTab.dataset.tab}; max-age=6000000`;
  });
};
