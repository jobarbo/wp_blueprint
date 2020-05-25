<?php
/*------------------------------------*\
    TINY MCE
    \*------------------------------------*/

  function tiny_stylesheet() {
    add_editor_style( 'assets/css/application.css' );
  }
  function enable_style_select( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
  }

  function icon_items($classes = false){
    $icons = array("analytics","android","apple","arrow-down","arrow-left","arrow-right","arrow-up","behance","cadran-1","cadran-2","cadran-3","cadran-4","cake","check","chevron-down","chevron-left","chevron-right","chevron-up","chrome","circle","close","codepen","drive","dropbox","drupal","drupal8","evernote","facebook","firefox","github","google","googleplus","hangout","ie","instagram","invision","linkedin","locator","logo","logo-full","magento","mailchimp","medium","menu","messenger","opera","paypal","photoshop","pinterest","plus","rails","safari","scoopit","search","shopify","sketch","skype","slack","snapchat","spotify","spree","stackoverflow","twitter","waves","woocommerce","wordpress","youtube",);

    $items = array();
    foreach($icons as $icon){
      $items[] = array(
        'title' => $icon,
        'selector' => "button, a, p, span",
        'classes' => "icon-" . $icon . ($classes ? " ".$classes : ""),
      );
    }
    return $items;

  }


  function custom_tiny_styles( $init_array ) {
    // Define the style_formats array

   


    $style_formats = array(
      array(
        "title" => "Titles",
        "items" => array(
          array( // MEGA TITLE
            'title' => 'HUGE',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'mega-title'
          ),
          array( // MAIN TITLE
            'title' => 'H1',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'title-1'
          ),
          array( // BOLD TITLE
            'title' => 'H2',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'title-2'
          ),
          array( // REGULAR TITLE
            'title' => 'H3',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'title-3'
          ),
          array( // SMALL TITLE
            'title' => 'H4',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'title-4'
          ),
          array( // REGULAR WEIGHT
            'title' => 'H5',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'title-5'
          ),
          array( // SCRIPT
            'title' => 'Script / Cursive',
            'selector' => 'blockquote,p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,span',
            'classes' => 'script-text'
          ),
        ),

      ),

      array(
        "title" => "Buttons",
        "items" => array(
          array( // BUTTON
            'title' => 'Button',
            'selector' => 'a, button, span, p',
            'classes' => 'button'
          ),
          array( // BUTTON - LIGHT
            'title' => 'Button - Light',
            'selector' => 'a, button, span, p',
            'classes' => 'button -light'
          ),
          array( // BUTTON - STROKE
            'title' => 'Button - Stroke',
            'selector' => 'a, button, span, p',
            'classes' => 'button -stroke'
          ),
        ),
      ),

      array(
        "title" => "Buttons : Hover",
        "items" => array(
          array( // BUTTON - JUMPY
            'title' => 'Jumpy',
            'selector' => 'a, button, span, p',
            'classes' => '-jumpy'
          ),
          array( // BUTTON - HAPPY
            'title' => 'Happy',
            'selector' => 'a, button, span, p',
            'classes' => '-happy'
          ),
          array( // BUTTON - EXCITED
            'title' => 'Excited',
            'selector' => 'a, button, span, p',
            'classes' => '-excited'
          ),
        ),
      ),

      array(
        "title" => "Icon à gauche",
        "items" => icon_items(),
      ),

      array(
        "title" => "Icon seulement",
        "items" => icon_items("-icon-only"),
      ),

    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;

  }

// function enable_more_buttons($buttons) {
//     $buttons[] = 'superscript';
//     $buttons[] = 'subscript';
//     return $buttons;
// }



// HOOKS
// add_filter("mce_buttons", "enable_more_buttons");
  add_filter('mce_buttons_2', 'enable_style_select');
  add_filter('tiny_mce_before_init', 'custom_tiny_styles' );
  add_action('init', 'tiny_stylesheet' );