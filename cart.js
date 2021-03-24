//Shopping Cart
const cartCheck = () => {
  const quantity = state.cart2.length;
  const cartNotification = document.querySelector(".cart-notification");

  if (!quantity) {
    cartNotification.classList.remove("cart-notification-hide");
    cartNotification.classList.add("cart-notification-hide");
    return;
  }

  cartNotification.classList.remove("cart-notification-hide");
  cartNotification.textContent = quantity >= 10 ? "9+" : quantity;
};

const deliveryPrices = {
  7: [
    "M7A",
    "M5B",
    "M5G",
    "M6G",
    "M5H",
    "M6H",
    "M5J",
    "M6J",
    "M5K",
    "M6K",
    "M5L",
    "M6P",
    "M5R",
    "M6R",
    "M5S",
    "M6S",
    "M5T",
    "M4V",
    "M5V",
    "M5X",
  ],
  8: ["M5C", "M5E", "M6N", "M4T", "M5W", "M4Y"],
  9: ["M5A", "M4W", "M4X"],
  10: ["M6C", "M6E", "M5P", "M4S", "M8X"],
  11: ["M6B"],
  12: [
    "M6A",
    "M9A",
    "M4J",
    "M4K",
    "M4M",
    "M6M",
    "M5N",
    "M4P",
    "M4R",
    "M8V",
    "M8Y",
  ],
  13: ["M7Y"],
  14: ["M3K", "M8Z"],
  15: ["M9B", "M6L", "M4N", "M9N", "M9P"],
  16: ["M9C", "M4G", "M4L", "M9R"],
  18: ["M4E", "M3H", "M3M", "M5M", "M9M", "M8W", "M4C"],

  21: ["M4A", "M4H", "M3J", "M2K", "M3L", "M9L", "M9W"],
  25: ["M3A", "M3B", "M3C"],
};

const menuItemRef = {
  cocktails: {
    pine: {
      name: "Pine Of No Return",
      price: 70,
      description: ["Tequila", "Lime", "Pineapple", "Bitters"],
      servings: "7+",
    },
    mango: {
      name: "The Mangolorian",
      price: 67.5,
      description: ["Rum", "Lemon", "Mango", "Bitters"],
      servings: "7+",
    },
    popit: {
      name: "Pop It Like It's Hot",
      price: 67.5,
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
    deshler: {
      name: "Applewood Deshler",
      price: 70,
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
    titan: {
      name: "I'm A Titan",
      price: 70,
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
    paper: {
      name: "Paper Flame",
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
    after: {
      name: "After Eight, Before Nine",
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
    butter: {
      name: "Hot Buttered Rum",
      price: 20,
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
  },
  food: {
    none: {
      name: "No food selected",
      price: 0,
    },
    chips: {
      name: "Ruffles Potato Chips",
      price: 0.75,
    },
    olives: {
      name: "Anchovy-Stuffed Olives",
      price: 6,
    },
    choc: {
      name: "Onyx Box Bon-bons",
      price: 15,
    },
    // cheese: {
    //   name: "Great Cheese",
    //   price: 9,
    // },
  },
  merch: {
    spoonSS: {
      name: "Barspoon (Stainless Steel)",
      price: 18,
    },
    spoonGB: {
      name: "Barspoon (Gunmetal Black)",
      price: 25,
    },
    hawthorneSS: {
      name: "Hawthorn Strainer (Stainless Steel)",
      price: 19,
    },
    hawthorneGB: {
      name: "Hawthorn Strainer (Gunmetal Black)",
      price: 25,
    },
    shakerSS: {
      name: "Shaker Set (Stainless Steel)",
      price: 25,
    },
    shakerGB: {
      name: "Shaker Set (Gunmetal Black)",
      price: 40,
    },
    jiggerSS: {
      name: "Jigger (Stainless Steel)",
      price: 19,
    },
    jiggerGB: {
      name: "Jigger (Gunmetal Black)",
      price: 18,
    },
    cone: {
      name: "Conical Fine Strainer",
      price: 12,
    },
    cobbler: {
      name: "Cobbler Shaker (Gunmetal Black)",
      price: 65,
    },
    mixing: {
      name: "Riedel Mixing Glass",
      price: 60,
    },
    straw: {
      name: '7.5" Straw (Stainless Steel)',
      price: 1.5,
    },
    shirt: {
      name: "Gigglewater T-Shirt",
      price: 25,
      size: ["S", "M", "L"],
    },
    hoody: {
      name: "Gigglewater Hoody",
      price: 45,
      size: ["S", "M", "L"],
    },
    cap: {
      name: "Gigglewater Cap",
      price: 45,
    },
    rocks: {
      name: "Rocks Glass",
      price: 11,
    },
    rocksS: {
      name: "Rocks Glass (Short)",
      price: 11,
    },
    coupe: {
      name: "Coupe",
      price: 11,
    },
    nick: {
      name: "Nick & Nora",
      price: 11,
    },
    collins: {
      name: "Collins",
      price: 11,
    },
    olives: {
      name: "Anchovy-Stuffed Olives",
      price: 6,
    },
    potChips: {
      name: "Ruffle's Potato Chips",
      price: 0.75,
    },
    falernum: {
      name: "House-made Falernum",
      price: 10,
    },
    choc: {
      name: "Onyx Box Bon-bons",
      price: 15,
    },
  },
};

// const cart = [];

let state = {
  cart2: [],
  contactDetails: {
    name: "",
    email: "",
    phone: "",
    address: {
      address1: "",
      address2: "",
      city: "",
      postcode: "",
    },
    recipient: {
      name: "",
      phone: "",
    },
    message: "",
  },
  price: {
    cartTotal: 0,
    subtotal: 0,
    delivery: 0,
    tax: 0,
    grandTotal: 0,
    tip: 0,
    tipOption: 0,
  },
  delivered: false,
  preference: {
    pickup: "",
    delivery: "",
  },
};

//let state.cart = {};
const shoppingItems = document.querySelector(".shopping");
const cartEl = document.querySelector(".cart");
const cartContents = document.querySelector(".cart-contents");
const cartTotals = document.querySelector(".cart-totals");
const cartIcon = document.querySelector(".cart-icon");
const nextBtn = document.querySelector(".cart-box");
const summaryBtn = document.querySelector(".contact-box");
const postBtn = document.querySelector(".btn-post");
const summaryIcon = document.querySelector(".summary-icon");
const deliveryOptions = document.querySelector(".radio-container");
const contactForm = document.querySelector(".contact-form");

const orderForm = document.querySelector(".order-form");

//const cartItem;

const storeState = function () {
  // const updatedCart = {};
  // // Object.keys(state.cart).forEach((elem) => {
  // //   if (state.cart[elem].quantity !== 0) {
  // //     updatedCart[elem] = { ...state.cart[elem] };
  // //   }
  // // });
  // state.cart = updatedCart;
  //console.log(updatedCart);
  localStorage.setItem("state", JSON.stringify(state));
};

const clearState = () => {
  localStorage.clear("state");
  state = {
    cart2: [],
    contactDetails: {
      name: "",
      email: "",
      phone: "",
      address: {
        address1: "",
        address2: "",
        city: "",
        postcode: "",
      },
      recipient: {
        name: "",
        phone: "",
      },
      message: "",
    },
    price: {
      cartTotal: 0,
      subtotal: 0,
      delivery: 0,
      tax: 0,
      grandTotal: 0,
      tip: 0,
      tipOption: 0,
    },
    delivered: false,
    preference: {
      pickup: "",
      delivery: "",
    },
  };
};

//---------------CART-----------------//

const cartToggle = () => {
  cartEl.classList.toggle("cart-hide");
};

const removeCartItem = (index) => {
  state.cart2.splice(index, 1);

  //state.cart[Object.keys(state.cart)[index]].quantity = 0;
  createTotals();
  storeState();
  updateCartUI();
  cartCheck();
};

const addCartItem = (id) => {
  if (Object.keys(menuItemRef.cocktails).includes(id)) {
    state.cart2.push({
      name: id,
      food: "chips",
    });
  } else {
    state.cart2.push({
      name: id,
    });
  }
  createTotals();
  storeState();
  updateCartUI();

  cartCheck();
};

// const quantityUp = (index) => {
//   const elem = Object.keys(state.cart)[index];

//   const updatedCart = {
//     ...state.cart,
//     [elem]: {
//       ...state.cart[elem],
//       food: state.cart[elem].food.concat(["none"]),
//       quantity: state.cart[elem].quantity + 1,
//     },
//   };

//   state.cart = updatedCart;
//   createTotals();
//   storeState();
//   updateCartUI();
// };

// const quantityDown = (index) => {
//   const elem = Object.keys(state.cart)[index];
//   if (elem.quantity === 1) {
//     removeCartItem(index);
//   }

//   const updatedCart = {
//     ...state.cart,
//     [elem]: {
//       quantity: state.cart[elem].quantity - 1,
//       food: state.cart[elem].food,
//     },
//   };

//   const updatedCart2 = {};
//   Object.keys(updatedCart).forEach((elem) => {
//     if (updatedCart[elem].quantity !== 0) {
//       updatedCart2[elem] = { ...updatedCart[elem] };
//     }
//   });
//   state.cart = updatedCart2;

//   createTotals();
//   storeState();
//   updateCartUI();
// };

const updateFood = (index, newValue, menuRef) => {
  state.cart2[index].food = newValue;

  createTotals();
  storeState();
  updateCartUI();
};

// const createCart = () => {
//   cartContents.innerHTML = "";
//   if (cart.shoppingItems.length === 0) return;
//   const text = cart.shoppingItems
//     .map((item, i) => {
//       return `<div class="cart-item" id=${i}>
//     <div class="cart-item-pic">
//       <img src="/logo-big.png" alt="item-pic" />
//     </div>
//     <div class="cart-item-title">${menuItemRef[item].name}</div>
//     <div class="cart-item-quantity">Quantity</div>
//     <div class="cart-item-price">$${menuItemRef[item].price.toFixed(2)}</div>
//     <button class="cart-btn">X</button>
//   </div>`;
//     })
//     .join("");
//   //console.log(text);

//   cartContents.insertAdjacentHTML("afterbegin", text);
// };

const updateCartUI = () => {
  // cartContents.innerHTML = "";
  // if (cart.shoppingItems.length === 0) return;

  if (!state.cart2) return;

  const cartHtml = state.cart2.map((item, i) => {
    //console.log(item.name);
    const isCocktail = Object.keys(menuItemRef.cocktails).includes(item.name);
    //console.log(isCocktail);
    const itemName = isCocktail
      ? menuItemRef.cocktails[item.name].name
      : menuItemRef.merch[item.name].name;
    const foodOptions = isCocktail
      ? `<select class="cart-item-food" id=''>
       ${Object.keys(menuItemRef.food)
         .map((el) => {
           //console.log(el);
           const answer = `<option value='${el}' ${
             el === item.food ? "selected" : null
           }>${menuItemRef.food[el].name} - $${
             menuItemRef.food[el].price
           }</option>`;

           return answer;
         })
         .join("")}</select>
         `
      : `<div class="cart-item-food"></div>`;

    const itemPrice = isCocktail
      ? `
       <div class="cart-item-price">$${menuItemRef.cocktails[
         item.name
       ].price.toFixed(
         2
       )}<br><div class='cart-item-food_price'>+$${menuItemRef.food[
          item.food
        ].price.toFixed(2)}</div></div>
       `
      : `<div class="cart-item-price">$${menuItemRef.merch[
          item.name
        ].price.toFixed(2)}</div>`;

    return `<div class="cart-item" id=${i}>
             <div class="cart-item-pic"></div>
             <div class="cart-item-title">
               <div class="cart-item-title-text">
                 ${itemName}
               </div>
            </div>
      ${foodOptions}
      ${itemPrice}
      <button class="cart-btn">X</button>
      </div>`;
  });

  // let indexCount = 0;

  // let cart3 = ``;
  // Object.keys(state.cart).map((elem) => {
  //   let foodIndex = 0;
  //   for (let i = 0; i < state.cart[elem].quantity; i++) {
  //     cart3 += `<div class="cart-item" id=${indexCount}>
  //     <div class="cart-item-pic">

  //     </div>

  //     <div class="cart-item-title"><div class="cart-item-title-text">${
  //       Object.keys(menuItemRef.cocktails).includes(elem)
  //         ? menuItemRef.cocktails[elem].name
  //         : menuItemRef.merch[elem].name
  //     }</div>

  //     ${
  //       Object.keys(menuItemRef.cocktails).includes(elem)
  //         ? `<select class="cart-item-food" id='${elem}'>${Object.keys(
  //             menuItemRef.food
  //           ).map((el) => {
  //             const answer = `<option value='${el}' ${
  //               el === state.cart[elem].food[foodIndex] ? "selected" : null
  //             }>${menuItemRef.food[el].name} - $${
  //               menuItemRef.food[el].price
  //             }</option>`;

  //             return answer;
  //           })}</select>`
  //         : ``
  //     }
  //     </div>

  //     ${
  //       Object.keys(menuItemRef.cocktails).includes(elem)
  //         ? `
  //       <div class="cart-item-price">$${menuItemRef.cocktails[
  //         elem
  //       ].price.toFixed(
  //         2
  //       )}<br><div class='cart-item-food_price'>+$${menuItemRef.food[
  //             state.cart[elem].food[foodIndex]
  //           ].price.toFixed(2)}</div></div>
  //       `
  //         : `
  //     <div class="cart-item-price">$${menuItemRef.merch[elem].price.toFixed(
  //       2
  //     )}</div>
  //     `
  //     }

  //     <button class="cart-btn">X</button>
  //   </div>`;
  //     indexCount++;
  //     foodIndex = foodIndex + 1;
  //   }
  // });

  // const cart = Object.keys(state.cart)
  //   .map((elem, i) => {
  //     return state.cart[elem].quantity
  //       ? `<div class="cart-item" id=${i}>
  //             <div class="cart-item-pic">

  //             </div>

  //             <div class="cart-item-title"><div class="cart-item-title-text">${
  //               Object.keys(menuItemRef.cocktails).includes(elem)
  //                 ? menuItemRef.cocktails[elem].name
  //                 : menuItemRef.merch[elem].name
  //             }</div>

  //             ${
  //               Object.keys(menuItemRef.cocktails).includes(elem)
  //                 ? `<select class="cart-item-food">${Object.keys(
  //                     menuItemRef.food
  //                   ).map((el) => {
  //                     return `<option value='${el}' ${
  //                       el === state.cart[elem].food ? "selected" : null
  //                     }>${menuItemRef.food[el].name} - $${
  //                       menuItemRef.food[el].price
  //                     }</option>`;
  //                   })}</select>`
  //                 : ``
  //             }
  //             </div>
  //             ${
  //               1 > 2
  //                 ? `<div class="cart-item-quantity">
  //               <button class="cart-item-decrease"><ion-icon class='quantity-icon' name="remove-circle-outline"></ion-icon></button>
  //               <div class="cart-item-quantity-number">${state.cart[elem].quantity}</div>
  //               <button class="cart-item-increase"><ion-icon class='quantity-icon' name="add-circle-outline"></ion-icon></button>
  //             </div>`
  //                 : ""
  //             }

  //             ${
  //               Object.keys(menuItemRef.cocktails).includes(elem)
  //                 ? `
  //               <div class="cart-item-price">$${(
  //                 menuItemRef.cocktails[elem].price * state.cart[elem].quantity
  //               ).toFixed(2)}<br><div class='cart-item-food_price'>+$${(
  //                     menuItemRef.food[state.cart[elem].food].price *
  //                     state.cart[elem].quantity
  //                   ).toFixed(2)}</div></div>
  //               `
  //                 : `
  //             <div class="cart-item-price">$${(
  //               menuItemRef.merch[elem].price * state.cart[elem].quantity
  //             ).toFixed(2)}</div>
  //             `
  //             }

  //             <button class="cart-btn">X</button>
  //           </div>`
  //       : null;
  //   })
  //   .join("");
  const totals = `
      <div class="cart-totals-sub">Cart-Total: $${state.price.cartTotal.toFixed(
        2
      )}</div>
          
          `;

  //console.log(text);

  // cartContents.insertAdjacentHTML("afterbegin", html);
  // cartContents.innerHTML = cart3;
  cartContents.innerHTML = cartHtml.join("");
  cartTotals.innerHTML = totals;

  //calculateSubTotal();
};

const optionSwitch = () => {
  const options = document.querySelectorAll(".contact-option");
  options.forEach((el) => {
    el.classList.toggle("contact-option-active");
  });
};

//---------------CONTACT-----------------//

contactForm.addEventListener("submit", (e) => {
  e.preventDefault();
});

const updateContactUI = () => {
  const name = document.querySelector("#contact-name");
  const email = document.querySelector("#contact-email");
  const phone = document.querySelector("#contact-phone");
  const postcode = document.querySelector("#contact-postcode");
  const address1 = document.querySelector("#contact-address1");
  const address2 = document.querySelector("#contact-address2");
  const city = document.querySelector("#contact-city");
  const message = document.querySelector("#contact-personal-message");
  const recipPhone = document.querySelector("#recip-phone");
  const recipName = document.querySelector("#recip-name");
  name.value = state.contactDetails.name;
  email.value = state.contactDetails.email;
  phone.value = state.contactDetails.phone;
  postcode.value = state.contactDetails.address.postcode;
  city.value = state.contactDetails.address.city;
  address1.value = state.contactDetails.address.address1;
  address2.value = state.contactDetails.address.address2;
  message.value = state.contactDetails.message;
  recipPhone.value = state.contactDetails.recipient.phone;
  recipName.value = state.contactDetails.recipient.name;
  if (state.delivered === true) {
    document.querySelector("#radio-2").click();
    optionSwitch();
  }
};

// const calculateSubTotal = () => {
//   console.log(state.cart);
//   const totalPrice = Object.keys(state.cart).reduce((acc, item) => {
//     //console.log(menuItemRef.food[state.cart[item].food].price);
//     return (
//       (+menuItemRef.cocktails[item].price +
//         menuItemRef.food[state.cart[item].food].price) *
//         state.cart[item].quantity +
//       acc
//     );
//   }, 0);
//   state.cart.subTotal = totalPrice;
// };

const createTotals = () => {
  // if (cart.shoppingItems.length === 0) return;

  if (!state.cart2) return;
  const cartTotal = state.cart2.reduce((acc, item) => {
    const isCocktail = Object.keys(menuItemRef.cocktails).includes(item.name);
    //console.log(menuItemRef.food[state.cart[item].food].price);
    if (isCocktail) {
      return (
        +menuItemRef.cocktails[item.name].price +
        +menuItemRef.food[item.food].price +
        acc
      );
    } else {
      console.log(item);
      return +menuItemRef.merch[item.name].price + acc;
    }
  }, 0);
  //console.log(subTotal);
  const subTotal = +cartTotal + +state.price.delivery;
  const tax = subTotal * 0.13;
  const grandTotal = +subTotal + +tax + +state.price.tip;

  state.price.cartTotal = +cartTotal;
  state.price.subtotal = subTotal;
  state.price.tax = +tax;
  state.price.grandTotal = +grandTotal;
};

// shoppingItems.addEventListener("click", (e) => {
//   if (e.target.id === "clear") {
//     clearState();
//     updateCartUI();
//     createTotals();
//     return;
//   }
//   if (e.target.id === "checkout") {
//     updateCartUI();
//     cartToggle();
//   }
//   const item = e.target.closest(".shopping-item")?.id;
//   addCartItem(item);

//   updateCartUI();
//   storeState();
// });

document.querySelectorAll(".menu-item_btn").forEach((el) =>
  el.addEventListener("click", (e) => {
    addCartItem(e.target.id);

    updateCartUI();
    storeState();
  })
);

document.querySelectorAll(".menu-item_btn").forEach((el) => {
  el.addEventListener("click", () => {
    el.classList.add("added");
    el.textContent = "Added!";
    setTimeout(() => {
      el.textContent = "Add to cart!";
    }, 1000);
    //console.log(el);
  });
});

const contactToggle = () => {
  document.querySelector(".contact").classList.toggle("contact-hide");
};

const summaryToggle = () => {
  document.querySelector(".summary").classList.toggle("summary-hide");
};

document.querySelector(".contact-icon").addEventListener("click", (e) => {
  e.preventDefault();
  contactToggle();
});

const init2 = function () {
  //clearBookmarks();
  const storage = localStorage.getItem("state");
  if (storage) state = JSON.parse(storage);
  createTotals();
  updateCartUI();
  updateContactUI();
  cartCheck();
};

cartContents.addEventListener("click", (e) => {
  if (e.target.classList.contains("cart-btn")) {
    const delID = e.target.closest(".cart-item").id;
    removeCartItem(delID);
  }
  if (e.target.classList.contains("cart-item-increase")) {
    const increaseID = e.target.closest(".cart-item").id;

    quantityUp(increaseID);
  }
  if (e.target.classList.contains("cart-item-decrease")) {
    const increaseID = e.target.closest(".cart-item").id;

    quantityDown(increaseID);
  }
});

cartContents.addEventListener("change", (e) => {
  if (e.target.classList.contains("cart-item-food")) {
    const foodChangeID = e.target.closest(".cart-item").id;
    const foodType = e.target.value;
    const menuRef = e.target.closest(".cart-item-food").id;
    console.log(foodChangeID, foodType);
    //console.log(foodChangeID, foodType);
    updateFood(foodChangeID, foodType, menuRef);
  }
});

cartIcon.addEventListener("click", (e) => {
  e.preventDefault();
  updateCartUI();
  cartToggle();
});

summaryIcon.addEventListener("click", (e) => {
  e.preventDefault();

  summaryToggle();
});

document.querySelector(".summary-contents").addEventListener("click", (e) => {
  //console.log(e.target);
  if (e.target.classList.contains("back-contact")) {
    summaryToggle();
    contactToggle();
  }
  if (e.target.classList.contains("back-cart")) {
    summaryToggle();
    cartToggle();
  }
  if (e.target.classList.contains("summary-box")) {
    summaryToggle();
    populateOrderForm();
    orderForm.submit();
    //cartToggle();
  }
  if (e.target.classList.contains("summary-tip-option-1")) {
    state.price.tipOption
      ? (state.price.tipOption = 0)
      : (state.price.tipOption = 1);
    state.price.tipOption ? calcTip(10) : calcTip(0);
    updateSummaryUI();
    e.target.classList.toggle("summary-tip-option_active");
  }
  if (e.target.classList.contains("summary-tip-option-2")) {
    state.price.tipOption
      ? (state.price.tipOption = 0)
      : (state.price.tipOption = 2);
    state.price.tipOption ? calcTip(15) : calcTip(0);
    updateSummaryUI();
    e.target.classList.toggle("summary-tip-option_active");
  }
  if (e.target.classList.contains("summary-tip-option-3")) {
    state.price.tipOption
      ? (state.price.tipOption = 0)
      : (state.price.tipOption = 3);
    state.price.tipOption ? calcTip(20) : calcTip(0);

    updateSummaryUI();
  }
});

document.querySelector(".back-contact").addEventListener("click", () => {
  summaryToggle();
  contactToggle();
});

nextBtn.addEventListener("click", () => {
  contactToggle();
  cartToggle();
  storeState();
});

summaryBtn.addEventListener("click", () => {
  updateContactState();
  createTotals();
  updateSummaryUI();
  summaryToggle();
  contactToggle();
  storeState();
});

postBtn.addEventListener("click", (e) => {
  e.preventDefault();
  console.log(e);
  const formPostcode = document.querySelector("#contact-postcode").value;
  postSearch(formPostcode);
  document.querySelector(".postage-container").innerHTML = "";
  const html = state.price.delivery
    ? `<div class="contact-item postage-price">
              <label class='contact-label' for="price">Postage:</label>
              <p>$${state.price.delivery.toFixed(2)}</p>
              </div>
            `
    : `
      <div class="contact-item postage-price">
      <label class='contact-label' for="price"></label><p>We couldn't locate your address, please inquire!</p>
      </div>`;
  document
    .querySelector(".postage-container")
    .insertAdjacentHTML("beforeend", html);
});

init2();

// const devIcon = document.querySelector(".dev-icon");

// devIcon.addEventListener("click", () => {
//   devIcon.classList.toggle("dev-icon-active");
//   shoppingItems.classList.toggle("shopping-active");
// });

//Contact Form

const updateContactState = () => {
  const formName = document.querySelector("#contact-name").value;
  const formEmail = document.querySelector("#contact-email").value;
  const formAddress1 = document.querySelector("#contact-address1").value;
  const formAddress2 = document.querySelector("#contact-address2").value;
  const formCity = document.querySelector("#contact-city").value;
  const formPhone = document.querySelector("#contact-phone").value;
  const formPostcode = document.querySelector("#contact-postcode").value;
  const formPrefDelivery = document.querySelector("#contact-pref-delivery")
    .value;
  const formPrefPickup = document.querySelector("#contact-pref-pickup").value;
  const formRecipName = document.querySelector("#recip-name").value;
  const formRecipPhone = document.querySelector("#recip-phone").value;
  const formMessage = document.querySelector("#contact-personal-message").value;

  state.contactDetails.name = formName;
  state.contactDetails.email = formEmail;
  state.contactDetails.phone = formPhone;
  state.contactDetails.message = formMessage;
  state.contactDetails.recipient.name = formRecipName;
  state.contactDetails.recipient.phone = formRecipPhone;
  state.contactDetails.address.address1 = formAddress1;
  state.contactDetails.address.address2 = formAddress2;
  state.contactDetails.address.city = formCity;
  state.contactDetails.address.postcode = formPostcode;
  state.preference.delivery = formPrefDelivery;
  state.preference.pickup = formPrefPickup;
  console.log(state.contactDetails);
  //console.log(document.querySelector("#contact-name").value);
};

const summaryInfo = document.querySelector(".summary-contents");

const updateSummaryUI = () => {
  const formPostcode = document.querySelector("#contact-postcode").value;

  postSearch(formPostcode);

  summaryInfo.innerHTML = "";
  const cartItemsHTML = state.cart2
    .map((item) => {
      const isCocktail = Object.keys(menuItemRef.cocktails).includes(item.name);
      return `<div class="summary-cart-item">
        <div class="summary-cart-item-title">${
          isCocktail
            ? menuItemRef.cocktails[item.name].name
            : menuItemRef.merch[item.name].name
        }</div>
        

        <div class="cart-item-price">
          $${
            isCocktail
              ? (
                  menuItemRef.cocktails[item.name].price +
                  menuItemRef.food[item.food].price
                ).toFixed(2)
              : menuItemRef.merch[item.name].price.toFixed(2)
          }
        <br/>
          
        
        </div>
        

        </div>
        ${
          isCocktail
            ? `<div class="summary-cart-item-food">+ ${
                menuItemRef.food[item.food].name
              }</div>`
            : ""
        }
        
      `;
    })
    .join("");
  if (!state.delivered) {
    console.log("no delivery");
    state.price.delivery = 0;
  }
  createTotals();
  const customerDetails = `
                ${state.contactDetails.name}<br />
                ${state.contactDetails.email}<br/>
                ${state.contactDetails.phone}`;
  const customerAddress = state.delivered
    ? `
      <div class="summary-item">
        <div class="summary-item-type">Delivery Address:</div>
        <div class="summary-item-info">
          <div>
          ${state.contactDetails.address.address1}<br />
            ${
              state.contactDetails.address.address2
                ? state.contactDetails.address.address2 + "<br />"
                : ""
            }
            ${state.contactDetails.address.city}<br />
            ${state.contactDetails.address.postcode}<br />
            </div>
            <div class="summary-item-edit ">
              <ion-icon name="pencil-outline" class="back-contact"></ion-icon>
            </div>
          </div>
        </div>
      </div>
                
    
    `
    : "";

  const recipientDeets =
    state.contactDetails.recipient.name || state.contactDetails.recipient.phone
      ? `
<div class="summary-item">
        <div class="summary-item-type">Recipient Details:</div>
        <div class="summary-item-info">
          <div>
          ${
            state.contactDetails.recipient.name
              ? state.contactDetails.recipient.name
              : ""
          }<br/>
          ${
            state.contactDetails.recipient.phone
              ? state.contactDetails.recipient.phone
              : ""
          }
            </div>
            <div class="summary-item-edit ">
              <ion-icon name="pencil-outline" class="back-contact"></ion-icon>
            </div>
          </div>
        </div>
      </div>
`
      : "";

  const personalMessage = state.contactDetails.message
    ? `
      <div class="summary-item">
        <div class="summary-item-type">Personal Message:</div>
        <div class="summary-item-info">
          <div>
          ${state.contactDetails.message}
            </div>
            <div class="summary-item-edit ">
              <ion-icon name="pencil-outline" class="back-contact"></ion-icon>
            </div>
          </div>
        </div>
      </div>
      `
    : ``;

  const tip = state.price.tip
    ? `
    <div class="summary-totals-item">
              <div class="summary-totals-type">Tip:</div>
              <div class="summary-totals-amount">$${state.price.tip.toFixed(
                2
              )}</div>
            </div>
    `
    : ``;

  const deliveryFee = state.delivered
    ? `
      <div class="summary-totals-item">
                  <div class="summary-totals-type">Delivery:</div>
                  <div class="summary-totals-amount">$${
                    state.price.delivery
                      ? state.price.delivery.toFixed(2)
                      : "(TBD)"
                  }</div>
                </div>
      
      `
    : "";
  const html = `
          <div class="summary-item">
            <div class="summary-item-type">Your Details:</div>
            <div class="summary-item-info">
              <div>
                ${customerDetails}
                </div>
                <div class="summary-item-edit ">
                  <ion-icon name="pencil-outline" class="back-contact"></ion-icon>
                </div>
              </div>
            </div>
          </div>
          ${customerAddress}
          ${state.delivered ? recipientDeets + personalMessage : ``}
          
          
          <div class="summary-item">
            <div class="summary-item-type">Your Cart:</div>
            <div class="summary-item-info">
            <div class='summary-cart'>
            
              ${cartItemsHTML}
              </div>
              <div class="summary-item-edit ">
                <ion-icon name="pencil-outline" class="back-cart"></ion-icon>
              </div>
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-type">Preferences:</div>
            <div class="summary-item-info">
              ${
                state.delivered
                  ? "DELIVERY " + state.preference.delivery
                  : "PICK-UP " + state.preference.pickup
              }
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-type">Tip:</div>
            <div class="summary-item-info2">
              <div class="summary-tip">
                <div class="summary-tip-option-1 summary-tip-option ${
                  state.price.tipOption === 1 ? `summary-tip-option_active` : ``
                }">10%</div>
                <div class="summary-tip-option-2 summary-tip-option ${
                  state.price.tipOption === 2 ? `summary-tip-option_active` : ``
                }">15%</div>
                <div class="summary-tip-option-3 summary-tip-option ${
                  state.price.tipOption === 3 ? `summary-tip-option_active` : ``
                }">20%</div>
              
              </div>
              <div class="summary-tip-text">
              Tips are not expected but always appreciated!
            </div>
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-type">Your Totals:</div>
            <div class="summary-item-info">
            <div class="summary-totals">
            
            <div class="summary-totals-item">
              <div class="summary-totals-type">Cart Total:</div>
              
            
            
                  <div class="summary-totals-amount">$${state.price.cartTotal.toFixed(
                    2
                  )}</div>
                  </div>
                  ${deliveryFee}
            <div class="summary-totals-item">
            <div class="summary-totals-type">Sub-Total:</div>
            
          
          
                <div class="summary-totals-amount">$${state.price.subtotal.toFixed(
                  2
                )}</div>
                </div>

                      
            
            <div class="summary-totals-item">
              <div class="summary-totals-type">HST(13%):</div>
              <div class="summary-totals-amount">$${state.price.tax.toFixed(
                2
              )}</div>
            </div>
            ${tip}
            <div class="summary-totals-item">
              <div class="summary-totals-type"><strong>Total:</strong></div>
              <div class="summary-totals-amount">
                <strong>$${state.price.grandTotal.toFixed(2)}</strong>
              </div>
            </div>
          </div>
            </div>
          </div>
          <div class="summary-box">Submit</div>
          <div class="submit-text">
          All prices quoted are estimates. Once submitted, we will respond to confirm your order and specify payment details!
        </div>
        `;
  summaryInfo.insertAdjacentHTML("afterbegin", html);
};

const orderType = () => {
  console.log("YOOOOOOO");
};

const postSearch = (postcode) => {
  const query = postcode.slice(0, 3).toUpperCase();
  console.log(query);
  state.price.delivery = 0;
  Object.keys(deliveryPrices).forEach((price) => {
    //console.log(price);
    if (state.price.delivery) return;
    deliveryPrices[price].find((match) => {
      //To be optimized
      if (match === query) {
        console.log("should work");
        const newPrice = +price;

        state.price.delivery = +newPrice;
        return;
      }
      return match === postcode;
    });
  });
  if (!state.price.delivery) {
    console.log("Please inquire");
    state.price.delivery = null;
  }
};

deliveryOptions.addEventListener("click", (e) => {
  if (e.target.id === "radio-1" && state.delivered === true) {
    state.delivered = false;
    optionSwitch();
  }
  if (e.target.id === "radio-2" && state.delivered === false) {
    state.delivered = true;
    optionSwitch();
  }
});

const orderFormName = document.querySelector("#order-form-name");
const orderFormPhone = document.querySelector("#order-form-phone");
const orderFormEmail = document.querySelector("#order-form-email");
const orderFormAddress = document.querySelector("#order-form-address");
const orderFormPreference = document.querySelector("#order-form-preference");
const orderFormType = document.querySelector("#order-form-type");
const orderFormCart = document.querySelector("#order-form-cart");
const orderFormPrice = document.querySelector("#order-form-price");
const orderFormTip = document.querySelector("#order-form-tip");
const orderFormRecipName = document.querySelector("#order-form-recip-name");
const orderFormRecipPhone = document.querySelector("#order-form-recip-phone");
const orderFormMessage = document.querySelector("#order-form-message");

const populateOrderForm = () => {
  orderFormName.value = state.contactDetails.name;
  orderFormPhone.value = state.contactDetails.phone;
  orderFormEmail.value = state.contactDetails.email;
  orderFormRecipName.value = state.contactDetails.recipient.name || "n/a";
  orderFormRecipPhone.value = state.contactDetails.recipient.phone || "n/a";
  orderFormMessage.value = state.contactDetails.message || "n/a";
  orderFormAddress.value = `${state.contactDetails.address.address1} - ${state.contactDetails.address.address2} - ${state.contactDetails.address.city} - ${state.contactDetails.address.postcode}`;
  orderFormPreference.value =
    state.preference.delivery + state.preference.pickup || "n/a";
  orderFormType.value = `${state.delivered ? "DELIVERY" : "PICK-UP"}`;
  const formatCart = state.cart2
    .map((el) => {
      const isCocktail = Object.keys(menuItemRef.cocktails).includes(el.name);

      return `${
        isCocktail
          ? menuItemRef.cocktails[el.name].name +
            ` with ${menuItemRef.food[el.food].name}`
          : menuItemRef.merch[el.name].name
      }                        `;
    })
    .join("");
  console.log(formatCart);
  orderFormCart.value = `${formatCart}`;
  orderFormPrice.value = `Cart total: ${state.price.cartTotal.toFixed(2)}
               \nDelivery: ${
                 state.price.delivery ? state.price.delivery.toFixed(2) : "TBA"
               }
               Subtotal: ${state.price.subtotal.toFixed(2)}
                \nTax: ${state.price.tax.toFixed(2)}
               \nTip: ${state.price.tip ? state.price.tip.toFixed(2) : 0}
               \n Grand Total: ${state.price.grandTotal.toFixed(2)}`;
  // orderFormTip.value = state.price.tip.toFixed(2);
};

const calcTip = (percentage) => {
  state.price.tip =
    (state.price.subtotal + state.price.tax) * (percentage / 100);
  createTotals();
};

const tips1 = document.querySelector(".summary-tip-option-1");
const tips2 = document.querySelector(".summary-tip-option-2");
const tips3 = document.querySelector(".summary-tip-option-3");

tips1.addEventListener("click", (e) => {
  if (e.target.classList.contains("summary-tip-option-1")) {
    calcTip(10);
    updateSummaryUI();
  }
  if (e.target.classList.contains("summary-tip-option-2")) {
    calcTip(15);
    updateSummaryUI();
  }
  if (e.target.classList.contains("summary-tip-option-3")) {
    calcTip(20);
    updateSummaryUI();
  }
});

const closeSummary = document.querySelector(".summary-close");
const closeContact = document.querySelector(".contact-close");
const closeCart = document.querySelector(".cart-close");

const backSummary = document.querySelector(".summary-backward");
const backContact = document.querySelector(".contact-backward");

closeSummary.addEventListener("click", () => {
  summaryToggle();
});
closeContact.addEventListener("click", () => {
  contactToggle();
});
closeCart.addEventListener("click", () => {
  cartToggle();
});
backSummary.addEventListener("click", () => {
  summaryToggle();
  contactToggle();
});
backContact.addEventListener("click", () => {
  cartToggle();
  contactToggle();
});

const burgerIcon = document.querySelector(".burger-container");
const menuItems = document.querySelector(".nav-items");
const burgerOpen = document.querySelector(".burger-open");
const burgerClose = document.querySelector(".burger-close");

burgerIcon.addEventListener("click", () => {
  menuItems.classList.toggle("nav-items_hide");
  burgerOpen.classList.toggle("burger-hide");
  burgerClose.classList.toggle("burger-hide");
});

const successSend = document.querySelector(".success-send");

if (successSend) {
  console.log("YAAAAY!");
  clearState();
  cartCheck();
}

const isNumericInput = (event) => {
  const key = event.keyCode;
  return (
    (key >= 48 && key <= 57) || // Allow number line
    (key >= 96 && key <= 105) // Allow number pad
  );
};

const isModifierKey = (event) => {
  const key = event.keyCode;
  return (
    event.shiftKey === true ||
    key === 35 ||
    key === 36 || // Allow Shift, Home, End
    key === 8 ||
    key === 9 ||
    key === 13 ||
    key === 46 || // Allow Backspace, Tab, Enter, Delete
    (key > 36 && key < 41) || // Allow left, up, right, down
    // Allow Ctrl/Command + A,C,V,X,Z
    ((event.ctrlKey === true || event.metaKey === true) &&
      (key === 65 || key === 67 || key === 86 || key === 88 || key === 90))
  );
};

const enforceFormat = (event) => {
  // Input must be of a valid number format or a modifier key, and not longer than ten digits
  if (!isNumericInput(event) && !isModifierKey(event)) {
    event.preventDefault();
  }
};

//------Phone Number Formater-----//

const formatToPhone = (event) => {
  if (isModifierKey(event)) {
    return;
  }

  // I am lazy and don't like to type things more than once
  const target = event.target;
  const input = event.target.value.replace(/\D/g, "").substring(0, 10); // First ten digits of input only
  const zip = input.substring(0, 3);
  const middle = input.substring(3, 6);
  const last = input.substring(6, 10);

  if (input.length > 6) {
    target.value = `(${zip}) ${middle} - ${last}`;
  } else if (input.length > 3) {
    target.value = `(${zip}) ${middle}`;
  } else if (input.length > 0) {
    target.value = `(${zip}`;
  }
};

const inputElement = document.getElementById("contact-phone");

inputElement.addEventListener("keydown", enforceFormat);
inputElement.addEventListener("keyup", formatToPhone);

const carty = [
  {
    name: "mango",
    food: "chips",
    id: 1,
  },
  {},
  {},
];
