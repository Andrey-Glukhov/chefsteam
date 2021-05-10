(function($) {
var controller = new ScrollMagic.Controller();
// slider  init
 $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false
  });

  //<< Scroll animations
  var scene = new ScrollMagic.Scene({
    triggerElement: '.contact_form_wrapper',
    duration: '100%',
    triggerHook: 0.8
})
.addIndicators()
.setTween(gsap.to('.side_pic.pic_left_2',{top: '-3vh'}))
.addTo(controller);
  
scene = new ScrollMagic.Scene({
  triggerElement: '.contact_form_wrapper',
  duration: '100%',
  triggerHook: 0.8
})
.addIndicators()
.setTween(gsap.to('.side_pic.pic_left_1',{top: '-40vh'}))
.addTo(controller);
scene = new ScrollMagic.Scene({
  triggerElement: '.contact_form_wrapper',
  duration: '100%',
  triggerHook: 0.8
})
.addIndicators()
.setTween(gsap.to('.side_pic.pic_right_1',{top: '-37vh'}))
.addTo(controller);
//>>
}(jQuery) );
