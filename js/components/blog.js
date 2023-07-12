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



  const starsElem = document.querySelector('.js-postfooter-wrap');
  if(starsElem){
    starsElem.addEventListener('click', async (e) => {
      if(!window.postId ) {
        console.log('Ошибка нет переменной window.postId');
        return;
      }
      const star = e.target.closest('.rating__star');
      if(!star) return;
      const rating = star.value;
      document.cookie = `rate_post_${window.postId || 0}=${rating}; max-age=6000; path=/;`;
      starsElem.querySelector('fieldset').setAttribute('disabled', 'disabled');

      let ajaxBody = new FormData();
      ajaxBody.append("post_id", parseInt(window.postId));
      ajaxBody.append("rate", parseInt(rating));
      ajaxBody.append("action", 'ratepost');

      starsElem.querySelector('fieldset').classList.add('is-loading');

      const response = await fetch(window.ajaxurl, {
        method: 'POST',
        credentials: 'include',
        body: ajaxBody,
      });
      if (!response.ok) {
        console.log(response);
        return;
      }
      let result = await response.text();
      starsElem.innerHTML = result;

      starsElem.querySelector('fieldset').classList.remove('is-loading');
    });
  }
};
