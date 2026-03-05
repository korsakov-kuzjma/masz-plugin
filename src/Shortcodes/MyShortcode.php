<?php

namespace Kkorsakov\MaszPlugin\Shortcodes;

use Kkorsakov\MaszPlugin\Traits\ShortcodeTrait;

class MyShortcode {

    use ShortcodeTrait;

    public static function register() {
        add_shortcode('my_shortcode', [new self(), 'render']);
    }

    public function render($atts, $content = null) {
        $atts = $this->getAtts([
            'text' => 'default text'
        ], $atts);

        return '<div class="my-shortcode">' . esc_html($atts['text']) . '</div>';
    }

}
