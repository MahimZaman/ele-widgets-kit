<?php

namespace Ele\WidgetsKit\Admin;

class Settings {

    const OPTION_KEY = 'ewk_enabled_widgets';

    public static function get_enabled_widgets() {
        return get_option( self::OPTION_KEY, [] );
    }

    public static function save( $widgets ) {
        update_option( self::OPTION_KEY, array_map( 'sanitize_text_field', $widgets ) );
    }
}
