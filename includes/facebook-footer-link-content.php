<?php

function wffl_add_footer($content)
{
    global $wffl_options;

    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a style="color: '.$wffl_options['link_color'].'" target="_blank" href="'.$wffl_options['facebook_url'].'">Facebook</a>';
    $footer_output .= '</div>';

    if ($wffl_options['show_in_feed']) {
        if (is_single() || is_home() && $wffl_options['enable']) {
            return $content . $footer_output;
        }
    } else {
        if (is_single()  && $wffl_options['enable']) {
            return $content . $footer_output;
        }
    }

    return $content;
}

add_action('the_content', 'wffl_add_footer');