


//スムーススクロール 
  jQuery(function() {
    jQuery('a[href^="#"]').click(function() {
      var speed = 400; 
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top-60;
      jQuery('body, html').animate({scrollTop:position}, speed, 'swing');
      return false;
    });
  });



//イベント表示切り替え

jQuery(function(){
  jQuery('.secList').on('click',function(){
    jQuery('.ei-main-sec').not(jQuery('.'+jQuery(this).attr('id'))).hide();
    jQuery('.'+jQuery(this).attr('id')).show();
  });
});


jQuery('#sec1').on('click', function() {
  jQuery(this).addClass('bgc-orange');
  jQuery('#sec2').removeClass('bgc-orange');
  jQuery('#sec3').removeClass('bgc-orange');
});
        

jQuery('#sec2').on('click', function() {
  jQuery(this).addClass('bgc-orange');
  jQuery('#sec1').removeClass('bgc-orange');
  jQuery('#sec3').removeClass('bgc-orange');
});

jQuery('#sec3').on('click', function() {
  jQuery(this).addClass('bgc-orange');
  jQuery('#sec1').removeClass('bgc-orange');
  jQuery('#sec2').removeClass('bgc-orange');
});



//slick
$('.fi-items').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 9000,
  arrows: false,
  cssEase: 'linear',
responsive: [{
  breakpoint: 768,
  settings: {
    slidesToShow: 1
  }
}]
});



