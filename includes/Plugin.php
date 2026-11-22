<?php

namespace Ele\WidgetsKit;

use Ele\WidgetsKit\Elementor\Init;
use Ele\WidgetsKit\Admin\Menu;
use Ele\WidgetsKit\Core\Assets;

final class Plugin
{

    private static $instance;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function init()
    {

        load_plugin_textdomain(
            'ele-widgets-kit',
            false,
            dirname(plugin_basename(EWK_PATH)) . '/languages'
        );

        // Frontend
        Init::instance();
        Assets::init();

        if (is_admin()) {
            Menu::init();
        }
    }
}
