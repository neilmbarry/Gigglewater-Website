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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <meta
      name="description"
      content="Craft cocktails and tasty shareable plates in a friendly intimate atmosphere. Corporate and consumer cocktail kits available for delivery and takeout."
    />

    <link rel="stylesheet" type="text/css" href="Resources/sass/style2.css" />
    <!-- <link rel="stylesheet" type="text/css" href="Resources/sass/test.css" /> -->

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <!-- <script src="snowstorm.js"></script> -->

    <title>Project Gigglewater</title>

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
    <script
      src="https://kit.fontawesome.com/4208deb245.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="nav">
      <div class="nav-logo-container">
        <a href="/" class="nav-btn">
          <img class="logo" src="./logo-big.png" alt="Project Gigglewater" />
        </a>
      </div>
      <ul class="nav-items nav-items_hide">
        <li class="nav-list-item">
          <a href="#" class="nav-item">Bar Menu</a>
          <!-- <a href="/menu" class="nav-item">Bar Menu</a> -->
        </li>
        <li class="nav-list-item">
          <a href="/cocktails" class="nav-item">Cocktail Kits</a>
        </li>
        <li class="nav-list-item">
          <a href="/gallery" class="nav-item">Gallery</a>
        </li>
        <!-- <li class="nav-list-item">
          <a href="/reservations" class="nav-item">Reservations</a>
        </li> -->
        <li class="nav-list-item">
          <a href="/contact" class="nav-item">Contact</a>
        </li>
        <li></li>
      </ul>
      <div class="hidden">X</div>

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
    <header class="header">
      <!-- <ul class="lightrope">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
      <div id="snow"></div> -->
      <div class="row">
        <!-- <?php
        if($_GET['success'] == 1){
            echo "<div class=\"form-messages form-messages-success success-send \">
            <p>Thank you, your message has been sent!<br> We will email back shortly!<br>(Please check your spam folder if you don't hear from us!)</p>
        </div>";}
        if($_GET['success'] == -1){
            echo "<div class=\"form-messages form-messages-error\">
            <p>Oops! Please check you email address and try again.</p> 
        </div>";}
        ?> -->
      </div>
      <!-- <img src="/images/snow.gif" class="snow-gif" /> -->
      <div class="header-box">
        <!-- <h2 class="grey-text margin0">Welcome to</h2> -->
        <div class="header-box-title">
          <img src="./title.png" alt="Project Gigglewater" class="title" />
          <!-- <img src="/images/CHristmas.png" class="christmas-icon" /> -->
        </div>
        <div class="header-box-banner">
          <img src="./drinks.png" alt="drinks" class="banner" />
        </div>

        <!-- <div class="order-by">
          <strong>"Your friendly neighbourhood cocktail bar."</strong>
        </div> -->
        <div class="landing-btns">
          <a href="#" class="btn btn-cta btn-header">Bar Menu</a>
          <!-- <a href="/menu" class="btn btn-cta btn-header">Bar Menu</a> -->
          <a href="#" class="btn btn-cta btn-header greyed-out"
            >No reservations</a
          >
          <!-- <a href="/reservations" class="btn btn-cta btn-header greyed-out"
            >No reservations</a
          > -->
        </div>
        <div class="order-by">
          <i class="margin-right fa-solid fa-location-dot"></i> 1369 Dundas
          Street West, Toronto
        </div>
        <!-- <div class="order-by">
          <i class="margin-right fa-regular fa-clock"></i> Closed from January
          1st to 11th
        </div> -->
        <div class="order-by">
          <i class="margin-right fa-regular fa-clock"></i> 6PM - 2AM, Tuesday -
          Sunday
        </div>
        <div class="order-by">
          <i class="margin-right fa-solid fa-utensils"></i> Kitchen open all
          night
        </div>

        <!-- <div class="order-by">
          <i class=" margin-right fa-solid fa-hourglass-half"></i> 60 minute
          max seating (ask for extension)
        </div>
        <div class="order-by">
          <span class=' bold'>20</span><i class=" margin-right fa-solid fa-percent"></i> Auto Gratuity
          for groups 6 or more
        </div>
        <div class="order-by">
          <i class=" margin-right fa-solid fa-money-bill-1-wave"></i> We can split a cheque a maximum of (2) two ways
        </div>
        <div class="order-by">
          <i class=" margin-right fa-solid fa-gamepad"></i> $1 from every cocktail sold will be donated to Toys for Tots Canada
        </div>
        <div class="order-by">
          <i class=" margin-right fa-solid fa-people-group"></i></i> Maximum group
          size of 8 (FRI/SAT)
        </div>
        <div class="order-by">
          <i class=" margin-right fa-solid fa-people-arrows"></i> Groups to fully
          arrive before being seated
        </div> -->
        <!-- <div class="order-by">
          <i class="margin-right fa-solid fa-utensils"></i> Kitchen open all
          night
        </div> -->

        <!-- <div class="order-by">Full food menu till close.</div>
        <div class="order-by"></div> -->
      </div>
    </header>
    <section class="section-reviews">
      <h2 class="section-reviews-title title-hidden">
        Hear what our guests had to say<br /><img
          src="/Icons_wave.svg"
          alt=""
          class="wavy2"
        />
      </h2>

      <div class="slider slider-blur">
        <div class="slide slide--1">
          <div class="testimonial">
            <h5 class="testimonial__header">
              An unassuming bar, but drinks were on point and service was
              prompt!
            </h5>
            <blockquote class="testimonial__text">
              Would've loved to try the food but unfortunately we just came from
              dinner. Was recommended this place by someone in the industry, and
              usually it always ends up being a good time. I will definitely be
              back when I'm in the area . Keep up the great work. Cheers"
            </blockquote>
            <address class="testimonial__author">
              <img src="/gallery4.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">David Ding</h6>
              <p class="testimonial__location">⭐️ ⭐️ ⭐️ ⭐️ ⭐️</p>
            </address>
          </div>
        </div>

        <div class="slide slide--2">
          <div class="testimonial">
            <h5 class="testimonial__header">We loved it!!</h5>
            <blockquote class="testimonial__text">
              It’s a lot more intimate than Miracle which was nice & the drinks
              were really well made. The atmosphere was nice & the decor totally
              set the holiday mood. A fabulous way to meet up with the ones you
              love over the holidays!"
            </blockquote>
            <address class="testimonial__author">
              <img src="/gallery13.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Chelsea Iheme-Hall</h6>
              <p class="testimonial__location">⭐️ ⭐️ ⭐️ ⭐️ ⭐️</p>
            </address>
          </div>
        </div>

        <div class="slide slide--3">
          <div class="testimonial">
            <h5 class="testimonial__header">
              Project Gigglewater is an excellent little bar!
            </h5>
            <blockquote class="testimonial__text">
              Perfect place to spend an evening with a few drinks and friends.
              The staff are friendly and attentive and the drinks are more
              crafted and thoughtful than standard bar fare. They've recently
              added a light food menu and everything is tasty, but you are
              primarily there for the drinks. It's a comfy place that manages to
              satisfy even in the current pandemic era of challenges for bars."
            </blockquote>
            <address class="testimonial__author">
              <img src="/gallery13.jpg" alt="" class="testimonial__photo" />
              <h6 class="testimonial__name">Tom Solecki</h6>
              <p class="testimonial__location">⭐️ ⭐️ ⭐️ ⭐️ ⭐️</p>
            </address>
          </div>
        </div>
        <!--<div class="slide"><img src="img/img-1.jpg" alt="Photo 1" /></div>
          <div class="slide"><img src="img/img-2.jpg" alt="Photo 2" /></div>
          <div class="slide"><img src="img/img-3.jpg" alt="Photo 3" /></div>
          <div class="slide"><img src="img/img-4.jpg" alt="Photo 4" /></div>-->
        <button class="slider__btn slider__btn--left">&larr;</button>
        <button class="slider__btn slider__btn--right">&rarr;</button>
        <div class="dots"></div>
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
    <script src="app.js"></script>
    <script src="cart.js"></script>
  </body>
</html>
