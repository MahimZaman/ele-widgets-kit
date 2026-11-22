<?php

namespace Ele\WidgetsKit\Elementor;

use Ele\WidgetsKit\Admin\Settings;

class Widgets_Manager
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
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
    }

    public function register_widgets($widgets_manager)
    {

        $enabled = Settings::get_enabled_widgets();

        // Example Widget
        if (in_array('example', $enabled, true)) {
            require_once EWK_PATH . 'includes/Widgets/Example_Widget.php';
            $widgets_manager->register(
                new \Ele\WidgetsKit\Widgets\Example_Widget()
            );
        }

        /**
         * Future widgets follow the same pattern
         */
    }
}
