<?php

namespace Ele\WidgetsKit\Widgets;

use Elementor\Controls_Manager;

class Example_Widget extends Base_Widget
{

    public function get_name()
    {
        return 'ewk-example';
    }

    public function get_title()
    {
        return __('Example Widget', 'ele-widgets-kit');
    }

    public function get_icon()
    {
        return 'eicon-star';
    }

    /**
     * Load CSS only if widget is used
     */
    public function get_style_depends()
    {
        return ['ewk-example'];
    }

    /**
     * Load JS only if widget is used
     */
    public function get_script_depends()
    {
        return ['ewk-example'];
    }

    // register_controls() and render()
}
