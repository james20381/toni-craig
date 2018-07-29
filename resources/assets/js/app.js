
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

// Smooth Scroll
$(document).ready(function(){
    // Add scrollspy to <body>
    $('body').scrollspy({target: ".main-nav", offset: 50});   
  
    // Add smooth scrolling on all links inside the navbar
    $(".scroller a").on('click', function(event) {
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
      }  // End if
    });
  });

  // Fading Sections
  $(document).ready(function(){
    $(window).scroll(function(){

      if ($(this).scrollTop() > 150){
        $(".threered").css({"opacity" : "0"});
        // Above 0, white fades out and turns to blue
      }
      else {
        $(".threered").css({"opacity" : "1"});
        // Below 0, white is full opaque
      }
    });
  
    $(window).scroll(function(){

      if ($(this).scrollTop() > 800){
        $(".twoblue").css({"opacity" : "0"});
        // Above 800, blue fades out and turns yellow
      }
      else {
        $(".twoblue").css({"opacity" : "1"});
        
      }
    });

    $(window).scroll(function(){

      if ($(this).scrollTop() > 1200){
        $(".fourblack").css({"opacity" : "1"});
        // $(".fourblack").css({"z-index": "50000"});
        // Above 1200, yellow fades out and turns blue
      }
      else {
        $(".fourblack").css({"opacity" : "0"});
        // $(".fourblack").css({"z-index": "0"});
      }
    });

    
   

  // Card Animations
  $(window).scroll(function(){

    if ($(this).scrollTop() > 100){

      $(".img-reveal").css({"z-index": "30000"});
      $(".img-reveal2").css({"z-index": "30000"});
      $('.img-reveal').addClass("card-move");
      $('.img-reveal2').addClass("card-move2");
      
      // $('.img-reveal3').addClass("card-move3");
        
    }

    else {
     
      $(".img-reveal").css({"z-index": "0"});
      $(".img-reveal2").css({"z-index": "0"});
      $('.img-reveal').removeClass("card-move");
      $('.img-reveal2').removeClass("card-move2");
      // $('.img-reveal3').removeClass("card-move3");
    }
  });

  $(window).scroll(function(){
  if ($(this).scrollTop() > 800){
    $('.img-reveal3').addClass("card-move3");
    $(".img-reveal3").css({"z-index": "30000"});
    $('.img-reveal4').addClass("card-move4");
    $('.img-reveal5').addClass("card-move5");
    $(".img-reveal5").css({"z-index": "30000"});
  }

  else {
    $('.img-reveal3').removeClass("card-move3");
    $(".img-reveal3").css({"z-index": "0"});
    $('.img-reveal4').removeClass("card-move4");
    $('.img-reveal5').removeClass("card-move5");
    $(".img-reveal5").css({"z-index": "0"});
  }
});
});

