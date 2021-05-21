<?php
function ch_team_script_enqueue(){
//css
	wp_enqueue_style( 'ch_team-stylesheet', get_template_directory_uri() . '/css/ch_team.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'slick-stylesheet', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all' );
  //js
  // unregister jQuery
  wp_deregister_script('jquery-core');
  wp_deregister_script('jquery');

  // register
  wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, true );
  wp_register_script( 'jquery', false, array('jquery-core'), null, true );

  // enqueue
  wp_enqueue_script( 'jquery' );
  // Bootstrap
  wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), null, true );
  // ScrollMagic
  wp_enqueue_script( 'scroll-magic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js', array('jquery'), null, true );
  wp_enqueue_script( 'add-indicators-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery', 'scroll-magic-js'), null, true );
  // GSAP
  wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.0/gsap.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'gsap-animation-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array('jquery', 'gsap-js'), null, true );
  // slick slider
  wp_enqueue_script( 'slickslider-js', get_template_directory_uri() .'/js/slick.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'ch_team-js', get_template_directory_uri() . '/js/ch_team.js', array('jquery', 'scroll-magic-js', 'gsap-js', 'bootstrap-js', 'slickslider-js'), null, true );

}
add_action( 'wp_enqueue_scripts', 'ch_team_script_enqueue' );

function ch_team_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
}

function filter_wpcf7_response_output( $output, $class, $content, $out_obj, $status ){
  // Replace Success CSS Class
  //$output = str_replace( ' wpcf7-mail-sent-ok', ' alert alert-success', $output );
  error_log('cf7--out--->' . print_r($output, true));
  error_log('cf7--cl--->' . print_r($class, true));
  error_log('cf7--co--->' . print_r($content, true));
  error_log('cf7--obj--->' . print_r($out_obj, true));
  error_log('cf7--st--->' . print_r($status, true));
  return $output; 
}
add_filter( 'wpcf7_form_response_output', 'filter_wpcf7_response_output', 10, 5 );

?>
