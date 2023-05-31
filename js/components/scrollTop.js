// eslint-disable-next-line import/prefer-default-export
export default function initScrollTop() {
  const button = document.querySelector('.scrollTop');
  const headerBlock = document.querySelector('.js-scroll-elem');
  if (!button || !headerBlock){
    console.log('Не найдено .js-scroll-elem. Кнопка "Вверх" не отображается');
    return;
  };
  button.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
  const TriggerShowButton = (entries) => {
    button.classList.toggle('active', !entries[0].isIntersecting);
  };
  const twoObserver = new IntersectionObserver(TriggerShowButton, {
    rootMargin: '400px',
    threshold: 1.0,
  });
  twoObserver.observe(headerBlock);
}
