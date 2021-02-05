<?php 

function roopesh_setup_theme() {


add_theme_support('title-tag');

add_theme_support('post-thumbnails');
add_theme_support('post-titles');
add_theme_support('custom-logo');

register_nav_menu('header',__('Main Menu','roopesh'));


}





?>