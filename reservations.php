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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <title>Project Gigglewater - Reservations</title>

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
                <label class="contact-label" for="email"></label>
            <div class="contact-input email-reminder">We will usually respond within 24 hours. Please check your spam folder as sometimes our replies are sent there.</div>
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
            <li class="nav-list-item">
                <a href="/menu" class="nav-item">Menu</a>
              </li>
              <li class="nav-list-item">
                <a href="/cocktails" class="nav-item">Cocktail Kits</a>
              </li>
              
      
              
              <li class="nav-list-item">
                <a href="/gallery" class="nav-item">Gallery</a>
              </li>

              <li class="nav-list-item">
                <a href="/reservations" class="nav-item">Reservations</a>
              </li>
      
              <li class="nav-list-item">
                <a href="/contact" class="nav-item">Contact</a>
              </li>
              <li></li>
            </ul>
            <div class="hidden">X</div>
      
            <!-- <a href="#" class="cart-icon item-hide"
                  ><ion-icon name="cart-outline"></ion-icon
                  >
              <div class="cart-notification cart-notification-hide">
                  3
              </div>
              </a> -->
            <div class="burger">
              <div class="burger-container">
                <ion-icon
                  name="menu-outline"
                  class="burger-icon burger-open"
                ></ion-icon>
                <ion-icon
                  name="close-outline"
                  class="burger-icon burger-close burger-hide"
                ></ion-icon>
              </div>
            </div>
          </nav>
        <!-- <div class="row">
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
        </div> -->
        <section class="reservations">
            <!-- <div class="reservations-box">
                <div class="reservations-bg">
                    <img src="./Resources/Gallery/gallery13.jpg" alt="">
                </div>
               
                <div class="reservations-text"><p>We don’t take reservations or private buyouts. While we love hosting such events, the unintentional side-effect is shutting our doors to regulars, friends, and people discovering us for the first time. It is for this reason that we only accept walk-ins.</p></div>
               
                <div class="reservations-text">
                    <p>
                         However, for parties of 6 or more, please reach out to us at cocktails@projectgigglewater.com. We won’t be able to guarantee your seating but we will let you know what to expect.  <br></p>
                        
                </div>
                <div class="reservations-text">
                    <p>
                         We put a lot of thought and care into every aspect of the Gigglewater experience, and we would love to share this with everyone!<br>
                        
                    </p>
                    
                </div>
              
                <div class="reservations-logo">
                    <img class="logo" src="./logo-big.png" alt="Project Gigglewater" />
                </div>
            </div> -->
            <script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=1314121&type=standard&theme=standard&color=1&iframe=true&domain=com&lang=en-US&newtab=false&ot_source=Restaurant%20website'></script>
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
        <!-- <form method="post" action="orderForm.php" class="order-form" >
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
        
        </form> -->
        <script src="cart.js"></script>
    </body>
</html>
