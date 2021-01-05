<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" Content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cocktail Kits! Coffee! Merchandise! We have it all available for pick up and delivery!">
        <link rel="stylesheet" type="text/css" href="Vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="Vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/queries.css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet">

        <title>Cocktail Kits</title> 
        
        <link rel="apple-touch-icon" sizes="180x180" href="Resources/Favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="Resources/Favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="Resources/Favicons/favicon-16x16.png">
        <link rel="manifest" href="Resources/Favicons/site.webmanifest">
        <link rel="mask-icon" href="Resources/Favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="Resources/Favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="Resources/Favicons/browserconfig.xml">
        <meta name="theme-color" content="#000000">
        <script type="application/ld+json">
        {
          "@context" : "http://schema.org",
          "@type" : "Restaurant",
          "name" : "Project Gigglewater",
          "email" : "cocktails@projectgigglewater.com",
          "address" : {
            "@type" : "PostalAddress",
            "streetAddress" : "1369 Dundas Street West",
            "addressLocality" : "Toronto",
            "addressCountry" : "Canada",
            "postalCode" : "M6J1Y3"
          }
        }
        </script>
    </head>
    <body class="animate__animated animate__fadeIn whole-page sky">
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
        <section class="section-delivery animate__animated animate__fadeIn">
            <div>
                <h2 class="break">Quarantine Factory</h2>
            </div>
            <div class="row">
                <?php
                if($_GET['success'] == 1){
                    echo "<div class=\"form-messages success\">
                    <p>Thank you, your message has been sent!<br> We will email back shortly!<br>(Please check your spam folder if you don't hear from us!)</p>
                </div>";}
                if($_GET['success'] == -1){
                    echo "<div class=\"form-messages error\">
                    <p>Oops! Please try again.</p>
                </div>";}
                ?>
            </div>
            <!--<div class="delivery-box row">
                <h3 class="break">The Quarantine Factory</h3>
                <p>Hello friends! We are excited to announce our transition to our cocktail lockdown program! While you can't enjoy our delicious cocktails at Project Gigglewater, you can enjoy them at home! In the coming weeks, we will be releasing a range of diy cocktail kits, bottled cocktails, and hot cocktails kits for pick up and delivery.</p>
                
            </div>-->
            <div class="delivery-box row">
                
                <p>Have a quick browse through our selection below to see what is available. If you see anything you like, send us a message at the bottom. We will respond shortly to discuss your inquiry, answer any questions you might have, and arrange pick-up <!--/ delivery-->and payment that suits you.</p> 
                
            </div>
                   
        </section>
        <section class="section-order" id="cities">
            <div>
                <h2 class="break">cocktail kits!</h2>
            </div>
            <div class="new-cocktails-container">
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/gigglestar.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/gigglestar-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            Gigglestar Martini
                        </div>
                        <div class="new-cocktail-text">
                            Grey Goose Vodka, St. Germain Elderflower Liqueur, Sparkling Wine, Passionfruit, Vanilla &amp; Lemon
                        </div>
                        (Includes bonus coupe and ornament while supplies last!!)
                        <div class="new-cocktail-price">
                            <br>$95.00<br>
                            Servings: 5.5
                            
                        </div>
                        <div class="button-container gigglestar">
                            <a href="#scrolly-form"><p class="order-btn order-btn-gigglestar order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container gigglestar">
                            <a href="#scrolly-form"><p class="order-btn order-btn-gigglestar2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/violet.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/violet-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            violet delights,<br> violet ends
                        </div>
                        <div class="new-cocktail-text">
                            Bombay Sapphire Gin, Lemon, Blackcurrant, Choco Bitters, &amp; Soda
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container violet">
                            <a href="#scrolly-form"><p class="order-btn order-btn-violet order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container violet">
                            <a href="#scrolly-form"><p class="order-btn order-btn-violet2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/kentucky.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/kentucky-box2.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            kentucky bumpkin
                        </div>
                        <div class="new-cocktail-text">
                            Maker's Mark whiskey, Lemon, Apple, Pumpkin Spice Syrup, &amp; Nutmeg
                        </div>
                        <div class="new-cocktail-price">
                            $67.50<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container kentucky">
                            <a href="#scrolly-form"><p class="order-btn order-btn-kentucky order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container kentucky">
                            <a href="#scrolly-form"><p class="order-btn order-btn-kentucky2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/cran.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/cran-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            cran me a river
                        </div>
                        <div class="new-cocktail-text">
                            Ketel One vodka, Lime, Cranberry, Cinnamon, Grenadine, &amp; Orange Bitters
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container cran">
                            <a href="#scrolly-form"><p class="order-btn order-btn-cran order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container cran">
                            <a href="#scrolly-form"><p class="order-btn order-btn-cran2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/last-leaf.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/last-leaf-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            the last leaf
                        </div>
                        <div class="new-cocktail-text">
                            St. Remy Brandy, Lemon, Apricot Nectar, Allspice Syrup, &amp; Angostura Bitters
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container leaf">
                            <a href="#scrolly-form"><p class="order-btn order-btn-leaf order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container leaf">
                            <a href="#scrolly-form"><p class="order-btn order-btn-leaf2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/sabbatical.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/sabbatical-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            2020 sabbatical
                        </div>
                        <div class="new-cocktail-text">
                            Appleton Vx rum, Lime, Falernum, &amp; Coconut Water<br>(contains almond)
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container 2020">
                            <a href="#scrolly-form"><p class="order-btn order-btn-2020 order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container 2020">
                            <a href="#scrolly-form"><p class="order-btn order-btn-20202 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/casper.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/casper-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            casper and the harvest moon
                        </div>
                        <div class="new-cocktail-text">
                            1800 Blanco tequila, Lime, Blood Orange, &amp; Ghost Pepper Agave
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container casper">
                            <a href="#scrolly-form"><p class="order-btn order-btn-casper order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container casper">
                            <a href="#scrolly-form"><p class="order-btn order-btn-casper2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/pastor.jpg" alt="a delicious fancy cocktail">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            pastor jack
                        </div>
                        <div class="new-cocktail-text">
                            Jack Daniels whiskey, Lime, Pear Nectar, &amp; Pecan Bitters
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container pastor">
                            <a href="#scrolly-form"><p class="order-btn order-btn-pastor order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container pastor">
                            <a href="#scrolly-form"><p class="order-btn order-btn-pastor2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/cherry.jpg" alt="a delicious fancy cocktail">
                        <img src="Resources/img/cherry-box.jpg" alt="a delicious fancy cocktail" class="hover-cap">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            cherry pandemic
                        </div>
                        <div class="new-cocktail-text">
                            Tanqueray gin, Lime, Cherry, Jasmine Tea, &amp; Grapefruit Bitters
                        </div>
                        <div class="new-cocktail-price">
                            $65.00<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container cherry">
                            <a href="#scrolly-form"><p class="order-btn order-btn-cherry order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container cherry">
                            <a href="#scrolly-form"><p class="order-btn order-btn-cherry2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
                <div class="new-cocktail-item">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/stoutfire.jpg" alt="a delicious fancy cocktail">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                            mrs. stoutfire
                        </div>
                        <div class="new-cocktail-text">
                            Forty Creek whisky, Lemon, Grapefruit, Raspberry, Stout, &amp; black lemon bitters
                        </div>
                        <div class="new-cocktail-price">
                            $67.50<br>
                            Servings: 7.5
                        </div>
                        <div class="button-container stoutfire">
                            <a href="#scrolly-form"><p class="order-btn order-btn-stout order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container stoutfire">
                            <a href="#scrolly-form"><p class="order-btn order-btn-stout2 order-delivery">Order Delivery</p></a>
                        </div>-->
                    </div>
                </div>
            </div>
            <h2 class="break">coffee!</h2>
            <div class="new-cocktails-container">
                <div class="new-cocktail-item-coffee">
                    <div class="new-cocktail-pic">
                        <img src="Resources/img/coffee.jpg" alt="a delicious fancy bag of coffee for espresso">
                    </div>
                    <div class="new-cocktail-info">
                        <div class="new-cocktail-title break">
                                Brazil
                        </div>
                        <div class="new-cocktail-text">
                                Process: Natural<br>
                            Region: Alta Mogiana<br>
                            Variety: Yellow Catuai<br>
                            Altitude: 1270M<br>
                            Creamy | Brown Sugar | Orange<br>
                            Net Wt. 340g
                        </div>
                        <div class="new-cocktail-price coffee-price">
                                $18.00<br>
                            tax exempt
                        </div>
                        <div class="button-container coffee">
                            <a href="#scrolly-form"><p class="order-btn order-btn-coffee order-pickup">Order Pick up</p></a>
                        </div>
                        <!--<div class="button-container coffee">
                            <a href="#scrolly-form"><p class="order-btn order-btn-coffee2 order-delivery">Order Delivery</p></a>
                        </div>-->
                        <!--<div class="button-container coffee">
                            <a href="#scrolly-form"><p class="order-btn" id="scrolly-form">Order Delivery</p></a>
                        </div>-->
                        <div><p id="scrolly-form">.</p></div>
                    </div>
                </div>
            </div>
            
        </section>
        <section  class="scroller-form">
            <h2 class="end-title" id="scroll-form">Order / inquiries</h2>
            <p class="para">Let us know below if anything from our selection interests you and we will promtly respond with options for pick-up and payment!<br>•<br> Due to the increased volume of orders at this time of year, we are now unable to offer delivery until the new year (January 2021). Sorry for any inconvenience!<br></p>
            <div class="bottom-form">
                <div class="form-titles">
                    <div class="form-switch form-pickup active">
                        Pick-up
                    </div>
                    <div class="form-switch form-delivery">
                        Delivery
                    </div>
                </div>
                <form method="post" action="mailer4.php" class="order-contact-form order-form-delivery hidden">
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="name">Name*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="text" name="name" id="name" placeholder="Your name!" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="email">Email*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="email" name="email" id="email" placeholder="Please double check the address!" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="phone">Contact number*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="text" name="phone" id="phone" placeholder="Your contact number!" required>
                        </div>
                    </div>
                    <div class="row" id="test">
                        <div class="col span-1-of-3 order-label x">
                            <label>Drop us a line*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <textarea name="message" placeholder="What would you like?" id="output" required></textarea>
                        </div>
                    </div>
                    <div class="row delivery-address">
                        <div class="col span-1-of-3 order-label x">
                            <label for="address">Delivery Address</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <textarea name="address" placeholder="Also let us know if you have a delivery day preference!" id="address"></textarea>
                        </div>
                    </div>
                    <div class="row recipientdeets">
                        <div class="col span-1-of-3 order-label x">
                            <label for="address">Recipient Details</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <textarea name="recipientdeets" placeholder="(If different from above!)" id="recipientdeets"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 x">
                            <label><br></label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input class="submit" type="submit" value="Send it!">
                        </div>
                    </div>
                </form> 
                
                <form method="post" action="mailer3.php" class="order-contact-form order-form-pickup">
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="name">Name*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="text" name="name2" id="name2" placeholder="Your name!" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="email">Email*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="email" name="email2" id="email2" placeholder="Please double check the address!" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 order-label x">
                            <label for="phone">Contact number*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input type="text" name="phone2" id="phone2" placeholder="Your contact number!" required>
                        </div>
                    </div>
                    <div class="row" id="test">
                        <div class="col span-1-of-3 order-label x">
                            <label>Drop us a line*</label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <textarea name="message2" placeholder="What would you like?" id="output2" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3 x">
                            <label><br></label>
                        </div>
                        <div class="col span-2-of-3 x">
                            <input class="submit2" type="submit" value="Send it!">
                        </div>
                    </div>
                </form> 

            </div>               
        </section>
        <div class="delivery-box row">
                <h3 class="break">DELIVERY</h3>
                
                <p>Due to the increased volume of orders at this time of year, we are now unable to offer delivery until the new year (January 2021). Sorry for any inconvenience!</p>
            </div>
            <div class="delivery-box row">
                <h3 class="break">Pick up</h3>
                <p>pick up is available by appointment, just shoot us a message and we can coordinate the best time that suits you.<br> <a class="a" href="map">1369 dundas street west.</a></p>
                
            </div>
            <div class="delivery-box row">
                <h3 class="break">PAYMENT</h3>
                <p>ORDERS MUST BE PAID FOR BEFORE if THEY ARE DELIVERED. </p>
                <p>PLEASE E-TRANSFER AMOUNTS TO<br> <a href="mailto:cocktails@projectgigglewater.com" class="a">COCKTAILS@PROJECTGIGGLEWATER.COM</a></p>
                <p>Please wait for the bill before sending payment</p>
            </div>
        
        
        

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
        <script src="order-script.js"></script>
        <script src="script-snow.js"></script>
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