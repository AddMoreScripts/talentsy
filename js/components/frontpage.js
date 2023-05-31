export const initFrontpage = () => {
  if(!document.querySelector('.smooth-wrapper')) return;

  gsap.registerPlugin(ScrollTrigger, ScrollSmoother);


  let isSmoothrKilled = true;
  let smoother = null;

  if(window.innerWidth > 990){
    smoother = ScrollSmoother.create({
      wrapper: '.smooth-wrapper',
      content: '.smooth-content',
      smooth: 1,
      effects: true,
      normalizeScroll: true,
    });
    isSmoothrKilled = false;
  }


	gsap.fromTo('.frontlead__bgs', { opacity: 1 }, {
		opacity: 0,
		scrollTrigger: {
			trigger: '.front2',
			start: '-600',
			end: '0',
			scrub: true
		}
	});


  gsap.fromTo('body', { 'background-color': '#ffffff' }, {
		'background-color': 'rgb(231, 226, 255)',
		scrollTrigger: {
			trigger: '.front4',
			start: 'center center',
			end: '+1000',
			scrub: true
		}
	});


  const offsetElem = document.querySelector('.front5__titlewrap');

  const pinTimeline = gsap.timeline({
    scrollTrigger: {
      trigger: '.js-front5-title',
      start: "center center",
      endTrigger: '.front6',
      end: `-${(offsetElem.scrollHeight / 2)}px center`,
      scrub: true,
      markers: false,
      pin: true,
      pinSpacing: false,
    }
  });


  pinTimeline.to('.front5__pic2', {
    y: '-250',
  });


  const animateIn = gsap.timeline({
    scrollTrigger: {
      trigger: '.js-opacstart',
      start: "top center",
      markers: false,
      end: `+=10`,
      toggleActions: "play none none reverse",
      ease: 'none',
    }
  });
  animateIn.fromTo('.front5__sub', {
    scale: '1',
    opacity: '0',
  }, {
    scale: '1',
    opacity: '1',
  });
  animateIn.to('body', {
    'background-color': 'rgb(245, 238, 230)',
  });


  const bgs = Array.from(document.querySelectorAll('.js-frontlead-bgs .frontleadbg'));
  const bgsFront3 = Array.from(document.querySelectorAll('.front3__bg'));

  document.addEventListener('mouseover', (e) => {
    if(window.innerWidth < 1200) return;

    const hoverEl = e.target.closest('.js-fronthover');
    if(hoverEl){
      bgs.forEach((bg, index) => {
        if(parseInt(hoverEl.dataset.hover) === index + 1){
          bg.classList.add('is-active');
        } else {
          bg.classList.remove('is-active');
        }
      });
      return;
    }

    const facultetHover = e.target.closest('.js-front3-link');
    if(facultetHover){
      bgsFront3.forEach((bg, index) => {
        if(parseInt(facultetHover.dataset.bgnum) === index){
          bg.classList.add('is-active');
        } else {
          bg.classList.remove('is-active');
        }
      });
      return;
    }
  });
};
