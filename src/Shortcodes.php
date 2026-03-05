<?php

namespace Kkorsakov\MaszPlugin;

use Kkorsakov\MaszPlugin\Traits\Singleton;

class Shortcodes {

    use Singleton;

    public static function init() {
        self::getInstance();
        self::scanAndRegister();
    }

    private static function scanAndRegister() {
        $dir = __DIR__ . '/Shortcodes';

        if (!is_dir($dir)) {
            return;
        }

        foreach (glob($dir . '/*.php') as $file) {
            require_once $file;
            $class = __NAMESPACE__ . '\\Shortcodes\\' . basename($file, '.php');

            if (class_exists($class) && method_exists($class, 'register')) {
                $class::register();
            }
        }
    }

}
