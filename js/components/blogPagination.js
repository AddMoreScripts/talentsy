export function initBlogPagination() {
  const catalogwrap = document.querySelector('.js-catalog');
  const pagination = document.querySelector('.js-pagination-wrap');
  const GRID_SELECTOR_NAME = '.blogcategory__grid';
  if (!catalogwrap) return;

  const actionName = catalogwrap.dataset.actionname;

  const activeCats = new Set;

  const catButtons = document.querySelectorAll('[data-catid]');

  insertPagination();

  document.addEventListener('click', async (e) => {
    const catButton = e.target.closest('[data-catid]');

    if (catButton) {
      if (catalogwrap.querySelector(GRID_SELECTOR_NAME).classList.contains('is-loading')) return;
      const needId = parseInt(catButton.dataset.catid);
      catButton.classList.toggle('is-active');
      activeCats.clear();
      catButtons.forEach(button => {
        if (button.classList.contains('is-active')) {
          activeCats.add(parseInt(button.dataset.catid));
        }
      });
      const ajaxBody = new FormData();
      ajaxBody.append("action", actionName);
      ajaxBody.append("catlist", JSON.stringify(Array.from(activeCats.values())));
      ajaxBody.append('page_num', 1);
      await fetchPage(ajaxBody);
    }

    // нажатие на ссылку пагинации
    const pagLink = e.target.closest('.js-pagination-wrap .nav-links a');
    if (pagLink) {
      e.preventDefault();
      activeCats.clear();
      catButtons.forEach(button => {
        if (button.classList.contains('is-active')) {
          activeCats.add(parseInt(button.dataset.catid));
        }
      });
      // console.log(Array.from(activeCats.values()));
      const ajaxBody = new FormData();
      ajaxBody.append("action", actionName);
      ajaxBody.append("catlist", JSON.stringify(Array.from(activeCats.values())));
      ajaxBody.append('page_num', calcNeedPage(pagLink));
      if(pagLink.dataset.perpage) ajaxBody.append('per_page', pagLink.dataset.perpage);
      if(pagLink.dataset.exclude) ajaxBody.append('exclude', loadMoreLink.dataset.exclude);
      await fetchPage(ajaxBody);
    }

    // Нажатие на загрузить ещё
    const loadMoreLink = e.target.closest('.js-loadmore');
    if (loadMoreLink) {
      loadMoreLink.setAttribute('disabled', 'disabled');
      e.preventDefault();
      activeCats.clear();
      catButtons.forEach(button => {
        if (button.classList.contains('is-active')) {
          activeCats.add(parseInt(button.dataset.catid));
        }
      });
      const ajaxBody = new FormData();
      ajaxBody.append("action", actionName);
      ajaxBody.append("catlist", JSON.stringify(Array.from(activeCats.values())));
      ajaxBody.append('taxonomyType', loadMoreLink.dataset.taxonomytype || 'cat');
      ajaxBody.append('page_num', parseInt(loadMoreLink.dataset.needpage));
      if(loadMoreLink.dataset.perpage) ajaxBody.append('per_page', loadMoreLink.dataset.perpage);
      if(loadMoreLink.dataset.exclude) ajaxBody.append('exclude', loadMoreLink.dataset.exclude);
      await fetchPage(ajaxBody, true);
      loadMoreLink.removeAttribute('disabled');
    }
  });

  function insertPagination() {
    const pagTemplate = document.querySelector('#js-cat-pagination');
    const target = document.querySelector('.js-pagination-wrap');
    if (!pagTemplate || !target) return;
    // console.log(pagTemplate.content.firstElementChild);
    target.innerHTML = "";
    if(pagTemplate.content.firstElementChild){
      target.append(pagTemplate.content.firstElementChild);
    }
  }

  function calcNeedPage(pagLink) {
    let currentPage = parseInt(document.querySelector(GRID_SELECTOR_NAME)?.dataset?.currentpage);
    if (!currentPage) currentPage = 1;
    let needPage = parseInt(pagLink.innerText);
    if (!needPage) {
      if (pagLink.classList.contains('next')) {
        needPage = currentPage + 1;
      }
      if (pagLink.classList.contains('prev')) {
        needPage = currentPage > 1 ? currentPage - 1 : 1;
      }
    }
    // console.log(`${needPage} - тек: ${currentPage}`);
    return needPage;
  }

  async function fetchPage(formData, isSaveLoaded=false) {
    catalogwrap.querySelector(GRID_SELECTOR_NAME).classList.add('is-loading');
    pagination ? pagination.classList.add('is-loading'): null;
    if(!isSaveLoaded){
      window.scrollTo({
        top: document.querySelector('.js-catalog').getBoundingClientRect().top + window.scrollY - 100,
        behavior: 'smooth',
      });
    }
    const response = await fetch(window.ajaxurl, {
      method: 'post',
      body: formData,
    });
    if (!response.ok) {
      console.log(response);
      return;
    }
    const result = await response.text();
    const parser = new DOMParser();
    const resultHtml = parser.parseFromString(result, "text/html");
    let needElements = Array.from(catalogwrap.querySelectorAll('.js-item'));
    catalogwrap.innerHTML = "";
    catalogwrap.insertAdjacentHTML('beforeend', result);
    const newCatGrid = catalogwrap.querySelector(GRID_SELECTOR_NAME);
    if(isSaveLoaded){
      needElements.reverse().forEach(elem => {
        newCatGrid.insertAdjacentElement('afterbegin', elem);
      });
    }
    newCatGrid.classList.remove('is-loading');
    pagination ? pagination.classList.remove('is-loading'): null;
    insertPagination();
  }
};
