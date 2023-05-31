import 'hystmodal/css';
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


initSliders();
startAccordeons();
initVideoReviews();
initScrollTo();
initScrollTop();
initScrollAnimation();
startInputMask();
startTabs();
initBlog();


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
});



/**
 * Ленивая подгрузка картинок
 * см. https://github.com/verlok/vanilla-lazyload
 */
new LazyLoad();



const promocodeLink = () => {
  document.addEventListener('click', (e) => {
    const promolink = e.target.closest('.js-promolink');
    if(!promolink) return;
    e.preventDefault();
    promolink.closest('.promobox')?.classList?.add('is-active');
  });
};
promocodeLink();


if(document.querySelector('.page-template-page-main')) initFrontpage();



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
    console.log(e.target);
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
