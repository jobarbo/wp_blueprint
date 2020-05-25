<?php
//
//
// FLEXIBLE CONTENTS
// ====================================================
$contents = get_field('flexible-content');

function render_content($contents, $additionnalClass = "", $cols = 1)
{

    foreach ($contents as $content):
        switch ($content['acf_fc_layout']) {

            //
            // WYSIWYG
            case 'wysiwyg':
                ?>

                <div class="text-section <?= $additionnalClass ?>">
                    <div class="content">
                        <?= apply_filters('the_content', $content['wysiwyg']); ?>
                    </div>
                </div>

                <?php
                break;

            //
            // IMAGE
            case 'image':
                ?>
                <div class="image-section <?= $additionnalClass ?>">
                    <?php responsive_img($content['image'], array(
                            'min-width' => array(
                                '800px' => ($cols == 2 ? '50%' : '100%'),
                            ),
                        )
                    ); ?>
                </div>
                <?php
                break;

            //
            // SLIDER
            case 'slider':
                ?>

                <div class="slider-section <?= $additionnalClass ?>" data-js-slider>
                    <?php foreach ($content['images'] as $image): ?>
                        <div>
                            <?php responsive_img($image['image'], array(
                                    'min-width' => array(
                                        '800px' => ($cols == 2 ? '50%' : '100%'),
                                    ),
                                )
                            ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php
                break;
        }
    endforeach;
}


//
// LOOP THROUGH EACH SECTION
// ----------------------------------------------------
if ($contents):
    foreach ($contents as $content):

        //
        // 1 COLUMN
        // ------------------------------------------------
        switch ($content['acf_fc_layout']) {

            //
            // TEXT
            case 'one-column':

                $classes = "";
                $styles = "";

                $classes .= " -" . $content['column-1'][0]['acf_fc_layout'];

                if(isset($content['colors'])){
                  if(!empty($content['colors'][0]['background_color'])){
                    $styles .= "background-color: ".$content['colors'][0]['background_color']."; ";
                  }
                  if(!empty($content['colors'][0]['text_color'])){
                    $styles .= "color: ".$content['colors'][0]['text_color']."; ";
                  }
                }

                ?>

                <section class="row one-column <?= $classes ?>" style="<?= $styles ?>">

                    <?php render_content($content['column-1']); ?>

                </section>

                <?php
                break;


            //
            // 2 COLUMNS
            // ------------------------------------------------
            case 'two-columns':

                $classes = "";
                $styles = "";

                $classes .= " -" . $content['column-1'][0]['acf_fc_layout'] . "-" . $content['column-2'][0]['acf_fc_layout'];


                 if(isset($content['colors'])){
                  if(!empty($content['colors'][0]['background_color'])){
                    $styles .= "background-color: ".$content['colors'][0]['background_color']."; ";
                  }
                  if(!empty($content['colors'][0]['text_color'])){
                    $styles .= "color: ".$content['colors'][0]['text_color']."; ";
                  }
                }

                ?>

                <section class="row two-columns <?= $classes ?>" style="<?= $styles ?>">

                    <?php render_content($content['column-1'], 'column-1 -left', 2); ?>
                    <?php render_content($content['column-2'], 'column-2 -right', 2); ?>

                </section>

                <?php
                break;
        }
    endforeach;
endif;
?>