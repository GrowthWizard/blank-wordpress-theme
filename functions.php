<?php 

/*
* functions.php is only needed to enable WordPress Features we would like to use later for our REST API
*/

function blank_wordpress_theme_support() {

		 #Enables RSS Feed Links
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-logo' );
        add_theme_support(
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			)
		);
    }

add_action( 'after_setup_theme', 'blank_wordpress_theme_support' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );
