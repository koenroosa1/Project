<?php
if (is_user_logged_in()) {
    show_admin_bar(true);
}#end if

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );

function my_function_admin_bar() {
    return false;
}

add_filter('show_admin_bar', 'my_function_admin_bar');
?>

