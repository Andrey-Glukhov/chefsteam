(function ($) {
 
  // slider  init
  $(".multiple-items").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
  });

  //<< Scroll animations
  if ($(".contact_form_wrapper").length) {
    var controller = new ScrollMagic.Controller();
    var scene = new ScrollMagic.Scene({
      triggerElement: ".contact_form_wrapper",
      duration: "100%",
      triggerHook: 0.8,
    })
      .addIndicators()
      .setTween(gsap.to(".side_pic.pic_left_2", { top: "-20vh" }))
      .addTo(controller);

    scene = new ScrollMagic.Scene({
      triggerElement: ".contact_form_wrapper",
      duration: "100%",
      triggerHook: 0.8,
    })
      .addIndicators()
      .setTween(gsap.to(".side_pic.pic_left_1", { top: "-40vh" }))
      .addTo(controller);
    scene = new ScrollMagic.Scene({
      triggerElement: ".contact_form_wrapper",
      duration: "100%",
      triggerHook: 0.8,
    })
      .addIndicators()
      .setTween(gsap.to(".side_pic.pic_right_1", { top: "-37vh" }))
      .addTo(controller);
    $('.card card-header button.btn').on('click', function () {
      $(this).children
    }); 
    function toggleIcon(e) {
      console.log(e.target);
      $(e.target)
          .prev('.card-header')
          .find('.more_less')
          .toggleClass(' fa-minus fa-plus');
  }
  $('#accordion').on('hidden.bs.collapse', toggleIcon);
  $('#accordion').on('shown.bs.collapse', toggleIcon); 
  }
  $('.open_pic_right').each(function () {
    scene = new ScrollMagic.Scene({
      triggerElement: ".slider_wrapper",
      duration: "100%",
      triggerHook: 0.7,
      offset: "200px"
    })
      .addIndicators()
      .setTween(gsap.to(this, { right: "-100%" }))
      .addTo(controller);
  });
  $('.open_pic_left').each(function () {
    scene = new ScrollMagic.Scene({
      triggerElement: ".opener_background",
      duration: "100%",
      triggerHook: 0.1,
      offset: "200px"
    })
      .addIndicators()
      .setTween(gsap.to(this, { left: "-100%" }))
      .addTo(controller);
  });
  $(window).on('resize', function() {
    
  });
  //>>
})(jQuery);
