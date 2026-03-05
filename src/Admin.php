<?php

namespace Kkorsakov\MaszPlugin;

use Kkorsakov\MaszPlugin\Traits\Singleton;

class Admin {

    use Singleton;

    public static function init(){
        do_action('qm/debug', var_export(self::getInstance(), true));
    }

}