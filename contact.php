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

    <title>Project Gigglewater - Contact</title>

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
      <div class="reservations-box">
        <div class="reservations-bg">
          <img src="./Resources/Gallery/gallery23.jpg" alt="" />
        </div>
        <div class="reservations-text contact-resos">
          <p class="text-center">Please reach us through email at</p>
          <a href="mailto:cocktails@projectgigglewater.com">
            <div class="text-center btn btn-contact">
              cocktails@projectgigglewater.com
            </div>
          </a>
          <p class="text-center">or via Instagram</p>
          <a
            href="https://www.instagram.com/projectgigglewater/?hl=en"
            target="_blacnk"
          >
            <div class="btn btn-contact">@projectgigglewater</div></a
          >
          <p class="text-center">
            We can't afford to have a company phone number!
          </p>
        </div>

        <div class="reservations-logo">
          <img class="logo" src="./logo-big.png" alt="Project Gigglewater" />
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
        <a href="mailto:cocktails@projectgigglewater.com" class="footer-email"
          >cocktails@projectgigglewater.com</a
        >
      </div>
      <div class="footer-socials">
        <div>
          <a href="https://www.facebook.com/ProjectGigglewater/" target="_blank"
            ><ion-icon name="logo-facebook" class="facebook"></ion-icon
          ></a>
        </div>
        <div>
          <a
            href="https://www.instagram.com/projectgigglewater/?hl=en"
            target="_blacnk"
            ><ion-icon name="logo-instagram" class="instagram"></ion-icon
          ></a>
        </div>
      </div>
    </footer>
    <!-- <form method="post" action="orderForm.php" class="order-form">
      <input type="text" name="name" id="order-form-name" />
      <input type="text" name="email" id="order-form-email" />
      <input type="text" name="phone" id="order-form-phone" />
      <input type="text" name="address" id="order-form-address" />
      <input type="text" name="type" id="order-form-type" />
      <input type="text" name="price" id="order-form-price" />
      <input type="text" name="tip" id="order-form-tip" />
      <input type="text" name="preference" id="order-form-preference" />

      <input name="cart" id="order-form-cart" />

      <input type="text" name="recip-name" id="order-form-recip-name" />
      <input type="text" name="recip-phone" id="order-form-recip-phone" />
      <input type="text" name="message" id="order-form-message" />
      <input id="submit1" class="submit" type="submit" value="Send it!" />
    </form> -->
    <script src="cart.js"></script>
  </body>
</html>
