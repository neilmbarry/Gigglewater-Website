<!DOCTYPE html>
<html lang="en">
  <head>
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"
    ></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, 
     user-scalable=0" />
    <meta
      name="description"
      content="Craft cocktails and tasty shareable plates in a friendly intimate atmosphere. Corporate and consumer cocktail kits available for delivery and takeout."
    />

    <link rel="stylesheet" type="text/css" href="Resources/sass/style2.css" />

    <!-- <link rel="stylesheet" type="text/css" href="Resources/css/queries2.css" /> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap"
      rel="stylesheet"
    />

    <title>Project Gigglewater - Cocktails</title>

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="Resources/Favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="Resources/Favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="Resources/Favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="Resources/Favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="Resources/Favicons/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <link rel="shortcut icon" href="Resources/Favicons/favicon.ico" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta
      name="msapplication-config"
      content="Resources/Favicons/browserconfig.xml"
    />
    <meta name="theme-color" content="#000000" />
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Project Gigglewater",
        "image": "https://projectgigglewater.com/Resources/img/logo-big.png",
        "email": "cocktails@projectgigglewater.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "1369 Dundas Street West",
          "addressLocality": "Toronto",
          "addressCountry": "Canada",
          "postalCode": "M6J1Y3"
        }
      }
    </script>
  </head>
  <body>
    <!-- <section class="test">
      <div class="box">
        YO!
        <div class="cover"></div>
      </div>
    </section> -->
    <!-- <div class="dev-menu">
      <ion-icon
        class="dev-icon dev-icon-down"
        name="chevron-down-outline"
      ></ion-icon>
    </div>
    <section class="shopping">
      <div class="shopping-item shopping-item-1" id="pine">Pineapple</div>
      <div class="shopping-item shopping-item-2" id="mango">Mango</div>
      <div class="shopping-item shopping-item-3" id="popit">Pop</div>
      <div class="shopping-item shopping-item-4" id="deep">Deep Dive</div>
      <div class="shopping-item-checkout" id="checkout">Check-Out</div>
      <div class="shopping-item-clear" id="clear">Clear</div>
      
    </section> -->
    <div class="cart cart-hide">
      <ion-icon name="close-outline" class="cart-close"></ion-icon>
      
      <h2 class="cart-title">Your Cart</h2>
      <h4 class="cart-text">Food item required with all alcohol orders per government regulations</h4>
      <div class="cart-contents">
        <div class="cart-item" id="${i}">
          <div class="cart-item-pic">
            <img src="/logo-big.png" alt="item-pic" />
          </div>
          <div class="cart-item-title"></div>
          <div class="cart-item-quantity"></div>
          <div class="cart-item-price">
            
          </div>
          <button class="cart-btn">X</button>
        </div>
      </div>
      <div class="cart-textbox">
        <div class="cart-textbox-label">Special requests?</div>
        <div class="cart-textbox-input"><textarea placeholder="Let us know!" class="cart-textarea"></textarea></div>
        <div class="open-textarea"><ion-icon class="cart-textbox-icon" name="add-outline"></ion-icon></div>
      </div>
      <div class="cart-totals">
        <div class="cart-totals-sub">Sub-Total: $120</div>
        <div class="cart-totals-tax">Taxes: $13</div>
        <div class="cart-totals-grand">Grand Total: $133</div>
      </div>
      <div class="cart-box">Next &#8594;</div>
      <div class="block-box"></div>
    </div>
    <div class="contact contact-hide">
      <ion-icon name="close-outline" class="contact-close"></ion-icon>
      <ion-icon name="arrow-back-outline" class="contact-backward"></ion-icon>
      <h2 class="contact-title">Your details</h2>
      <div class="contact-contents">
        <form class="contact-form" action="#">
          <div class="contact-item">
            <label class="contact-label" for="name">Name*</label>
            <input
              class="contact-input valid"
              type="text"
              id="contact-name"
              placeholder="Your name"
            />
          </div>
          <div class="contact-item">
            <label class="contact-label" for="email">Email*</label>
            <input
              class="contact-input valid"
              type="email"
              id="contact-email"
              placeholder="Your email"
            />
          </div>
          <div class="contact-item">
            <label class="contact-label" for="phone">Phone number*</label>
            <input
              class="contact-input valid"
              type="text"
              id="contact-phone"
              placeholder="Your phone number"
            />
          </div>

          <!-- <div class="contact-item">
            <label class="contact-type" for="name">Pick-up</label>
            <input class="contact-check" type="radio" checked />
            <label class="contact-type" for="name">Delivery</label>
            <input class="contact-check" type="radio" />
          </div> -->
          <div class="radio-container">
            <div class="radio">
              <input
                id="radio-1"
                name="radio"
                type="radio"
                
                checked
              />
              <label for="radio-1" class="radio-label">Pick-up</label>
            </div>
            <div class="radio">
              <input id="radio-2" name="radio" type="radio" />
              <label for="radio-2" class="radio-label">Delivery</label>
            </div>
          </div>
          <div class="contact-options">
            <div class="contact-option contact-option-pickup contact-option-active">
              <div class="contact-item">
                <label class="contact-label" for="name">Preferred Pick-Up</label>
                <input
                  class="contact-input"
                  type="text"
                  id="contact-pref-pickup"
                  placeholder="Day / Time (12pm to 6pm), order by 11am for same day!"
                  
                ></input>
              </div>
              
            </div>
            <div class="contact-option contact-option-delivery">
              <div class="contact-item">
                <label class="contact-label" for="name">Recipient Name</label>
                <input
                  class="contact-input contact-input-address"
                  type="text"
                  id="recip-name"
                  placeholder="(If different from above)"
                ></input>
              </div>
              <div class="contact-item">
                <label class="contact-label" for="name">Recipient Phone</label>
                <input
                  class="contact-input contact-input-address"
                  type="text"
                  id="recip-phone"
                  placeholder="(If different from above)"
                ></input>
              </div>
              <div class="contact-item">
                <label class="contact-label" for="name">Address*</label>
                <input
                  class="contact-input contact-input-address valid"
                  type="text"
                  id="contact-address1"
                  placeholder="Line 1"
                ></input>
              </div>
              <div class="contact-item">
                <label class="contact-label field-small" for="name"></label>
                <input
                  class="contact-input contact-input-address"
                  type="text"
                  id="contact-address2"
                  placeholder="Line 2"
                ></input>
              </div>
              <div class="contact-item">
                <label class="contact-label field-small" for="name"></label>
                <input
                  class="contact-input contact-input-address"
                  type="text"
                  id="contact-city"
                  placeholder="City"
                ></input>
              </div>
              <div class="contact-item postage">
                <label class="contact-label" for="name">Postal Code*</label>
                <input
                  class="contact-input contact-input_post valid"
                  type="text"
                  id="contact-postcode"
                />
                <div class="btn-post">Calculate Postage</div>
              </div>
              <div class="postage-container"></div>
              <div class="contact-item">
                <label class="contact-label" for="name">Preferred Delivery</label>
                <input
                  class="contact-input"
                  type="text"
                  id="contact-pref-delivery"
                  placeholder="Mon - Sun"
                ></input>
              </div>
              <div class="contact-item">
                <label class="contact-label" for="name">Personal Message?</label>
                <input
                  class="contact-input"
                  type="text"
                  id="contact-personal-message"
                  placeholder="(Max 150 characters)"
                ></input>
              </div>
            </div>
            
          </div>
          
          <div class="contact-box">View Summary &#8594;</div>
          <div class="required-box">*Please fill all fields*</div>
        
          <!-- <div class="contact-item">
            <label class="contact-label" for="name">Country</label>
            <input class="contact-input" type="text" />
          </div> -->
          <!-- <div class="contact-item">
            <label class="contact-label" for="price">Postage:</label>
            <p>$7.00</p>
          </div>
          <div class="contact-box">View Summary &#8594;</div> -->
        </form>
      </div>
    </div>

    <div class="summary summary-hide">
      <ion-icon name="close-outline" class="summary-close"></ion-icon>
      <ion-icon name="arrow-back-outline" class="summary-backward"></ion-icon>
      <h2 class="summary-title">Summary</h2>
      <div class="summary-contents">
        <div class="summary-item">
          <div class="summary-item-type">Customer Details</div>
          <div class="summary-item-info">
            <div>
              
            </div>
            <div class="summary-item-edit back-contact">
              <ion-icon name="pencil-outline"></ion-icon>
            </div>
          </div>
        </div>
        <div class="summary-item">
          <div class="summary-item-type">Customer Cart</div>
          <div class="summary-item-info">
            <div class="summary-cart">
              <div class="summary-cart-item">
                <div class="summary-cart-item-title">Pine Of No Return</div>
                <div class="summary-cart-item-quantity">(x2)</div>
              </div>
              <div class="summary-cart-item-food">+ Chips</div>
              <div class="summary-cart-item">
                <div class="summary-cart-item-title">Mangolorian</div>
                <div class="summary-cart-item-quantity">(x3)</div>
              </div>
              <div class="summary-cart-item-food">+ Olives</div>
            </div>

            <div class="summary-item-edit back-cart">
              <ion-icon name="pencil-outline"></ion-icon>
            </div>
          </div>
        </div>
        <div class="summary-item">
          <div class="summary-item-type">Customer Preferences</div>
          <div class="summary-item-info">
            Preferred delivery:<br />
            Sunday, February 22nd, 3pm.
          </div>
        </div>
        <div class="summary-item">
          <div class="summary-item-type">Tip</div>
          <div class="summary-item-info2">
            <div class="summary-tip">
              <div class="summary-tip-option-1 summary-tip-option summary-tip-option_active">10%</div>
              <div class="summary-tip-option-2 summary-tip-option">15%</div>
              <div class="summary-tip-option-3 summary-tip-option">20%</div>
            
            </div>
            <div class="summary-tip-text">
              Tips are not expected but always appreciated!
            </div>
          </div>
        </div>
        <div class="summary-item">
          <div class="summary-item-type">Customer Totals</div>
          <div class="summary-item-info">
            <div class="summary-totals">
              <div class="summary-totals-item">
                <div class="summary-totals-type">Sub-Total:</div>
                <div class="summary-totals-amount">$120.00</div>
              </div>
              <div class="summary-totals-item">
                <div class="summary-totals-type">Delivery:</div>
                <div class="summary-totals-amount">$7.00</div>
              </div>
              <div class="summary-totals-item">
                <div class="summary-totals-type">Taxes:</div>
                <div class="summary-totals-amount">$13.00</div>
              </div>
              <div class="summary-totals-item">
                <div class="summary-totals-type"><strong>Total:</strong></div>
                <div class="summary-totals-amount">
                  <strong>$133.00</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="summary-box">Submit</div>
        <div class="submit-text">
          All prices quoted are estimates. Once submitted, we will respond to confirm your order and specify payment details!
        </div>
      </div>
    </div>
    <nav class="nav nav-sticky">
      <div class="nav-logo-container">
        <a href="/" class="nav-btn">
          <img class="logo" src="./logo-big.png" alt="Project Gigglewater" />
        </a>
      </div>
      <ul class="nav-items nav-items_hide">
        <!--<li><a href="smash" class="nav-btn">Smash Burgers</a></li>-->
        <li class="nav-list-item"><a href="/cocktails" class="nav-item">Cocktail Kits</a></li>
        <li class="nav-list-item"><a href="/menu" class="nav-item">Dine-In Menu</a></li>
        <!-- <li><a href="#" class="nav-item">Bottle Shop</a></li> -->
        <li class="nav-list-item"><a href="/merch" class="nav-item">Merchandise</a></li>
        <li class="nav-list-item"><a href="/groups" class="nav-item">Corporate / Groups</a></li>
        <li class="nav-list-item"><a href="/gallery" class="nav-item">Gallery</a></li>
        <!-- <li><a href="#" class="nav-item">Reviews</a></li> -->
        <!-- <li class="nav-list-item"><a href="#contact-us" class="nav-item">Find Us</a></li> -->
        <li class="nav-list-item"><a href="/#contact-us" class="nav-item">Contact</a></li>
        <li>
          
        </li>
        <li class="development">
          <a href="#" class="nav-item contact-icon"
            ><ion-icon name="card-outline"></ion-icon
          ></a>
        </li>
        <li class="development">
          <a href="#" class="nav-item summary-icon"
            ><ion-icon name="paper-plane-outline"></ion-icon
          ></a>
        </li>
      </ul>
      <div class="hidden">X</div>
      
      <a href="#" class="cart-icon item-hide"
          ><ion-icon name="cart-outline"></ion-icon
        >
      <div class="cart-notification cart-notification-hide">
        3
      </div>
      </a>
      <div class="burger">
          <div class="burger-container">
            <ion-icon name="menu-outline" class="burger-icon burger-open"></ion-icon>
            <ion-icon name="close-outline" class="burger-icon burger-close burger-hide"></ion-icon>

          </div>
      </div>
    </nav>
    <div class="row">
      <?php
      if($_GET['success'] == 1){
          echo "<div class=\"form-messages success\">
          <p>Thank you, your message has been sent!<br> We will email back shortly!<br>(Please check your spam folder if you don't hear from us!)</p>
      </div>";}
      if($_GET['success'] == -1){
          echo "<div class=\"form-messages error\">
          <p>Oops! Something went wrong, please try again.</p>
      </div>";}
      ?>
    </div>
<section class="menu-section">
  <div>
    <h2 class="break title-push">Cocktails</h2>
  </div>
  
  <div class="bar-menu-row">
    <div class="bar-menu-column">
      <h3 class="small-screen togo-small">ALCOHOL CAN BE PURCHASED TO GO, COCKTAILS TOO! 10% OFF!</h3>
      <div class="bar-menu-item togo-big large-screen">
        ALCOHOL CAN BE PURCHASED TO GO, COCKTAILS TOO! 10% OFF!
      </div>

      <!-- <div class="bar-menu-item">
        <div class="bar-menu-title">Pina Colada Weekend</div>
        <div class="bar-menu-text">
          Bacardi 8 Rum, Pineapple Chunks, House Coconut Sizzurp, Lime<br /><strong>$14</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div> -->

      <!-- <div class="bar-menu-item">
        <div class="bar-menu-title">Hanging Garden</div>
        <div class="bar-menu-text">
          Darjeeling Tea Umeshu, Plantation Rum, Rosewater, Lemon, Honey, Rose Petals<br /><strong>$15</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_wine.svg" />
        </div>
      </div> -->

      <div class="bar-menu-item">
        <div class="bar-menu-title">Chocolate Negroni</div>
        <div class="bar-menu-text">
        Cacao Infused Gin, Campari, Sweet Vermouth, Creme de Cacao<br /><strong>$15</strong>
        </div>
        
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Susie Dusie Spritz</div>
        <div class="bar-menu-text">
        Whitley Neill Grapefruit Gin, Lemon, Cynar, Grapefruit, Honey, Cava
          <br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_wine.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Fiesta on Pheasant Island</div>
        <div class="bar-menu-text">
        Citadelle Gin, Fino Sherry, Grapefruit Sherbet w/ Pink Peppercorn, Lime, Pastis,
        Fever Tree Cucumber Tonic<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_colins.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Hipster Elixir</div>
        <div class="bar-menu-text">
        Wild Turkey Blend, Yellow Chartreuse, Winter Spice Strawberry Syrup, Lemon, Absinthe
          <br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Peachy Duchess</div>
        <div class="bar-menu-text">
        Ketel One Peach and Orange Blossom Vodka, Bergamot Ginger Syrup, Lemon, Basil, Black Pepper<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Mystic Frenchman</div>
        <div class="bar-menu-text">
        Citadelle Gin, Aperol, Raspberry Syrup, Gentian Liqueur, Lemon<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_coupe.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">The Heart of Dublin</div>
        <div class="bar-menu-text">
          <strong> *Barrel Aged*</strong>
          </div>
        <div class="bar-menu-text">
        Teelings Small Batch Irish Whiskey, Amontillado Sherry, Amaro Averna, Dubonnet, Orange Blossom,
        Angostura<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_shot.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Apeeling Rations</div>
        <div class="bar-menu-text">
        Banana Infused Appleton 8 Rum, East India Solera Sherry, Crème de Cacao, Scrappy's Chocolate Bitters<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div>

      
      <div class="bar-menu-item">
        <div class="bar-menu-title">Sea Asparagus is my Safe Word</div>
        <div class="bar-menu-text">
        Sea Asparagus Ketel One Vodka, Pickled Lemon Brine, Lillet Blanc<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_nick&nora.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">El Finablo</div>
        <div class="bar-menu-text">
        Fino Sherry, Mezcal Agua Santa, Crème de Cassis, Lime<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_colins.svg" />
        </div>
      </div>
      <!-- <div class="bar-menu-item">
        <div class="bar-menu-title">Tikity Toastity</div>
        <div class="bar-menu-text">
          Toasted coconut wild turkey bourbon blend, espresso syrup, tiki bitters<br /><strong
            >$16</strong
          >
        </div>
        <div class="bar-menu-img">
          <img src="Resources/Menu-images/Icons_rocks.svg" />
        </div>
      </div> -->
      <div class="bar-menu-item">
        <div class="bar-menu-title">Electric worm</div>
        <div class="bar-menu-text">
          ketel one grapefruit/rose vodka, ardbeg wee beastie, chartreuse, tangerine,
          citrus stock<br /><strong>$16</strong>
        </div>
        <div class="bar-menu-img larger">
          <img src="Resources/Menu-images/Icons_coupe.svg" />
        </div>
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Toronto Shots</div>
        <div class="bar-menu-text">
        Canadian Rye, Fernet, Splash of Sugar<br /><strong>$24 / 4 shots</strong>
        </div>
        <div class="bar-menu-img larger">
          <img src="Resources/Menu-images/Icons_shot.svg" />
          <img src="Resources/Menu-images/Icons_shot.svg" />
          <img src="Resources/Menu-images/Icons_shot.svg" />
          <img src="Resources/Menu-images/Icons_shot.svg" />
          </div>
      </div>

      
      
    </div>

  </div>
  <div>
    <h2 class="break">Food</h2>
  </div>
  <div class="bar-menu-row">
    <div class="bar-menu-column">
    
    
      <div class="bar-menu-item">
        <div class="bar-menu-title">Smash burger [double patty!] ($12.00)</div>
        <div class="bar-menu-text">
          "delicious beef, brioche bun, lettuce, tomato, 'murican cheese, bayoli!"
        </div>
        
      </div>
      
      <div class="bar-menu-item">
        <div class="bar-menu-title">crispy fries ($8.50)</div>
        <div class="bar-menu-text">
          "Coated thick cut with our special salt, roasted garlic aioli."
        </div>
        
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">crispy chicken nibbs ($13.00)</div>
        <div class="bar-menu-text">
          "Marinated thighs drizzled with coconut miso and sambal aioli. Topped with sesame seeds and scallions."
        </div>
        
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Big Mac Spring rolls [3 pcs] ($9.00)</div>
        <div class="bar-menu-text">
          "Exactly what they sound like, served with housemade "secret sauce" and 
          shredded lettuce."
        </div>
        
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Shiitake Toasts [3 pcs] ($9.00)</div>
        <div class="bar-menu-text">
          "crostini topped sesame togarashi aioli, roasted shiitake mushrooms, enoki and Scallions."
        </div>
        
      </div>
      <div class="bar-menu-item">
        <div class="bar-menu-title">Castelvetrano and kalamata olives with lupini beans ($8.00)</div>
        <div class="bar-menu-text">
          "Rosemary, blood orange, roasted garlic"
        </div>
        
      </div>
      
      
    </div>
  </div>
  <div>
    <h2 class="break">beer &amp; cider</h2>
  </div>
  <div class="bar-menu-row">
    <div class="bar-menu-column">
      <div class="bar-menu-item">
        <div class="bar-menu-title">Cans &amp; Bottles</div>
        <div class="bar-menu-text">
        Eastbound Tasti Kolsch ($8.00) [355ml]
          <br />
          Rorschach Tiramisu Stout ($9.00) [355ml]
          <br />
          Leftfield Mango Pineapple Sour ($9.00) [355ml]
          <br />
          <!-- Radical Road Mint Kolsch ($9.00) [473ml]
          <br /> -->
          Avling Pale Ale ($9.00) [355ml]
          <br />
          Avling Tart Cherry Saison ($9.00) [355ml]
          <br />
          <!-- Woodhouse Pilsner ($7.00) [355ml]
          <br /> -->
          Godspeed Yuzu Saison($9.00) [355ml]
          <br />
          
          rorschach ddh ipa ($9.00) [355ml] <br />
           rorschach non-alcoholic ipa ($8.00) [355ml] <br />
          <!--leftfield cherry lime sour ($8.00) <br /> -->
          <!-- Rainhard - DH Pale Ale ($11.00) [473ml] <br /> -->
          Stock &amp; Row apple cider ($9.00) [355ml]<br/>
          Fairweather Dream Pop w/ Mango and Meyer Lemon ($14.00) [473ml]
        </div>
        <!-- <div class="bar-menu-title">Limited</div>
        <div class="bar-menu-text">
          burdock blackerry &amp; currant berliner ($8.00)
          <br />leftfield lactose pale ale ($8.00) <br />collective arts wheat
          ale w/ earl grey ($8.00) <br />collective arts pomegranite &amp;
          grapefruit sour ($9.00) <br />
          merit ipa - peach &amp; pineapple ($12.00) <br />merit dh saison -
          orange &amp; coriander ($12.00) <br />merit gose - strawberry &amp;
          cranberry ($14.00)
        </div>
        <div class="bar-menu-title">draft</div>
        <div class="bar-menu-text">
          muddy york clementine sour ($8.50)
          <br />Revel strawberry, lavender, plum cider ($9.00)
        </div> -->
      </div>
    </div>
  </div>
  <div>
    <h2 class="break">wine</h2>
  </div>
  <div class="bar-menu-row">
    <div class="bar-menu-column">
      <div class="bar-menu-item">
      <!-- <div class="bar-menu-title">Château Barouillet Bergecrac Blanc 2020</div>
        <div class="bar-menu-text">
        "This is a charming blend of Sauvignon Blanc, Sauvignon Gris, Sémillon, and Chenin. Together, they create a well-balanced wine between freshness, fullness and aromas. Easy, fun and just a little bit wild. Medium bodied. Dry."
          <br />$15.00/$70.00 <br />•<br />
      </div> -->
      <div class="bar-menu-title">Keint-He Arrow-Matic VQA PEC 2020</div>
        <div class="bar-menu-text">
        "Crushable summer-sipper is a blend of 35% Melon de Bourgogne, 35% Pinot Gris and 30% Riesling. The nose shows soft citrus, with a grapefruit focus."
          <br />$15.00/$70.00 <br />•<br />
      </div>
      <!-- <div class="bar-menu-title">Traynor Wine - Gamay Noir 2020</div>
        <div class="bar-menu-text">
        "Ripe plum or dark cherry, with a hint of sandalwood and black pepper. Soft with a hint of acidity and soft, supple tannin." *Served chilled*
          <br />$15.00/$70.00 <br />•<br />
      </div> -->
      <div class="bar-menu-title">Traynor Wine - Ch-Ch-Ch Cherry Bomb Clarete 2020</div>
        <div class="bar-menu-text">
        "Candied cherry, rose petal, orange rind and a hint of green tea. Almost like a super robust rose. Natural wine." *Served chilled*
          <br />$15.00/$70.00 <br />•<br />
      </div>
        <div class="bar-menu-title">Traynor Wine - Ophelia Piquette - 2020</div>
        <div class="bar-menu-text">
        "7.2% ABV. Super refreshing and light. Has some local apple cider added to it."
          <br />$45.00 <br />•<br />
        </div>
        
<!--       
        <div class="bar-menu-title">sonshine vins - beau gosse 2018</div>
        <div class="bar-menu-text">
          “A super drinkable, beautiful, ready for summer cab franc. earthy, vegetal nose. blackberries, tart, good high
          acidity, dark fruit, crisp. natty and classy. *Served chilled*”
          <br />$15.00/$70.00 <br />•<br />
        </div> -->
       
        <div class="bar-menu-title">weinmanufaktur im keller - naturwerk pet nat 2019</div>
        <div class="bar-menu-text">
          “This is a zippy, limey, green apple, super bubbly pet nat. Perfect for a nice summer day hang in the park or the
          backyard, or on the Gigglewater patio”<br />$75.00<br />•<br />
        </div>
        <!-- <div class="bar-menu-title">
          cantina di soliera lambrusco
        </div>
        <div class="bar-menu-text">
          “Lovely berry bouquet. Balanced body. Lightling sparkling dry. Super crushable. Sorbara, Italy”<br />$12.00/$50.00<br />•<br />
        </div> -->
        <div class="bar-menu-title">el celleret cava</div>
        <div class="bar-menu-text">
          “Citrus, apple, dry and fresh with fine bubbles. Aromatic. Crisp. Dry. Brut Nature. Sadurni de Noia, Spain”<br />$13.00/$55.00<br />•<br />
        </div>
        <!-- <div class="bar-menu-title">Terre Cevico Bio Nero D'Avola Rosato</div>
        <div class="bar-menu-text">
          Rose, dried flowers, orange zest, ripe red fruit, soft salinity |
          Organic | Sicily, Italy | 750ml<br />($55.00)<br />•<br />
        </div>
          <div class="bar-menu-title">Cantina Di Soliera Lambrusco</div>
        <div class="bar-menu-text">
          Lovely berry bouquet | Balanced body | Lightly sparkling dry | Super
          crushable | Sorbara, Italy | 750ml<br />($12.00/$50.00)<br />•<br />
        </div>
        <div class="bar-menu-title">El Celleret Cava</div>
        <div class="bar-menu-text">
          Citrus, apple, dry and fresh with fine bubbles | Aromatic | Crisp |
          Dry | Brut Nature | Sadurni de Noia, Spain | 750ml<br />($12.00/$50.00)<br />•<br />
        </div>
        <div class="bar-menu-title">Lutte Raisonnee Vouvray</div>
        <div class="bar-menu-text">
          100% Chenin Blanc | Fine bubbles | Brioche, lemon rind, and white
          flowers | France | 750ml<br />($60.00)<br />•<br />
        </div> -->
      </div>
      <!-- <div class="bar-menu-item">
        <div class="bar-menu-title">Alcohol can be purchased to go, cocktails too! 10% off!</div>
      </div> -->
    </div>
  </div>
</section>
<footer class="footer">
      <a href="#" class="footer-logo">
        <img class="logo" src="./logo-big.png" alt="Project Gigglewater" />
      </a>
      <div class="footer-hours">
        <a href="#" class="footer-address"
          >1369 Dundas Street West, Toronto M6J 1Y3</a
        >
      </div>
      <div class="footer-contact">
        <a href="mailto:cocktails@projectgigglewater.com" class="footer-email">cocktails@projectgigglewater.com</a>
      </div>
      <div class="footer-socials">
        <div><a href="https://www.facebook.com/ProjectGigglewater/" target="_blank"><ion-icon name="logo-facebook" class="facebook"></ion-icon></a></div>
        <div ><a href="https://www.instagram.com/projectgigglewater/?hl=en" target="_blacnk"><ion-icon name="logo-instagram" class="instagram"></ion-icon></a></div>
      </div>
    </footer>
      <form method="post" action="orderForm.php" class="order-form" >
        <input type="text" name='name' id="order-form-name"/>
        <input type="text" name='email' id="order-form-email"/>
        <input type="text" name='phone' id="order-form-phone"/>
        <input type="text" name='address' id="order-form-address"/>
        <input type="text" name='type' id="order-form-type"/>
        <input type="text" name='price' id="order-form-price"/>
        <input type="text" name='tip' id="order-form-tip"/>
        <input type="text" name='preference' id="order-form-preference"/>
        

          <input name='cart' id="order-form-cart">
        
        <input type="text" name='recip-name' id="order-form-recip-name"/>
        <input type="text" name='recip-phone' id="order-form-recip-phone"/>
        <input type="text" name='message' id="order-form-message"/>
        <input id='submit1' class="submit" type="submit" value="Send it!"/>
        
      </form>
<script src="cart.js"></script>
</body>
</html>
