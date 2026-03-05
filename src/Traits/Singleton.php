<?php

namespace Kkorsakov\MaszPlugin\Traits;

trait Singleton {
    private static $instance;

    final private function __clone() {
    }

    final private function __construct() {
    }

    public static function getInstance() {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}