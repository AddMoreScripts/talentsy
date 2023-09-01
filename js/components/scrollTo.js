export default function initScrollTo() {
  document.addEventListener('click', (e) => {
    const scrollButt = e.target.closest('[data-scrollto]');
    if (!scrollButt) return;
    e.preventDefault();
    let hrefLink = scrollButt.getAttribute('href');
    if (!hrefLink) {
      hrefLink = scrollButt.dataset.scrollto;
    }
    const needEl = document.querySelector(hrefLink);
    if (!needEl) {
      console.log(`Элемента ${hrefLink} нет`);
      return;
    }
    let offset = 0;
    if (scrollButt.dataset.offset) {
      offset = parseInt(scrollButt.dataset.offset)
    }
    needEl.scrollIntoView({
      behavior: scrollButt.dataset.hard ? 'auto' : 'smooth',
      block: 'center',
    })
    // window.scrollTo({
    //   top: needEl.getBoundingClientRect().top + window.scrollY - offset,
    //   behavior: scrollButt.dataset.hard ? 'auto' : 'smooth',
    // });
  });
}
