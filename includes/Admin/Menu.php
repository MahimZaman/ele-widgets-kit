<?php

namespace Ele\WidgetsKit\Admin;

class Menu {

    public static function init() {
        add_action( 'admin_menu', [ __CLASS__, 'register_menu' ] );
    }

    public static function register_menu() {
        add_submenu_page(
            'options-general.php',
            __( 'Ele Widgets Kit', 'ele-widgets-kit' ),
            __( 'Ele Widgets Kit', 'ele-widgets-kit' ),
            'manage_options',
            'ele-widgets-kit',
            [ __CLASS__, 'render_page' ]
        );
    }

    public static function render_page() {
        require EWK_PATH . 'includes/Admin/views/widgets-toggle.php';
    }
}
