export const initFrontpage = () => {
  gsap.registerPlugin(ScrollTrigger);


  if(document.querySelector('.front2')){
    gsap.fromTo('.frontlead__bgs', { opacity: 1 }, {
      opacity: 0,
      scrollTrigger: {
        trigger: '.front2',
        start: '-600',
        end: '0',
        scrub: true
      }
    });


    if( window.innerWidth > 1000){
      const pinTimeline = gsap.timeline({
        scrollTrigger: {
          trigger: '.front2',
          start: "top bottom",
          end: 'bottom top',
          scrub: true,
          markers: false,
          pin: false,
        }
      });
      pinTimeline.to('.front2--0', {
        y: -400,
        ease: 'linear',
      }, 'anim2');
      pinTimeline.to('.front2--1', {
        y: -100,
        ease: 'linear',
      }, 'anim2');
      pinTimeline.to('.front2--2', {
        y: -250,
        ease: 'linear',
      }, 'anim2');
      pinTimeline.to('.front2--3', {
        y: -500,
        ease: 'linear',
      }, 'anim2');
    }
  }

  if(document.querySelector('.front4')){
    gsap.to('body', {
      'background-color': 'rgb(231, 226, 255)',
      scrollTrigger: {
        trigger: '.front4',
        start: 'center center',
        end: '+1000',
        scrub: true
      }
    });
  }


  if(document.querySelector('.js-front5-title')){
    const picswrap = document.querySelector('.aboutscrollpixs');

    const pinTimeline = gsap.timeline({
      scrollTrigger: {
        trigger: '.js-front5-title',
        start: "center center",
        end: '2500px',
        scrub: true,
        markers: false,
        pin: true,
      }
    });

    if(document.querySelector('.front5--about')){
      pinTimeline.to('.front5--about', {
        'background-color': 'rgba(255, 255, 255, 0)',
        duration: 5,
        ease: Expo.easeIn,
      }, 'myLabel');
    }

    if(document.querySelector('.front5--front')){
      pinTimeline.to('body', {
        'background-color': 'rgb(245, 238, 230)',
        duration: 5,
        ease: Expo.easeIn,
      }, 'myLabel');
    }

    pinTimeline.to(picswrap, {
      y: `-${picswrap.scrollHeight + window.innerHeight}`,
      ease: "linear",
      duration: 5,
    }, 'myLabel');


    pinTimeline.to('.front5__pic2', {
      y: '-600',
      ease: "linear",
      duration: 5,
    }, 'myLabel');

    pinTimeline.fromTo('.front5__sub', {
      scale: 0.95,
      opacity: '0',
      ease: "linear",
      duration: 1,
    }, {
      scale: '1',
      opacity: '1',
      ease: "linear",
      duration: 1,
    });
  }



  const bgs = Array.from(document.querySelectorAll('.js-frontlead-bgs .frontleadbg'));
  const bgsFront3 = Array.from(document.querySelectorAll('.front3__bg'));
  if(bgs.length || bgsFront3.length){
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
      } else {
        bgsFront3.forEach((bg, index) => {
          bg.classList.remove('is-active');
        })
      }
    });
  }

};





function animateAstrolog(){
  const astroblock = document.querySelector('.astroabout__sideblock');
  if(!astroblock || window.innerWidth < 1000) return;

  gsap.timeline({
    scrollTrigger: {
      trigger: ".astroabout__wrap",
      pin: ".astroabout__sideblock",
      start: "310 center",
      end:"bottom +=620",
      scrub: 1,
      markers: false,
    }
  });
}
animateAstrolog();





function animateAbout(){
  const about1 = document.querySelector('.aboutloader');
  const about1logo = document.querySelector('.aboutloader__pre');
  const about1bg = document.querySelector('.aboutloader__hero');
  if(!about1) return;

  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: ".aboutloader",
      pin: ".aboutloader",
      start: "top top",
      end:"bottom top",
      scrub: true,
      markers: false,
    }
  });

  timeline.to(about1logo, {
    scale: 6,
    ease: 'linear',
  }, 'aboutlabel');
  timeline.to(about1bg, {
    scale: 1.1,
    ease: 'linear',
  }, 'aboutlabel');


  const timelineOpac = gsap.timeline({
    scrollTrigger: {
      trigger: ".aboutloader__opacitystart",
      start: "top top",
      end:"400px",
      scrub: true,
      markers: false,
    }
  });
  timelineOpac.to(about1logo, {
    opacity: 0,
  });


  const timeline2 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about2",
      start: "top bottom",
      end: "+=500",
      scrub: true,
      markers: false,
    }
  });
  timeline2.to(about1bg, {
    opacity: 0,
  });


  const timeline3 = gsap.timeline({
    scrollTrigger: {
      trigger: ".about2__sub",
      start: "top bottom",
      end: "top top",
      scrub: 1,
      markers: false,
    }
  });
  timeline3.to('.about2__fig1', {
    y: -800,
  });
  timeline3.to('.about2__fig2', {
    y: -250,
  }, '<');
  timeline3.fromTo('.about2__fig3',{
    y: 500,
  }, {
    y: -200,
  }, '<');
  timeline3.to('.about2__fig4', {
    y: -1000,
  }, '<');


  if(window.innerWidth > 992){
    document.querySelectorAll('[data-gsapx]').forEach((elem) => {
      const timeline4 = gsap.timeline({
        scrollTrigger: {
          trigger: elem,
          start: "top bottom",
          end: "top top",
          scrub: 1,
          markers: false,
        }
      });
      timeline4.fromTo(elem, {
        x: parseInt(elem.dataset.gsapx)
      }, {
        x: -parseInt(elem.dataset.gsapx),
      });

      window.rehreshGsap = () => {
        console.log('рефреш');
        timeline4.refresh();
      }
    });
  }
}
animateAbout();







function animanteFacultets(){
  const hero = document.querySelector('.faculthero');
  if(!hero) return;
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: hero,
      start: "top top",
      end: "+=600",
      markers: false,
      scrub: 0,
    },
  });
  tl.to('.faculthero__bgbutton', {
    scale: 26,
  });
  tl.to('.faculthero__button', {
    'color': '#000',
    duration: 0.1,
  }, '<');
  tl.to('.faculthero__button', {
    scale: 0,
    duration:0.2,
  }, '<');

  hero.querySelectorAll('[data-x]').forEach((elem) => {
    tl.to(elem, {
      scale: parseFloat(elem.dataset.scale),
      x: parseFloat(elem.dataset.x),
      y: parseFloat(elem.dataset.y),
    }, '<');
  });

  const tl2 = gsap.timeline({
    scrollTrigger: {
      trigger: '.facultprogs',
      start: "top top",
      end: "+=1",
      markers: false,
      scrub: 0.1,
    },
  });
  tl2.to('.faculthero__buttonwrap', {
    'display': 'none',
    duration:0.2,
  });
}
animanteFacultets();
