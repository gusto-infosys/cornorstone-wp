<?php

function roopesh_style(){
$ver= ROOPESH_DEV_MODE ? time() : false;


	//css

wp_register_style('bootstrap_css', get_template_directory_uri() . '/assets/css/node_modules/bootstrap/dist/css/bootstrap.min.css',[],$ver);
wp_register_style('bootstrap-icons', get_template_directory_uri() . '/assets/css/node_modules/bootstrap-icons/font/bootstrap-icons.css', [],$ver);
wp_register_style('owl.carousel_css', get_template_directory_uri() . '/assets/css/owlcarousel/dist/assets/owl.carousel.min.css', [],$ver);
wp_register_style('owlcarousel_css1', get_template_directory_uri() . '/assets/css/owlcarousel/dist/assets/owl.theme.default.min.css',[],$ver);
wp_register_style('main_css', get_template_directory_uri() . '/assets/css/main.css',[],$ver);
wp_register_style('style_css', get_template_directory_uri() . '/assets/css/style.css',[],$ver);



wp_enqueue_style('bootstrap_css');
wp_enqueue_style('bootstrap-icons');
wp_enqueue_style('owl.carousel_css');
wp_enqueue_style('owlcarousel_css1');
wp_enqueue_style('main_css');
wp_enqueue_style('style_css');





//<script src="node_modules\bootstrap\dist\js\bootstrap.min.js"></script> 









//fonts

wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100&family=Roboto:wght@300;400;500;700;900&display=swap');
wp_enqueue_style('fonts');



//Js

// wp_register_script('bootstrap_js', get_template_directory_uri() . '/assets/css/node_modules/bootstrap/dist/js/bootstrap.min.js',array('jquery'),false , true);
wp_register_script('node_modules_js', get_template_directory_uri() . '/assets/css/node_modules/jquery/dist/jquery.min.js',array('jquery'),false , true);
wp_register_script('owlcarousel_js', get_template_directory_uri() . '/assets/css/owlcarousel/dist/owl.carousel.min.js',array('jquery'),false , true);

wp_register_script('main_js', get_template_directory_uri() . '/assets/js/main.js',array('jquery'),false , true);

// wp_enqueue_script('jquery');
// wp_enqueue_script('bootstrap_js');
wp_enqueue_script('node_modules_js');

wp_enqueue_script('owlcarousel_js');
wp_enqueue_script('main_js');

}


add_action('wp_enqueue_scripts', 'roopesh_style');












?>


