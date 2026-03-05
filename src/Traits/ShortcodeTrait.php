<?php

namespace Kkorsakov\MaszPlugin\Traits;

trait ShortcodeTrait {

    protected function getAtts($defaults, $atts) {
        return shortcode_atts($defaults, $atts);
    }

    protected function enqueueScripts($handle) {
        wp_enqueue_script($handle);
    }

    protected function enqueueStyles($handle) {
        wp_enqueue_style($handle);
    }

    protected function log($message) {
        if (defined('WP_DEBUG') && WP_DEBUG === true) {
            error_log('[Shortcode] ' . $message);
        }
    }

}
