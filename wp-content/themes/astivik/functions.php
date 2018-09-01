<?php
//*****************************************************css y js**********************************************************************
function adp_load_styles_scripts() {
  //CSS
  wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');// para registrar el css
  wp_enqueue_style('theme_style');

  //JS

  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'select2', get_template_directory_uri() . '/assets/js/select2.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array ( 'jquery' ), 1.1, true);
  
  

}
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');
//agregar imagenes en los post

add_theme_support( 'post-thumbnails' );
add_image_size ('category-thumb');

add_filter('frm_field_classes', 'add_input_class', 10, 2);
function add_input_class($classes, $field){
  $classes .= ' form-control';
  return $classes;
}
add_action('frm_submit_button_class', 'add_submit_class', 10, 2 );
function add_submit_class( $classes, $form ){
  $classes[] = 'btn  cita-boton';
  return $classes;
}



add_image_size( '255x200', 255, 200, true );
add_image_size( '350x400', 350, 400, true );
add_image_size( '480x200', 480, 200, true );
add_image_size( '540x400', 540, 400, true );
add_image_size( '692x330', 692, 330, true );
add_image_size( '767x463', 767, 463, true );
add_image_size( '991x1100', 991, 1100, true );


function check_valid_image_size( $file ) {
  $allowed_mimetypes = array('image/gif', 'image/jpeg', 'image/png', 'image/bmp');

  if (!in_array($file['type'], $allowed_mimetypes)){
    return $file;
  }

  $image = getimagesize($file['tmp_name']);

  $maximum = array(
    'width' => '1920',
    'height' => '1080'
  );

  $image_width = $image[0];
  $image_height = $image[1];

  $too_large = "Image dimensions are too large. Maximum size is {$maximum['width']} by {$maximum['height']} pixels. Uploaded image is $image_width by $image_height pixels.";

  if ( $image_width > $maximum['width'] || $image_height > $maximum['height'] ) {
        //add in the field 'error' of the $file array the message
    $file['error'] = $too_large;
    return $file;
  }else {
    return $file;
  }
}
add_filter('wp_handle_upload_prefilter', 'check_valid_image_size');



function featured_image_required($hook) {
 if ( 'post.php' != $hook && 'post-new.php' != $hook ) {
   return;
 }
 
 wp_enqueue_script( 'featured-image-required', get_theme_file_uri('assets/js/img.js') );
}
add_action( 'admin_enqueue_scripts', 'featured_image_required' );
