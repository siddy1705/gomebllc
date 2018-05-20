<?php

add_action( 'wp_enqueue_scripts', 'enqueue_stylesheets' );

function enqueue_stylesheets() {
	
    // Default Stylesheets Load
    wp_enqueue_style( 'gomeb-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'gomeb-easy-responsive-tabs', get_template_directory_uri() . '/assets/css/easy-responsive-tabs.css' );
    wp_enqueue_style( 'gomeb-flexslider', get_template_directory_uri() . '/assets/css/flexslider.css' );
    wp_enqueue_style( 'gomeb-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_enqueue_style( 'gomeb-jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css' );
    wp_enqueue_style( 'gomeb-lightbox', get_template_directory_uri() . '/assets/css/lightbox.css' );
    wp_enqueue_style( 'gomeb-default-stylesheet', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'gomeb-style', get_stylesheet_uri() );
    wp_enqueue_style( 'gomeb-font-Cinzel', 'https://fonts.googleapis.com/css?family=Cinzel:400,700,900' );
    wp_enqueue_style( 'gomeb-font-sans-narrow', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' );

    // Default Script Load
    wp_enqueue_script( 'gomeb-lightbox-js', get_template_directory_uri() . '/assets/js/lightbox-plus-jquery.min.js' );
    wp_enqueue_script( 'gomeb-jquery-js', get_template_directory_uri() . '/assets/js/jquery-2.1.4.min.js' );
    wp_enqueue_script( 'gomeb-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js' );
    wp_enqueue_script( 'gomeb-easing-js', get_template_directory_uri() . '/assets/js/easing.js' );
    wp_enqueue_script( 'gomeb-easy-responsive-tabs-js', get_template_directory_uri() . '/assets/js/easy-responsive-tabs.js' );
    wp_enqueue_script( 'gomeb-jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js' );
	wp_enqueue_script( 'gomeb-flexisel-js', get_template_directory_uri() . '/assets/js/jquery.flexisel.js' );
	wp_enqueue_script( 'gomeb-flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider.js' );
    
    wp_enqueue_script( 'gomeb-move-top-js', get_template_directory_uri() . '/assets/js/move-top.js' );
    wp_enqueue_script( 'gomeb-responsiveslides-js', get_template_directory_uri() . '/assets/js/responsiveslides.min.js' );
    wp_enqueue_script( 'gomeb-scrolling-nav-js', get_template_directory_uri() . '/assets/js/scrolling-nav.js' );
    wp_enqueue_script( 'gomeb-SmoothScroll-js', get_template_directory_uri() . '/assets/js/SmoothScroll.min.js' );
}


add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'gomeb' ) );
}

function gomeb_theme_customizer( $wp_customize ) {
    
$wp_customize->add_section( 'gomeb_logo_section' , array(
    'title'       => __( 'Logo', 'gomeb' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header',
) );

$wp_customize->add_setting( 'gomeb_logo' );


$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'gomeb_logo', array(
    'label'    => __( 'Logo', 'gomeb' ),
    'section'  => 'gomeb_logo_section',
    'settings' => 'gomeb_logo',
) ) );


}
add_action( 'customize_register', 'gomeb_theme_customizer' );

add_theme_support( 'post-thumbnails' ); 


if (function_exists("register_sidebar")) {
register_sidebar();
}


function smallenvelop_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Social Icons', 'smallenvelop' ),
        'id' => 'social-icons',
    ) );
}
add_action( 'widgets_init', 'smallenvelop_widgets_init' );


// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );