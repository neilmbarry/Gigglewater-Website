<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" Content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your friendly neighbourhood cocktail bar on Dundas West. Located at 1369 Dundas St W, Toronto.">
        <link rel="stylesheet" type="text/css" href="Vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

        <title>Find Us</title> 
        
        <link rel="apple-touch-icon" sizes="180x180" href="Resources/Favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Resources/Favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Resources/Favicons/favicon-16x16.png">
        <link rel="manifest" href="Resources/Favicons/site.webmanifest">
        <link rel="mask-icon" href="Resources/Favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="Resources/Favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="Resources/Favicons/browserconfig.xml">
        <meta name="theme-color" content="#000000">
    </head>
    <body class="animate__animated animate__fadeIn whole-page">
        <header>
            <nav class="new-nav animate__animated animate__fadeInDown main-nav">
                <div class="new-logo-container new-page">
                    <a href="./" class="nav-btn new-page">
                        <img  class="new-mylogo" src="Resources/img/logo-big.png" alt="Project Gigglewater">
                    </a>  
                </div>
                <ul class="new-nav-list">
                    <!--<li><a href="smash" class="nav-btn">Smash Burgers</a></li>-->
                    <li><a href="delivery" class="nav-btn new-page">Cocktail Kits</a></li>
                    <li><a href="bottles" class="nav-btn new-page">Bottle Shop</a></li>
                    <li><a href="merch" class="nav-btn new-page">Merchandise</a></li>
                    <li><a href="gallery" class="nav-btn new-page">Gallery</a></li>
                    <li><a href="reviews" class="nav-btn new-page">Reviews</a></li>
                    <li><a href="map" class="nav-btn new-page">Find Us</a></li>
                    <li><a href="form" class="nav-btn new-page">Contact</a></li>
                </ul>
                <div class="new-icon-container"><i class="ion-navicon-round new-icon"></i></div>           
            </nav>   
        </header>
        <section class="section-map animate__animated animate__fadeIn">
            <div>
                <h2 class="map-title">You can find us here!</h2>
            </div> 
            <div>
                <h3>1369 DUNDAS STREET WEST, TORONTO, M6J 1Y3</h3>
            </div>
            <div id="map"></div>
            <script>
            // Initialize and add the map
            function initMap() {
              // The location of Project Gigglewater
              var giggle = {lat: 43.6493, lng: -79.4264};
              // The map, centered at Project Gigglewater
              var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 15, center: giggle});
              // The marker, positioned at Uluru
              var marker = new google.maps.Marker({position: giggle, map: map});
            }
            </script>
            <script defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATiq5yG5KwHJMM2moUlca1HET6_kcjMbQ&callback=initMap">
            </script>
        </section>
        
        <footer>
            <div class="foot-act">
                    <ul class="social-links">
                        <li><a href="https://www.facebook.com/ProjectGigglewater/" target="_blank"><i class="ion-social-facebook icon-small"></i></a></li>
                        <!--<li><a href="#"><i class="ion-social-twitter icon-small"></i></a></li>-->
                        <li><a href="https://www.instagram.com/projectgigglewater/" target="_blank"><i class="ion-social-instagram icon-small"></i></a></li>
                    </ul>
            </div>
            <div class="act-foot">
                <p class="bottom-email">
                    <a href="mailto:cocktails@projectgigglewater.com" class="email-link c">cocktails@projectgigglewater.com</a><br> • Catering an event? <a href="form" class="a">Let's work together</a> •</p>
            </div>
        </footer>
        <script src="new-script.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180744876-1"></script>
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
        </script>
        </body>