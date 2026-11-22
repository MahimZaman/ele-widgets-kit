<?php

namespace Ele\WidgetsKit\Core;

defined('ABSPATH') || exit;
class Assets
{

    public static function init()
    {
        add_action('wp_enqueue_scripts', [__CLASS__, 'register']);
    }

    public static function register()
    {

        wp_register_style(
            'ewk-example',
            EWK_URL . 'assets/css/example.css',
            [],
            EWK_VERSION
        );

        wp_register_script(
            'ewk-example',
            EWK_URL . 'assets/js/example.js',
            ['jquery'],
            EWK_VERSION,
            true
        );
    }
}
