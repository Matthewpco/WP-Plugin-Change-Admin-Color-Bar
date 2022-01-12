<?php
/* 
Plugin Name: Change Admin Bar Color
Description: Changes color of admin bar using js color picker
Version: 1.2
Author: Matthew Payne
Author URI: https://www.wpwebdevelopment.com
Text Domain: change-admin-bar-color
*/ 

// Exit if accessed directly
if( !function_exists( 'add_action' ) ){
        echo "Hi there, i am just a plugin, there is nothing you can do by accessing me directly.";
        exit;
    };

// Includes

include( 'includes/init.php' );
include( 'includes/theme-customizer.php' );
include( 'includes/admin-bar-color.php' );

// Hooks

// Change admin bar color when viewing from the front end
add_action('wp_head', 'change_admin_bar_color');
// Change admin bar color when viewing from the back end
add_action('admin_head', 'change_admin_bar_color');
// Add settings to customizer and handles controller actions
add_action( 'customize_register', 'cabc_customize_register' );