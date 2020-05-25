<?php
/*------------------------------------*\
    IMAGE
\*------------------------------------*/

//
// IMAGE SIZES
// ----------------------------------------------------

// huge
add_image_size('huge', 2400, 4800, false);
// large
update_option('large_size_w', 1200);
update_option('large_size_h', 2400);
update_option('large_crop', 0);
// medium
update_option('medium_size_w', 600);
update_option('medium_size_h', 1200);
update_option('medium_crop', 0);
// small
add_image_size('small', 400, 800, false);
// thumbnail
update_option('thumbnail_size_w', 150);
update_option('thumbnail_size_h', 150);
update_option('thumbnail_crop', 1);

// remove stupid medium_large size
update_option('medium_large_size_w', 0);
update_option('medium_large_size_h', 0);

//
//
// BREAKPONTS RESPONSIVE IMAGE
function responsive_img($image, $options = array())
{

    $options = array_merge(array(
        'class' => "",
        'min-width' => array(),
        'max-width' => array(),
        'sizes' => "100vw",
        'alt' => "",
    ), $options);

    if (!empty($options['min-width']) || !empty($options['max-width'])) {
        $sizes = array();
        if (!empty($options['min-width'])) {
            foreach ($options['min-width'] as $breakpoint => $size) {
                $sizes[] = '(min-width: ' . $breakpoint . ') ' . str_replace('%', 'vw', $size);
            }
        }
        if (!empty($options['max-width'])) {
            foreach ($options['max-width'] as $breakpoint => $size) {
                $sizes[] = '(max-width: ' . $breakpoint . ') ' . str_replace('%', 'vw', $size);
            }
        }
        $options['sizes'] = implode(', ', $sizes) . ', ' . $options['sizes'];
    }

    ?>
    <picture class="<?= $options['class'] ?>">
        <source sizes="<?= $options['sizes'] ?>" srcset="
      <?= $image['sizes']['small'] ?> 400w,
      <?= $image['sizes']['medium'] ?> 600w,
      <?= $image['sizes']['large'] ?> 1200w,
      <?= $image['sizes']['huge'] ?> 2400w ">
        <img src="<?= $image['sizes']['large'] ?>" alt="<?= $image['alt'] ?>"/>
    </picture>
    <?php
}


//
// ALLOW SVG FILES
// ----------------------------------------------------
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


?>