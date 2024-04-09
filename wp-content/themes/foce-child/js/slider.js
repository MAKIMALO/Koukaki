document.addEventListener('DOMContentLoaded', function() {
  console.log("test");
  const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 10,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
      rotate: 55,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
  });
});