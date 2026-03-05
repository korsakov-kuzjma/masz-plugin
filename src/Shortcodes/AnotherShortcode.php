<?php

namespace Kkorsakov\MaszPlugin\Shortcodes;

use Kkorsakov\MaszPlugin\Traits\ShortcodeTrait;

class AnotherShortcode {

    use ShortcodeTrait;

    public static function register() {
        add_shortcode('another_shortcode', [new self(), 'render']);
    }

    public function render($atts, $content = null) {
        $atts = $this->getAtts([
            'title' => 'Hello',
            'count' => 5
        ], $atts);

        $output = '<div class="another-shortcode">';
        $output .= '<h3>' . esc_html($atts['title']) . '</h3>';
        $output .= '<ul>';
        for ($i = 1; $i <= (int) $atts['count']; $i++) {
            $output .= '<li>Item ' . $i . '</li>';
        }
        $output .= '</ul>';
        $output .= '</div>';

        return $output;
    }

}
