const initVideoReviews = () => {
  const wrapper = document.querySelector('.js-review-slider');
  if(!wrapper) return;

  wrapper.addEventListener('mouseover', (e) => {
    const video = e.target.closest('.reviewsslider__screen');
    if(!video) return;
    video.play();
  });
  wrapper.addEventListener('mouseout', (e) => {
    const video = e.target.closest('.reviewsslider__screen');
    if(!video) return;
    video.pause();
  });
};
export default initVideoReviews;
