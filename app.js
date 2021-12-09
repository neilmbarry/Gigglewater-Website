const sectionAbout = document.querySelector(".section-about");
const sectionAboutTitle = document.querySelector(".section-about-title");
const sectionAboutCards = document.querySelector(".cards-container");
const sectionReviews = document.querySelector(".section-reviews");
const sectionReviewsTitle = document.querySelector(".section-reviews-title");
const sectionReviewsCards = document.querySelector(".slider");

const revealSection = function (entries, observer) {
  const [entry] = entries;
  //console.log(entry);
  if (!entry.isIntersecting) return;
  sectionAboutTitle.classList.remove("title-hidden");
  console.log(1);
  setTimeout(() => {
    sectionAboutCards.classList.remove("card-blur");
  }, 1000);

  //observer.unobserve(entry.target);
};

const revealSection2 = function (entries, observer) {
  const [entry] = entries;
  //console.log(entry);
  if (!entry.isIntersecting) return;
  sectionReviewsTitle.classList.remove("title-hidden");
  console.log(2);
  setTimeout(() => {
    sectionReviewsCards.classList.remove("slider-blur");
  }, 300);

  //observer.unobserve(entry.target);
};

const header = document.querySelector(".header");
const navigation = document.querySelector(".nav");

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0,
  // rootMargin: "-300px",
});

const navigationObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      console.log(entry.intersectionRatio);
      if (entry.intersectionRatio <= 0.2) {
        navigation.classList.add("nav-sticky");
      } else {
        navigation.classList.remove("nav-sticky");
      }
    });
  },
  { threshold: 0.2 }
);

navigationObserver.observe(header);

const sectionObserver2 = new IntersectionObserver(revealSection2, {
  root: null,
  threshold: 0,
  // rootMargin: "-300px",
});

sectionObserver.observe(sectionAbout);
sectionObserver2.observe(sectionReviews);
//---delete me---//section.classList.add('section--hidden');

const slides = document.querySelectorAll(".slide");
const btnLeft = document.querySelector(".slider__btn--left");
const btnRight = document.querySelector(".slider__btn--right");
const dotContainer = document.querySelector(".dots");

let curSlide = 0;
const maxSlide = slides.length;

const slider = document.querySelector(".slider");
// slider.style.transform = 'scale(0.3) translateX(-1200px)';
// slider.style.overflow = 'visible';

//--------------------------------------Functions

const createDots = function () {
  slides.forEach(function (_, i) {
    dotContainer.insertAdjacentHTML(
      "beforeend",
      `
    <button class="dots__dot" data-slide="${i}"></button>
    `
    );
  });
};

const activateDot = function (slide) {
  document
    .querySelectorAll(".dots__dot")
    .forEach((dot) => dot.classList.remove("dots__dot--active"));
  document
    .querySelector(`.dots__dot[data-slide="${slide}"]`)
    .classList.add("dots__dot--active");
};

const goToSlide = (slide) => {
  slides.forEach((s, i) => {
    s.style.transform = `translateX(${(i - slide) * 100}%)`;
  });
};

//Next slide
const nextSlide = function () {
  if (curSlide === maxSlide - 1) curSlide = 0;
  else curSlide++;
  goToSlide(curSlide);
  activateDot(curSlide);
};

const prevSlide = function () {
  if (curSlide === 0) curSlide = maxSlide - 1;
  else curSlide--;
  goToSlide(curSlide);
  activateDot(curSlide);
};

const init = function () {
  goToSlide(0);
  createDots();
  activateDot(0);
};

init();

//------------------------------------Event Handlers

btnRight.addEventListener("click", nextSlide);
btnLeft.addEventListener("click", prevSlide);

document.addEventListener("keydown", function (e) {
  //console.log(e);
  if (e.key === "ArrowLeft") prevSlide();
  if (e.key === "ArrowRight") nextSlide();
});

dotContainer.addEventListener("click", function (e) {
  if (e.target.classList.contains("dots__dot")) {
    const { slide } = e.target.dataset;
    curSlide = +slide;
    goToSlide(curSlide);
    activateDot(curSlide);
  }
});

//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
//Shopping Cart
