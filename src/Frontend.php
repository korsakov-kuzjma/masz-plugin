<?php

namespace Kkorsakov\MaszPlugin;

use Kkorsakov\MaszPlugin\Traits\Singleton;

class Frontend {

    use Singleton;

    public static function init(){
        Shortcodes::init();
    }

}