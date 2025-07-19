Aparat Video Embed Shortcode for WordPress
A simple WordPress shortcode to embed videos from Aparat.

🇮🇷 فارسی (Persian)
شورت‌کد آپارات برای وردپرس
این یک شورت‌کد ساده برای وردپرس است که به شما امکان می‌دهد ویدیوهای آپارات را به راحتی در نوشته‌ها و برگه‌های خود قرار دهید.

نصب
کد زیر را به فایل functions.php قالب وردپرس خود یا در یک افزونه سفارشی اضافه کنید.

PHP

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
نحوه استفاده
برای استفاده از این شورت‌کد، آن را در ویرایشگر وردپرس خود قرار دهید.

استفاده ساده
مقدار id ویدیو را جایگزین VIDEO_ID کنید.

Code snippet

[aparat id="VIDEO_ID"]
مثال:

Code snippet

[aparat id="vJmKb"]
استفاده پیشرفته
شما می‌توانید عرض، ارتفاع و استایل CSS را نیز مشخص کنید.

Code snippet

[aparat id="VIDEO_ID" width="800" height="600" style="border: 1px solid #ccc;"]
🇬🇧 English
Aparat Shortcode for WordPress
This is a simple WordPress shortcode that allows you to easily embed Aparat videos in your posts and pages.

Installation
Add the following code to your WordPress theme's functions.php file or a custom plugin.

PHP

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
Usage
To use the shortcode, place it in your WordPress editor.

Basic Usage
Replace VIDEO_ID with your video's ID.

Code snippet

[aparat id="VIDEO_ID"]
Example:

Code snippet

[aparat id="vJmKb"]
Advanced Usage
You can also specify the width, height, and custom CSS styles.

Code snippet

[aparat id="VIDEO_ID" width="800" height="600" style="border: 1px solid #ccc;"]
🇦🇪 العربية (Arabic)
كود مختصر (Shortcode) لعرض فيديوهات Aparat في ووردبريس
هذا كود مختصر بسيط لووردبريس يسمح لك بتضمين مقاطع فيديو من منصة Aparat بسهولة في مقالاتك وصفحاتك.

التثبيت
أضف الكود التالي إلى ملف functions.php الخاص بقالب ووردبريس لديك أو في إضافة مخصصة.

PHP

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
طريقة الاستخدام
لاستخدام الكود المختصر، ضعه في محرر ووردبريس الخاص بك.

الاستخدام الأساسي
استبدل VIDEO_ID بمعرّف الفيديو الخاص بك.

Code snippet

[aparat id="VIDEO_ID"]
مثال:

Code snippet

[aparat id="vJmKb"]
الاستخدام المتقدم
يمكنك أيضًا تحديد العرض والارتفاع وأنماط CSS المخصصة.

Code snippet

[aparat id="VIDEO_ID" width="800" height="600" style="border: 1px solid #ccc;"]
