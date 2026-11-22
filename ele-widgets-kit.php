<?php
/**
 * Plugin Name: Ele Widgets Kit
 * Plugin URI: https://github.com/MahimZaman/ele-widgets-kit
 * Description: A lightweight and scalable widgets kit for Ele page builder users.
 * Version:     1.0.0
 * Author: Mahim Zaman (Condixia)
 * Author URI: https://condixia.com
 * Text Domain: ele-widgets-kit
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'EWK_PATH', plugin_dir_path( __FILE__ ) );
define( 'EWK_URL', plugin_dir_url( __FILE__ ) );
define( 'EWK_VERSION', '1.0.0' );

require_once EWK_PATH . 'includes/Autoloader.php';

Ele\WidgetsKit\Autoloader::register();
Ele\WidgetsKit\Plugin::instance();
