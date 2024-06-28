<?php

/*
 * Plugin Name:       Udemy Plus
 * Plugin URI:        https://udemy.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            Cyril
 * Author URI:        https://udemy.com
 * Text Domain:       udemy-plus
 * Domain Path:       /languages
 */

if (!function_exists("add_action")) {
    echo "Seems like you took a misstep. Kindly go back from where you came.";
    exit;
}

// Setup
define("UP_PLUGIN_DIRECTORY", plugin_dir_path(__FILE__));

//Includes
include (UP_PLUGIN_DIRECTORY . "includes/register-blocks.php");
include (UP_PLUGIN_DIRECTORY . "includes/blocks/search-form.php");
include (UP_PLUGIN_DIRECTORY . "includes/blocks/page-header.php");

//Hooks
add_action("init", "up_register_blocks");