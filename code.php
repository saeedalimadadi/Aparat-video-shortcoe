function aparat_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id'     => '',
        'width'  => 600,
        'height' => 450,
        'style'  => 'margin: 10px auto; text-align: center;',
    ), $atts, 'aparat');

    // Check for ID
    if (empty($atts['id'])) return '';

    // Sanitize values
    $id     = esc_attr($atts['id']);
    $width  = intval($atts['width']);
    $height = intval($atts['height']);
    $style  = esc_attr($atts['style']);

    $embed_url = "https://www.aparat.com/video/video/embed/videohash/{$id}/vt/frame";

    return "<div style='{$style}'>
        <iframe src='{$embed_url}' width='{$width}' height='{$height}' allowfullscreen></iframe>
    </div>";
}
add_shortcode('aparat', 'aparat_shortcode');
