<?php

namespace Ele\WidgetsKit\Widgets;

use Elementor\Widget_Base;

abstract class Base_Widget extends Widget_Base
{

    public function get_categories()
    {
        return ['ele-widgets-kit'];
    }

    /**
     * Default: no CSS loaded
     */
    public function get_style_depends()
    {
        return [];
    }

    /**
     * Default: no JS loaded
     */
    public function get_script_depends()
    {
        return [];
    }
}
