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

        <title>Contact</title> 
        
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
        <section class="section-form">
            <div id="form">
                <h2 class="form-title">Drop us a line</h2>
            </div>
            <div class="row">
                <form method="post" action="mailer.php" class="contact-form">
                    <div class="row">
                        <?php
                        if($_GET['success'] == 1){
                            echo "<div class=\"form-messages success\">
                            <p>Thank you! Your message has been sent!</p>
                        </div>";}
                        if($_GET['success'] == -1){
                            echo "<div class=\"form-messages error\">
                            <p>Oops! Please try again.</p>
                        </div>";}
                        ?>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="search" selected>-please select-</option>
                                <option value="friends">Friends</option>
                                <option value="search">Search engine</option>
                               
                                <option value="ad">Advert</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" value='Yes'> Yes please
                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label><br></label>
                        </div>
                        <div class="col span-2-of-3">
                            <input class="submit" type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
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