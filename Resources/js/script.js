$(document).ready(function() {
    
    $('.stoutfire').click(function(){
    document.getElementById("output").value += "I am interested in the Mrs. Stoutfire!\n";
    });
    $('.violet').click(function(){
    document.getElementById("output").value += "I am interested in Violet Delights, Violet Ends!\n";
    });
    $('.cran').click(function(){
    document.getElementById("output").value += "I am interested in the Cran Me A River!\n";
    });
    $('.leaf').click(function(){
    document.getElementById("output").value += "I am interested in The Last Leaf!\n";
    });
    $('.2020').click(function(){
    document.getElementById("output").value += "I am interested in the 2020 Sabbatical!\n";
    });
    $('.casper').click(function(){
    document.getElementById("output").value += "I am interested in Casper and the Harvest Moon!\n";
    });
    $('.pastor').click(function(){
    document.getElementById("output").value += "I am interested in the Pastor Jack!\n";
    });
    $('.cherry').click(function(){
    document.getElementById("output").value += "I am interested in the Cherry Pandemic!\n";
    });
    $('.kentucky').click(function(){
    document.getElementById("output").value += "I am interested in the Kentucky Bumpkin!\n";
    });
    $('.coffee').click(function(){
    document.getElementById("output").value += "I am interested Gigglewater coffee!\n";
    });
    
    
    /* For the sticky navigastion */
    
    $('.js--section-features').waypoint(function(direction){
        if (direction == "down"){
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }}, {
      offset: '60px'
    }
    );
    
    /* Scroll on buttons */
    
    $('.js--scroll-to-plans').click(function(){
        $('html, body').animate({scrollTop: $('.js--section-plans').offset().top},1000);
    });
    
        $('.js--scroll-to-start').click(function(){
        $('html, body').animate({scrollTop: $('.js--section-features').offset().top},500);
    });
    
    /* Navigation scroll */

    
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
    
    /* Animations on scroll */
    
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animate__animated animate__fadeIn');
    }, {
        offset: '80%'
    });
    
    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animate__animated animate__fadeInUp');
    }, {
        offset: '70%'
    });
    
    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animate__animated animate__fadeIn');
    }, {
        offset: '80%'
    });
    
    $('.js--wp-4').waypoint(function(direction) {
        $('.js--wp-4').addClass('animate__animated animate__pulse');
    }, {
        offset: '60%'
    });
    
    /* Mobile navigation */
    
    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');
        
        nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round')
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round')
        }
        
        
    })
    
    $('.nav-btn').click(function() {
        $('.navi').addClass('animate__fadeOutUp');
        $('.whole-page').removeClass('animate__fadeIn');
        $('.whole-page').addClass('animate__fadeOut');
        
        
    })
    
    $('.buttons').click(function() {
        $('.navi').addClass('animate__fadeOutUp');
        $('.whole-page').removeClass('animate__fadeIn');
        $('.whole-page').addClass('animate__fadeOut');
        
        
    })
    
    /*---NEW-NAV------*/
    
    $('.new-icon-container').click(function() {
        var nav = $('.new-icon-container');
        var icon = $('.new-icon-container i');
        var navList = $('.new-nav-list');
        
        //nav.slideToggle(200);
        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
            navList.addClass('new-nav-list-open')
        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round')
            navList.removeClass('new-nav-list-open');
        }
        
    })
    
    $('.nav-btn').click(function() {
        $('.new-nav').addClass('animate__fadeOutUp');
        $('.whole-page').addClass('animate__fadeOut');
        
        
    })
    
    $('.buttons').click(function() {
        $('.new-nav').addClass('animate__fadeOutUp');
        $('.whole-page').addClass('animate__fadeOut');
        
        
    })
    
    /*----DELIVERY ESTIMATE-----*/
    
    
    
});