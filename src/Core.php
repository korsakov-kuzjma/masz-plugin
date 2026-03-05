<?php

namespace Kkorsakov\MaszPlugin;

use Kkorsakov\MaszPlugin\Traits\Singleton;

class Core {

    use Singleton;    

    public static function init() {
        do_action('qm/debug', var_export(self::getInstance(), true));
        if (is_admin()) {
            Admin::init();
        } else {
            Frontend::init();
        }
    }

    public static function activate() {
        flush_rewrite_rules();
    }

    public static function deactivate() {
        flush_rewrite_rules();
    }


}