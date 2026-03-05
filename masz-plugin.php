<?php

/*
 * Plugin Name: masz-plugin
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . "/vendor/autoload.php";

use Kkorsakov\MaszPlugin\Core;

register_activation_hook(__FILE__, [Core::class, 'activate']);
register_deactivation_hook(__FILE__, [Core::class, 'deactivate']);

add_action('plugins_loaded', function() {
    Core::init();
});
