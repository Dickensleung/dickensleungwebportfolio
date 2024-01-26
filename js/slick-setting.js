/**
 * File slick-settings.js
 *
 * Handles slick slider 
 */

jQuery(document).ready(function ($) {
    // Enable Slick Slider on elements with the class 'slider'
    $(".custom-slider").slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000, // speed is in milliseconds
      speed: 500,
      arrows: false,
      fade: true,
      cssEase: 'linear',
      useTransform: false
      
    });
});