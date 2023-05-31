export function initBlog(){


  document.addEventListener('click', e => {
    const button = e.target.closest('.js-load-blogposts');
    if(!button) return;
    e.preventDefault();

    const loaderblock = button.parentElement.querySelector('.js-loader-blogposts');
    if(loaderblock) loaderblock.classList.add('is-loading');

    setTimeout(() => {
      loaderblock.classList.remove('is-loading');
      alert('Подгрузка постов работает в демонстрационном режиме');
      button.remove();
    }, 1000);
  });

};
