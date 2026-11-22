<?php

namespace Ele\WidgetsKit;

class Autoloader {

    public static function register() {
        spl_autoload_register( [ __CLASS__, 'autoload' ] );
    }

    private static function autoload( $class ) {

        if ( strpos( $class, __NAMESPACE__ ) !== 0 ) {
            return;
        }

        $path = EWK_PATH . 'includes/' .
            str_replace(
                [ __NAMESPACE__ . '\\', '\\' ],
                [ '', '/' ],
                $class
            ) . '.php';

        if ( file_exists( $path ) ) {
            require_once $path;
        }
    }
}
