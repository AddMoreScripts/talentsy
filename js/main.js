import 'hystmodal/css';
import "swiper/css/bundle";
import '@fancyapps/ui/dist/fancybox.css';
import HystModal from 'hystmodal';
import LazyLoad from 'vanilla-lazyload';
import { Fancybox } from '@fancyapps/ui';

import initScrollTop from './components/scrollTop';
import initScrollTo from './components/scrollTo';
import { initSliders } from './components/sliders';
import { startAccordeons } from './components/accordeons';
import initVideoReviews from './components/videoreview';
import initScrollAnimation from './components/scrollAnimation';
import startInputMask from './components/phonemasks';
import { initFrontpage } from './components/frontpage';
import { startTabs } from './components/tabs';
import '../styles/app.scss';
import { initBlog } from './components/blog';
import Masonry from 'masonry-layout';
import { initBlogPagination } from './components/blogPagination';


initSliders();
startAccordeons();
initVideoReviews();
initScrollTo();
initScrollTop();
initScrollAnimation();
startInputMask();
startTabs();
initBlog();
initBlogPagination();


/**
 * Галерея FancyBox
 * см. https://fancyapps.com/fancybox/
 */
Fancybox.bind('[data-fancybox]', {
  Toolbar: {
    display: ['close'],
  },
  Image: {
    zoom: false,
  },
  compact: true,
  animated: false,
  preload: 0,
  placeFocusBack: false,
  template: {
    buttons: '',
  },
});


/**
 * Модальные окна
 * см. https://addmorescripts.github.io/hystModal/index_ru.html
 */
window.modalInstance = new HystModal({
  linkAttributeName: "data-hystmodal",
  waitTransitions: true,
  catchFocus:false,
  backscroll: true,

  beforeOpen: (instance) => {
    if(instance.element.id === 'menuSearchModal'){
      setTimeout(() => {
        instance.element.querySelector('input[type="search"]').focus();
      }, 200);
    }
  }
});



/**
 * Ленивая подгрузка картинок
 * см. https://github.com/verlok/vanilla-lazyload
 */
new LazyLoad();
const reviewSliderCont = document.querySelector(".reviewsslider__cont");
if(reviewSliderCont){
  const myLazyLoad2 = new LazyLoad({
    container: reviewSliderCont
  });
}
document.querySelectorAll('.grid-mob-scroll').forEach(el => {
  new LazyLoad({ container: el });
})



const promocodeLink = () => {
  document.addEventListener('click', (e) => {
    const promolink = e.target.closest('.js-promolink');
    if(!promolink) return;
    e.preventDefault();
    promolink.closest('.promobox')?.classList?.add('is-active');
  });
};
promocodeLink();


if(document.querySelector('.js-need-gsap')) initFrontpage();



const appHeight = () => {
  const doc = document.documentElement
  doc.style.setProperty('--app-height', `${window.innerHeight}px`)
};
window.addEventListener('resize', appHeight);
appHeight();




function articleTableOfContent(){
  const wrap = document.querySelector('.js-toc');
  if (!wrap) return;
  const box = wrap.querySelector('.js-togbox');
  wrap.addEventListener('click', (e) => {
    // console.log(e.target);
    const longer = e.target.closest('.js-longer');
    if (longer) {
      box.style.height = `${box.scrollHeight}px`;
      box.classList.add('is-long');
      return;
    }
    const shorter = e.target.closest('.js-short');
    if (shorter) {
      box.style.height = '';
      box.classList.remove('is-long');
      return;
    }
    const toggler = e.target.closest('.js-toggler');
    if (toggler) {
      if(wrap.classList.contains('is-open')){
        box.style.height = `${box.scrollHeight}px`;
        wrap.classList.remove('is-open');
        setTimeout(() => box.style.height = ``, 10);
        box.classList.remove('is-long');
      } else {
        if(!box.classList.contains('tableofcontent__minimum')){
          box.style.height = `${box.scrollHeight}px`;
        }
        wrap.classList.add('is-open');
      }
      return;
    }
  });
}
articleTableOfContent();






function changeYoutubeIframe(){
  document.addEventListener('click', (e) => {
    const youtube = e.target.closest('.js-changeiframe');
    if(!youtube) return;
    e.preventDefault();
    const iframe = `<iframe src="https://www.youtube.com/embed/${youtube.dataset.link}?enablejsapi=1&rel=0&showinfo=0" class="square__img" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen width="400" height="400"></iframe>`;
    youtube.classList.add('is-opened');
    youtube.innerHTML = iframe;
    const youtubePlayer = youtube.querySelector('iframe');
    setTimeout(() => {
      console.log('Пытаемся');
      youtubePlayer.contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
    }, 1000);
  });
}
changeYoutubeIframe();






function startBricks(){
  var grid = document.querySelector('.reviewpage__screens');
  if(!grid) return;
  window.addEventListener('load', () => {
    window.msnry = new Masonry( grid, {
      itemSelector: '.reviewpage__screenlink',
      columnWidth: '.reviewpage__screenlink',
      percentPosition: true,
      horizontalOrder: false,
      transitionDuration: 0,
    });
  });
}
startBricks();




function startFileInput(){
  document.addEventListener('change', (e) => {
    const fileInp = e.target.closest('.fileinput input');
    if(!fileInp) return;
    const infoElem = fileInp.parentElement.querySelector('.fileinput__info');

    const newFile = e.target.files[0];
    if (newFile.size > 10485760) {
      alert("Ошибка. Файл больше 10 МБ!");
      fileInp.value = "";
      infoElem.innerHTML = '';
      return;
    }

    infoElem.innerHTML = newFile.name;
    return;
  });
}
startFileInput();
