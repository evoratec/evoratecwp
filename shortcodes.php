<?php

// Shortcodes

// [line]
function line_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'sample' => false,
    ), $atts ) );
    if ($sample) {
        $html = '[line]';
        return '<span class="sc_sample"><h5>Shortcode:</h5>' . $html . '</span><br />';
    }
    else {
        return '<span class="devider"></span>';
    }
}
add_shortcode('line', 'line_shortcode');

// [column]
function column_shortcode( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'size' => '2x1',
        'last' => false,
        'title' => '',
        'sample' => false,
    ), $atts ) );
    $html = '<div style="margin-left:0px; float:left;" class="' . $size . '  ';
    if ($last) $html .= ' last';
    $html .= '">';
    if ($title) $html .= '<h3>' . $title . '</h3>';
    $html .= do_shortcode($content) . '</div>';

    return $html;

}
add_shortcode('column', 'column_shortcode');

?>