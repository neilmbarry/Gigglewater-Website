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
  setTimeout(() => {
    sectionAboutCards.classList.remove("card-blur");
  }, 200);

  //observer.unobserve(entry.target);
};

const revealSection2 = function (entries, observer) {
  const [entry] = entries;
  //console.log(entry);
  if (!entry.isIntersecting) return;
  sectionReviewsTitle.classList.remove("title-hidden");
  setTimeout(() => {
    sectionReviewsCards.classList.remove("slider-blur");
  }, 300);

  //observer.unobserve(entry.target);
};

const sectionObserver = new IntersectionObserver(revealSection, {
  root: null,
  threshold: 0,
  rootMargin: "-300px",
});

const sectionObserver2 = new IntersectionObserver(revealSection2, {
  root: null,
  threshold: 0,
  rootMargin: "-300px",
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
const menuItemRef = {
  pine: {
    name: "Pine Of No Return",
    price: 67.5,
    description: ["Tequila", "Lime", "Pineapple", "Bitters"],
    servings: "7+",
  },
  mango: {
    name: "The Mongolorian",
    price: 70,
    description: ["Rum", "Lemon", "Mango", "Bitters"],
    servings: "7+",
  },
  popit: {
    name: "Pop It Like It's Hot",
    price: 65,
    description: ["Vodka", "Lemon", "Vanilla", "Bitters"],
    servings: "7+",
  },
  deep: {
    name: "Deep Dive",
    price: 67.5,
    description: [
      "Ketel One Vodka",
      "Blueberry",
      "Ginger",
      "Pink Peppercorn",
      "Lemon",
      "Soda",
    ],
    servings: "7+",
  },
  laffy: {
    name: "The Laffy Taffy",
    price: 67.5,
    description: [
      "Bombay Sapphire Gin",
      "Strawberry",
      "Apricot Peach Tea",
      "Lemon",
      "Chocolate Bitters",
      "Banana Essence",
    ],
    servings: "7+",
  },
};

const cart = {
  shoppingItems: [],
};
const shoppingItems = document.querySelector(".shopping");
const cartEl = document.querySelector(".cart");
const cartContents = document.querySelector(".cart-contents");
const cartTotals = document.querySelector(".cart-totals");
//const cartItem;

const persistCart = function () {
  localStorage.setItem("cart", JSON.stringify(cart.shoppingItems));
};

const cartToggle = () => {
  cartEl.classList.toggle("cart-hide");
};

const removeCartItem = (index) => {
  cart.shoppingItems.splice(index, 1);
  createCart();
  persistCart();
  createTotals();
};

const createCart = () => {
  cartContents.innerHTML = "";
  if (cart.shoppingItems.length === 0) return;
  const text = cart.shoppingItems
    .map((item, i) => {
      return `<div class="cart-item" id=${i}>
    <div class="cart-item-pic">
      <img src="/logo-big.png" alt="item-pic" />
    </div>
    <div class="cart-item-title">${menuItemRef[item].name}</div>
    <div class="cart-item-quantity">Quantity</div>
    <div class="cart-item-price">$${menuItemRef[item].price.toFixed(2)}</div>
    <button class="cart-btn">X</button>
  </div>`;
    })
    .join("");
  //console.log(text);

  cartContents.insertAdjacentHTML("afterbegin", text);
};

const createTotals = () => {
  cartTotals.innerHTML = "";
  if (cart.shoppingItems.length === 0) return;
  const totalPrice = cart.shoppingItems.reduce((acc, item) => {
    return +menuItemRef[item].price + acc;
  }, 0);
  const tax = totalPrice * 0.13;
  const grandTotal = totalPrice + tax;
  const html = `
  <div class="cart-totals-sub">Sub-Total: $${totalPrice.toFixed(2)}</div>
        <div class="cart-totals-tax">Taxes: $${tax.toFixed(2)}</div>
        <div class="cart-totals-grand">Grand Total: $${grandTotal.toFixed(
          2
        )}</div>
  
  `;
  cartTotals.insertAdjacentHTML("afterbegin", html);
};

shoppingItems.addEventListener("click", (e) => {
  if (e.target.id === "clear") {
    localStorage.clear("cart");
    cart.shoppingItems = [];
    createCart();
    createTotals();
    return;
  }
  if (e.target.id === "checkout") {
    createCart();
    cartToggle();
  }
  const item = e.target.closest(".shopping-item")?.id;
  if (!item) return;
  cart.shoppingItems.push(item);
  createCart();
  persistCart();
  createTotals();
});

const init2 = function () {
  //clearBookmarks();
  const storage = localStorage.getItem("cart");
  if (storage) cart.shoppingItems = JSON.parse(storage);
  createCart();
  createTotals();
};

cartContents.addEventListener("click", (e) => {
  if (!e.target.classList.contains("cart-btn")) return;
  const delID = e.target.closest(".cart-item").id;
  removeCartItem(delID);
});

init2();
