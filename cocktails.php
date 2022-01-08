
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
                  placeholder="Day / Time (12pm to 2am), order by 11am for same day!"
                  
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
        <!-- <li class="nav-list-item"><a href="/menu" class="nav-item">Dine-In Menu</a></li> -->
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
      
      <a href="#" class="cart-icon"
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
    

   

   
    <main>
      <!-- <h2 class="title-push">Month of cinco de mayo Feature!<br><img src="/Icons_wave.svg" alt="" class="wavy2"></h2>
      <div class="feature">
        <div class="feature-box">
          <div class="feature-image">
            
          </div>
          <div class="feature-info">
            <h2 class="feature-title">Margarita month</h2>
            <h4 class="feature-description">Kit includes:</h4>
           
              <h4 class="feature-description">1x 750ml bottle of 1800 Blanco Tequila</h4>
              <h4 class="feature-description">1x 8oz Pineapple Coconut Marg Mix</h4>
              <h4 class="feature-description">1x 8oz Habanero Blood Orange Marg Mix</h4>
              <h4 class="feature-description">1x 8oz Classic Tommy's Marg Mix</h4>
              <h4 class="feature-description">1x 2oz Spicy Chili Salt</h4>
          
            
            <h4 class="feature-price">$130.00</h4>
            <h4 class="feature-servings">15 servings</h4>
            <div class="menu-item_btn feature-btn" id="cinco">
              Add to cart!
            </div>
            
          </div>
        </div>
      </div> -->
      <!-- <div class="feature mt-3">
        <div class="feature-box feature-box2">
          
          <div class="feature-info">
            <h2 class="feature-title2">Summer Spirit Forward</h2>
            <h4 class="feature-description">Kit includes:</h4>
           
              <h4 class="feature-description">1x 750ml bottle of 1800 Blanco Tequila</h4>
              <h4 class="feature-description">1x 8oz Pineapple Coconut Marg Mix</h4>
              <h4 class="feature-description">1x 8oz Habanero Blood Orange Marg Mix</h4>
              <h4 class="feature-description">1x 8oz Classic Tommy's Marg Mix</h4>
              <h4 class="feature-description">1x 2oz Spicy Chili Salt</h4>
          
            
            <h4 class="feature-price">$130.00</h4>
            <h4 class="feature-servings">15 servings</h4>
            <div class="menu-item_btn feature-btn" id="cinco">
              Add to cart!
            </div>
             <h4 class="feature-servings">First 15 orders will receive a complimentary<strong> Tequila tasting kit.</strong> <br><span class='italic'>*Includes four samples of our favourite tequila and mezcal, with an accompanying virtual class.</span> </h4> 
          </div>
          <div class="feature-image">
            
          </div>
        </div>
      </div> -->
     
      <h2 class="title-push">Cocktail Kits<br><img src="/Icons_wave.svg" alt="" class="wavy2"></h2>
      <div class="christmas-reminder item-hide">
        <div class="christmas-reminder-box  item-hide">
          <p>Christmas Cocktail Kits are SOLD OUT!<br>
            Cocktail Kits are reopening in JANUARY!</p>
        </div>
        
      </div>
      <h4 class="cocktail-description">
     Crafted with love and care - Makes 8 Servings
      </h4>
      <!-- <div id="snow"></div> -->
      <div class="menu-container">
          <div class="menu-item">
            <div class="menu-item_pic">
                <img src="/Resources/Jan2022/london.jpg" alt="cocktail-pic">
                <!-- <img src="/Resources/new/golden.jpg" alt="cocktail-pic" class="hover-pic"> -->

            </div>
            <div class="menu-item_title">
              London Mist<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
              375ml Maker's Mark Whisky, Cream of Earl Grey, Honey, Vanilla, & Pressed Lemon
            </div>
            <div class="menu-item_price">
                $75.00
            </div>
            <div class="menu-item_btn" id="london">
                Add to cart!
            </div>
          </div>
          <div class="menu-item">
              <div class="menu-item_pic">
                  <img src="/Resources/Jan2022/imperial.jpg" alt="cocktail-pic">
                  <!-- <img src="/Resources/new/pine-box.jpg" alt="cocktail-pic" class="hover-pic"> -->

              </div>
              <div class="menu-item_title">
                Imperial Blossom<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                375ml Ketel One Vodka, Cherry, Imperial Jasmine, Rosewater, & Pressed Lime
              </div>
              <div class="menu-item_price">
                  $75.00
              </div>
              <div class="menu-item_btn" id="imperial">
                  Add to cart!
              </div>
          </div>
          
          <div class="menu-item">
              <div class="menu-item_pic">
                  <img src="/Resources/Jan2022/OJ-drizzle.jpg" alt="cocktail-pic">
                  <!-- <img src="/Resources/new/deep-box.jpg" alt="cocktail-pic" class="hover-pic"> -->
              </div>
              <div class="menu-item_title">
                OJ Dizzle<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                375ml Bombay Sapphire Gin, Pressed Orange, Vanilla, Dill, & Pressed Lemon 
              </div>
              <div class="menu-item_price">
                    $75.00  
              </div>
              <div class="menu-item_btn" id="oj">
                  Add to cart!
              </div>
              
          </div>
          <div class="menu-item">
              <div class="menu-item_pic">
                  <img src="/Resources/Jan2022/Bora-bora.jpg" alt="cocktail-pic">
                  <!-- <img src="/Resources/new/mango-box.jpg" alt="cocktail-pic" class="hover-pic"> -->
              </div>
              <div class="menu-item_title">
                Bora Bora Blues<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                375ml 1800 Blanco Tequila, Pineapple, Coconut, Pressed Lime, Chili Salt, & Blue colouring
              </div>
              <div class="menu-item_price">
                  $75.00
              </div>
              <div class="menu-item_btn" id="bora">
                  Add to cart!
              </div>
          </div>
          
          <div class="menu-item">
            <div class="menu-item_pic">
                <img src="/Resources/Jan2022/peanut.jpg" alt="cocktail-pic">
                <!-- <img src="/Resources/new/golden.jpg" alt="cocktail-pic" class="hover-pic"> -->

            </div>
            <div class="menu-item_title">
              Peanut Butter Jelly Time<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
              375ml Appleton Signature Rum, Peanut Orgeat, Raspberry, & Pressed Lime
            </div>
            <div class="menu-item_price">
                $75.00
            </div>
            <div class="menu-item_btn" id="peanut">
                Add to cart!
            </div>
          </div>
          <div class="menu-item ">
            <div class="menu-item_pic">
                <img src="/Resources/Jan2022/apple-solutely.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
              Apple-solutely Old Fashioned <br><span class="fontweight-normal">(16oz Pre-batch)</span><br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
              Apple Infused Bushmills Black Irish Whiskey, Winter Spiced Apple Syrup, Angostura Bitters, & Kinsip Black Walnut Bitters
            </div>
            <div class="menu-item_price">
                $75.00
            </div>
            <div class="menu-item_btn" id="apple_solutely">
                Add to cart!
            </div>
            
        </div>
      </div>
      
      <h2 id="blended" class="item-hide">Pre-blended<br><img src="/Icons_wave.svg" alt="" class="wavy2"></h2>
      <h4 class="cocktail-description item-hide">
       Ready to serve - Presented as 473ml bottled cocktail - Makes 5+ Servings
      </h4>
      
      <div class="menu-container item-hide">
                
        <div class="menu-item item-hide">
          <div class="menu-item_pic">
              <img src="/Resources/May 2021/Peach355.jpg" alt="cocktail-pic">
          </div>
          <div class="menu-item_title">
              Peach Perfect<br>
              <!-- *Super popular!*<br> -->
              <img src="/Icons_wave.svg" alt="wave" class="wavy3">
          </div>
          <div class="menu-item_description">
            <strong>355ml can / 1 serving <br> 7% ABV</strong> <br><br>
            Bombay Sapphire Gin, St<span class="tilda">~</span>Germain Elderflower Liqueur, Peach Nectar, Cream of Earl Grey Tea &amp; Acidulants (Ya, we fancy!)
            
          </div>
          <div class="menu-item_price">
              $10.00 / Can
              
          </div>
          <div class="menu-item_btn" id="perfect">
              Add to cart!
              <!-- Temporarily sold out! -->
          </div>
          <div class="menu-item_price">
            
            $55.00 / 6-Pack
          </div>
          <!-- <div class="space"></div> -->
          <div class="menu-item_btn" id="perfect6">
            Add to cart!
            <!-- Temporarily sold out! -->
          </div>
        </div>  
        <!-- <div class="menu-item">
          <div class="menu-item_pic">
              <img src="/Resources/new/perfect3.jpg" alt="cocktail-pic">
          </div>
          <div class="menu-item_title">
              Peach Perfect<br>
              *6-Pack*<br><img src="/Icons_wave.svg" alt="wave" class="wavy3">
          </div>
          <div class="menu-item_description">
            <strong>240ml cans / 6 servings <br> 7% ABV</strong> <br><br>
            Bombay Sapphire Gin, St<span class="tilda">~</span>Germain Elderflower Liqueur, Peach Nectar, Cream of Earl Grey Tea &amp; Acidulants (Ya, we fancy!)
            
          </div>
          <div class="menu-item_price">
              $32.50
          </div>
          <div class="menu-item_btn" id="perfect6">
              Add to cart!
          </div>
        </div>           -->
        <div class="menu-item">
          <div class="menu-item_pic">
              <img src="/Resources/Christmas2021/Gingerbread Negroni.jpg" alt="cocktail-pic">
          </div>
          <div class="menu-item_title">
            gingerbread negroni<br><img src="/Icons_wave.svg" alt="" class="wavy3">
          </div>
          <div class="menu-item_description">
            gingerbread spiced citadelle gin, sweet vermouth, amaro montenegro, campari, & maple syrup 
          </div>
                    <div class="menu-item_price">
                     16oz / $67.50  
                </div>
                <div class="menu-item_btn" id="gingNegroniSml">
                    Add to cart!
                </div>
                <div class="menu-item_price">
              
                  32oz / $115.00 
                </div>
                <!-- <div class="space"></div> -->
                <div class="menu-item_btn" id="gingNegroniLrg">
                  Add to cart!
                  <!-- Temporarily sold out! -->
                </div>
        </div>
          <div class="menu-item">
              <div class="menu-item_pic">
                  <img src="/Resources/new/Deshler.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                  APPLEWOOD DESHLER<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                Wild Turkey bourbon blend, Dubonnet, Grand Marnier, Peychauds bitters, Angostura bitters, charred applewood chips, &amp; orange zest
              </div>
              <div class="menu-item_price">
                  $70.00
              </div>
              <div class="menu-item_btn" id="deshler">
                  Add to cart!
              </div>
          </div>
          <div class="menu-item item-hide">
              <div class="menu-item_pic">
                  <img src="/Resources/new/SummerSpirit.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                Summer Spirit Forward<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                1x 8oz Pina Colada Old Fashioned<br>
                1x 8oz Jamaican Manhattan<br>
                1x 8oz Raspberry tequila negroni<br>
                <strong>10+ servings</strong><br>
                *SALE UNTIL SOLD OUT*

              </div>
              <div class="menu-item_price">
                $90.00
              </div>
              <div class="menu-item_btn" id="summer">
                  Add to cart!
                  
              </div>
          </div>
          <div class="menu-item item-hide">
              <div class="menu-item_pic">
                  <img src="/Resources/new/PopIt.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                  POP IT LIKE IT'S HOT
              </div>
              <div class="menu-item_description">
                Corn pop infused St. remy brandy, lillet blanc, green chartreuse, maple syrup, &amp; peach bitters
              </div>
              <div class="menu-item_price">
                * 2 REMAINING! *
                  $67.50
              </div>
              <div class="menu-item_btn" id="popit">
                  Add to cart!
              </div>
          </div>
          <div class="menu-item item-hide">
              <div class="menu-item_pic">
                  <img src="/Resources/new/paperPlane.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                  PAPER FLAME<br><img src="/Icons_wave.svg" alt="" class="wavy3">
              </div>
              <div class="menu-item_description">
                Flor De Cana 5yo Rum, Aperitivo blend, Amaro Nonino, overproof rum, &amp; Fresh Lime
                          
                          
              </div>
              <div class="menu-item_price">
                  $67.50
              </div>
              <div class="menu-item_btn" id="paper">
                  Add to cart!
              </div>
          </div>
          <div class="menu-item item-hide">
              <div class="menu-item_pic">
                  <img src="/Resources/new/after8.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                  AFTER EIGHT, BEFORE NINE
              </div>
              <div class="menu-item_description">
                Beattie's peppermint Vanilla Vodka, Creme de menthe isabelle, &amp; creme de cacao<br/><span class="bold">Only 2 remaining!</span>
              </div>
              <div class="menu-item_price">
                  $67.50
              </div>
              <div class="menu-item_btn" id="after">
                  Add to cart!
              </div>
          </div>
          <div class="menu-item item-hide">
              <div class="menu-item_pic">
                  <img src="/Resources/new/butter.jpg" alt="cocktail-pic">
              </div>
              <div class="menu-item_title">
                  HOT BUTTERED RUM
              </div>
              <div class="menu-item_description">
                Mount Gay Eclipse rum, Spiced Butter, &amp; Cinnamon
              </div>
              <div class="menu-item_price">
                  $20.00
              </div>
              <div class="menu-item_btn" id="butter">
                  Add to cart!
              </div>
          </div>
      </div>
      <!-- <div class="feature mt-3">
        <div class="feature-box feature-box2">
          <div class="feature-image feature-image2 small-screen">
            
          </div>
          
          <div class="feature-info">
            <h2 class="feature-title2">Summer Spirit Forward</h2>
            <h4 class="feature-description">Kit includes:</h4>
           
              <h4 class="feature-description capitalize"><strong>1x 8oz Pina Colada Old Fashioned</strong></h4>
              <h4 class="feature-description capitalize">Pineapple infused wild turkey bourbon, toasted coconut, tiki bitters</h4>
              
          
              <h4 class="feature-description capitalize"><strong>1x 8oz Jamaican Manhattan</strong></h4>
              <h4 class="feature-description capitalize">appleton estate 8yr rum, fernet branca, amontillado sherry, rhubarb Liqueur</h4>
              <h4 class="feature-description capitalize"><strong>1x 8oz Raspberry tequila negroni</strong></h4>
              <h4 class="feature-description capitalize">Espolon Blanco tequila, raspberry campari, mezcal agua santa, sweet vermouth</h4>
              
            
            <h4 class="feature-price">$110.00</h4>
            <h4 class="feature-servings"><strong>10+ servings</strong></h4>
            <div class="menu-item_btn feature-btn" id="summer">
              Add to cart!
            </div>
             
          </div>
          <div class="feature-image feature-image2 large-screen">
            
          </div>
        </div>
      </div> -->
      
      <h2 class=''>Food<br><img src="/Icons_wave.svg" alt="" class="wavy2"></h2>
      
      <div class="menu-container">
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/May 2021/nuts.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Naughty Squirrel Mix<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
            Almonds, Cashews, Raisins, Cranberries, Chocolate Toffee<br>
                300g
            </div>
            <div class="menu-item_price">
                $15.00
            </div>
            <div class="menu-item_btn" id="nuts">
                Add to cart!
            </div>
          </div>
          <div class="menu-item">
            <div class="menu-item_pic">
                <img src="/Resources/Christmas2021/popcorn.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Old Fashioned Kettle Corn<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
            Toronto Popcorn Company<br>80g
            </div>
            <div class="menu-item_price">
                $5.00
            </div>
            <div class="menu-item_btn" id="popcorn">
                Add to cart!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul-matcha.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Matcha 36%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
            Flavour notes: Matcha Latte, Honey<br>
                White Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn" id="soul_matcha">
                Add to cart!
            </div>
          </div>
          
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul_dom.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Dominican 70%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Flavour notes: Caramel, Honey, Grape<br>
                Dark Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn btn_disable" id="soul_dom">
                <!-- Add to cart! -->
                Temporarily sold out!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul_guat.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Guatemala 68%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Flavour notes: Clementine, Honey, Black Tea<br>
                Dark Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn" id="soul_guat">
                Add to cart!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul_mad.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Madagascar 60%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Flavour notes: Toffee, Caramel<br>
                Dark Milk Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn btn_disable" id="soul_mad">
                <!-- Add to cart! -->
                Temporarily sold out!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul_papua.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Papua New Guinea 77%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Flavour notes: Dried Fruit, Molasses, Mesquite<br>
                Dark Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn" id="soul_papua">
                Add to cart!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/soul_ven.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Soul Chocolate<br>Venezuela 75%<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Flavour notes: Almond, Cinnamon, Silky<br>
                Dark Chocolate - 25g
            </div>
            <div class="menu-item_price">
                $6.50
            </div>
            <div class="menu-item_btn" id="soul_ven">
                Add to cart!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/ONYX_Box4-2.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                Onyx Box Assorted Bon-Bons<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
              Contains dairy, soy, and coloured cocoa butter. May contain traces of nuts and gluten.
            </div>
            <div class="menu-item_price">
                $15.00
            </div>
            <div class="menu-item_btn" id="choc">
                Add to cart!
            </div>
          </div>
          <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/olives.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                ANCHOVY-STUFFED OLIVES<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                José Lou - Green Olives stuffed with Anchovy - 0.37l
            </div>
            <div class="menu-item_price">
                $6.00
            </div>
            <div class="menu-item_btn" id="olives">
                Add to cart!
            </div>
        </div>
    
        <div class="menu-item">
            <div class="menu-item_pic">
                <img src="/Resources/new/chips.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                POTATO CHIPS<br><img src="/Icons_wave.svg" alt="" class="wavy3">
            </div>
            <div class="menu-item_description">
                Ruffles Regular Potato Chips - 40g 
            </div>
            <div class="menu-item_price">
                $0.75
            </div>
            <div class="menu-item_btn" id="chips">
                Add to cart!
            </div>
        </div>
        
        <div class="menu-item item-hide">
            <div class="menu-item_pic">
                <img src="/Resources/new/falernum.jpg" alt="cocktail-pic">
            </div>
            <div class="menu-item_title">
                HOUSE-MADE FALERNUM
                (CONTAINS NUTS) 240ML / 8OZ
            </div>
            <!-- <div class="menu-item_description">
                APPLETON SIGNATURE RUM
            </div> -->
            <div class="menu-item_price">
                $10.00
            </div>
            <div class="menu-item_btn" id="falernum">
                Add to cart!
            </div>
        </div>
        
      </div>  
    </main>
  
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
  
      <!-- <section class="hidden">
        <div class="hours">
          <p class="bottom-email spacing">
            cocktail kits available for pick up only<br />indoor dining
            unavailable<br />inquire for details<br />CLOSED MONDAYS
          </p>
  
          <div>
            <p class="bottom-email slight-fix">
              <a
                href="mailto:cocktails@projectgigglewater.com"
                class="email-link c"
                >cocktails@projectgigglewater.com</a
              ><br /><a href="map" class="c"
                >1369 Dundas Street West, Toronto, M6J 1Y3</a
              ><br />
              • Catering an event?
              <a href="form" class="a">Let's work together </a>•
            </p>
          </div>
        </div>
      </section> -->
      <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          
          <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/selectivizr2@1.0.9/selectivizr2.min.js"></script>
          <script src="Vendors/js/jquery.waypoints.min.js"></script>
          <script src="Resources/js/script.js"></script>-->
      <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180744876-1"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
  
            gtag('config', 'UA-180744876-1');
          </script>
          <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q40M9KKNX5"></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
  
            gtag('config', 'G-Q40M9KKNX5');
          </script>-->
          <script src="cart.js"></script>
        </body>
</html>