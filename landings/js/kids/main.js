function initAddictSwipers(Swiper) {
  new Swiper('.js-kids-presentation', {
    autoHeight: false,
    loop: false,
    spaceBetween: 0,
    slidesPerView: 1,
    lazyPreloadPrevNext: 1,
    autoplay: {
      delay: 2000,
    },
  });
}

function startTyped(){
  document.querySelectorAll('.js-typed').forEach(el => {
    el.innerHTML = "";
    new Typed(el, {
      strings: window.typedTexts,
      typeSpeed: 50,
      loop: true,
      backDelay: 2000,
    });
  })
}
startTyped();


function startGsapKids(){
  if(window.innerWidth < 1200) return;
  gsap.registerPlugin(ScrollTrigger);
  const kidsTimeLine = gsap.timeline({
    ease: "none",
    scrollTrigger: {
      id: "kidstrigger",
      trigger: '#js-pinned-elem-kids',
      start: "center center",
      end: "+=2000",
      scrub: true,
      markers: false,
      pin: true,
    }
  });
  const elem = document.querySelector('.landkids3__block');
  const container = document.querySelector('.js-scroll-width-base');
  const widthToScroll = -elem.scrollWidth + container.offsetWidth;
  kidsTimeLine.to('.landkids3__block', {
    x: widthToScroll,
    ease: 'linear',
  });


  document.addEventListener('click', e => {
    const actButton = e.target.closest('.landkids1__action');
    if(!actButton) return;
    ScrollTrigger.getById("kidstrigger").disable(true);
  });

}
startGsapKids();
