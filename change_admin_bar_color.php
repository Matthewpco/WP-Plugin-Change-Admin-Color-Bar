<?php
/* 
Plugin Name: Change Admin Bar Color
Description: Changes color of admin bar using js color picker
Version: 1.0
Author: Matthew Payne
Author URI: https://www.wpwebdevelopment.com
Text Domain: change-admin-bar-color
*/ 

// Exit if accessed directly
if( !function_exists( 'add_action' ) ){
        echo "Hi there, i am just a plugin, there is nothing you can do by accessing me directly.";
        exit;
    };

// Hooks

// Runs function to change color of admin bar on front end
add_action('wp_head', 'change_admin_bar_color');
// Runs function to change color of admin bar on back end
add_action('admin_head', 'change_admin_bar_color');


// Functions

// Selects the admin bar id and adds new color values
function change_admin_bar_color() { ?>
    <style>
        #wpadminbar {
            background: #000000; /* Add your desired color value here to change admin bar */
        }
    </style>
    <?php
    }