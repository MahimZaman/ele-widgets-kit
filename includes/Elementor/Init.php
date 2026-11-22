<?php

namespace Ele\WidgetsKit\Elementor;

class Init
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
        add_action('elementor/init', [$this, 'init_elementor']);
        add_action('elementor/elements/categories_registered', [$this, 'register_category']);
    }

    public function init_elementor()
    {
        Widgets_Manager::instance();
    }

    public function register_category($elements_manager)
    {

        $elements_manager->add_category(
            'ele-widgets-kit',
            [
                'title' => __('Ele Widgets Kit', 'ele-widgets-kit'),
                'icon'  => 'eicon-plug',
            ]
        );
    }
}
