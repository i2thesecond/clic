jQuery(document).ready(function($) {

    $("#property-gallery").slick({
      dots: true,
      mobileFirst: true,
      nextArrow: '<span class="nextArrowBtn arrowBtnStyle icon-arrow-right"></span>',
      prevArrow: '<span class="prevArrowBtn arrowBtnStyle icon-arrow-left"></span>',
    });
    
    /* $("#property-gallery").on('setPosition', function (event, slick) {
        slick.$slides.css('height', slick.$slideTrack.height() + 'px');
    }); */
    
});
