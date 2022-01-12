<?php
/* 
Plugin Name: Change Admin Bar Color
Description: Changes color of admin bar using js color picker
Version: 1.1
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

// Houses the change_admin_bar_color function
include( 'includes/init.php' );

// Hooks

// Runs function to change color of admin bar on front end
add_action('wp_head', 'change_admin_bar_color');
// Runs function to change color of admin bar on back end
add_action('admin_head', 'change_admin_bar_color');