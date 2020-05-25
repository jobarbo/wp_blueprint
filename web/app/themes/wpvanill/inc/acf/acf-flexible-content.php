<?php
// ==================================================================
//
// ACF - FLEXIBLE CONTENTS
// ==================================================================
global $acf_keys, $acf_index;


//
// KEYS (pre-randomized)
// ------------------------------------------------------------------

$acf_index = 0;
$acf_keys = array("334040019401","697613330269","085991458524","393350794806","800822315659","521043288737","114484574479","194138322210","686775812144","589711637495","254230020172","088803823248","034185205556","441917594654","337025010453","663145095985","562523584081","883841666037","260919465058","564335987499","983599203728","197082992050","466477728286","426704934442","524358416551","793354550473","077214672732","351095537864","183599276492","947421166968","690918900852","105481585633","234588156371","434386772543","431545214723","329162094785","521060932713","909223127898","468328239834","856772594928","673146576315","666487346244","691140131338","977046211168","471987979747","379156750449","478173661419","229336594325","409768474253","350970922156","614386768828","527884738185","024318197134","767350640989","491650107225","797514752548","047389325434","776675069966","668266623149","548787974448","931478185881","856223692636","221750209875","292862462436","534258488769","145605426068","159883470929","147876696313","863705578905","622714539163","274987209902","699523266245","727206746233","599427057325","979085556767","524200947357","034050734750","712884238742","698409037848","967946452933","187446952409","419410313250","516435255466","427259987000","714758734603","446901390632","146392576430","284983057072","656904789084","780627194037","101069851290","213188207871","750889968865","378680497767","952547163780","902799652587","079985501934","117187318569","994952208251","963216825477","415491314090","812238061112","672482601214","603544231586","632029440985","797519702691","673545786881","961799435650","998863710059","791317461052","081812725300","526564931249","380052014063","405349583937","977413575153","000256908032","988605960518","746751772217","770558378237","890293769009",
);


function new_acf_key()
{
    global $acf_keys, $acf_index;
    $acf_index++;
    return $acf_keys[$acf_index];
}

function current_acf_key()
{
    global $acf_keys, $acf_index;
    return $acf_keys[$acf_index];
}




//
// BACKGROUND
// ------------------------------------------------------------------
function generate_colors()
{
    return array(
        'key' => 'field_' . new_acf_key(),
        'label' => 'Couleurs',
        'name' => 'colors',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
            'width' => '10',
            'class' => '',
            'id' => '',
        ),
        'collapsed' => '',
        'min' => 1,
        'max' => 1,
        'layout' => 'block',
        'button_label' => '',
        'sub_fields' => array(
            array(
                'key' => 'field_' . new_acf_key(),
                'label' => 'Texte',
                'name' => 'text_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
            array(
                'key' => 'field_' . new_acf_key(),
                'label' => 'Arrière-plan',
                'name' => 'background_color',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
        ),
    );
}


//
// WYSIWYG
// ------------------------------------------------------------------
function generate_wysiwyg()
{
    return array(
        'key' => current_acf_key(),
        'name' => 'wysiwyg',
        'label' => 'Wysiwyg',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'field_' . new_acf_key(),
                'label' => 'Wysiwyg',
                'name' => 'wysiwyg',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'min' => '',
        'max' => '',
    );
}


//
// IMAGE
// ------------------------------------------------------------------
function generate_image()
{
    return array(
        'key' => current_acf_key(),
        'name' => 'image',
        'label' => 'Image',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'field_' . new_acf_key(),
                'label' => 'Image',
                'name' => 'image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
        ),
        'min' => '',
        'max' => '',
    );
}


//
// SLIDER
// ------------------------------------------------------------------
function generate_slider()
{
    return array(
        'key' => current_acf_key(),
        'name' => 'slider',
        'label' => 'Slider',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'field_' . new_acf_key(),
                'label' => 'Images',
                'name' => 'images',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => '',
                'layout' => 'table',
                'button_label' => 'Ajouter une image',
                'sub_fields' => array(
                    array(
                        'key' => 'field_' . new_acf_key(),
                        'label' => 'Image',
                        'name' => 'image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
            ),
        ),
        'min' => '',
        'max' => '',
    );
}


//
//
// GENERATE LAYOUTS
// ------------------------------------------------------------------
function generate_column_contents()
{
    return array(
        new_acf_key() => generate_wysiwyg(),
        new_acf_key() => generate_image(),
        new_acf_key() => generate_slider(),
    );
}


//
//
// REGISTER THE FIELDS
if (function_exists('acf_add_local_field_group')):

    $fields = array(
        'key' => 'group_59147e0dbf7f1',
        'title' => 'Flexible content',
        'fields' => array(
            array(
                'key' => 'field_59147e4e611a9',
                'label' => 'Flexible content',
                'name' => 'flexible-content',
                'type' => 'flexible_content',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layouts' => array(
                    '59147e5d553d0' => array(
                        'key' => '59147e5d553d0',
                        'name' => 'one-column',
                        'label' => '1 COLONNE',
                        'display' => 'table',
                        'sub_fields' => array(
                            generate_colors(),
                            array(
                                'key' => 'field_5914853c5fb3c',
                                'label' => 'Flexible content',
                                'name' => 'column-1',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => generate_column_contents(),
                                'button_label' => 'Ajouter un contenu',
                                'min' => 1,
                                'max' => 1,
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                    '5914896b29612' => array(
                        'key' => '5914896b29612',
                        'name' => 'two-columns',
                        'label' => '2 COLONNES',
                        'display' => 'table',
                        'sub_fields' => array(
                            generate_colors(),
                            array(
                                'key' => 'field_5914896b29613',
                                'label' => 'Colonne gauche',
                                'name' => 'column-1',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => generate_column_contents(),
                                'button_label' => 'Ajouter un contenu',
                                'min' => 1,
                                'max' => 1,
                            ),
                            array(
                                'key' => 'field_592dc85ee3f76',
                                'label' => 'Colonne droite',
                                'name' => 'column-2',
                                'type' => 'flexible_content',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '50',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'layouts' => generate_column_contents(),
                                'button_label' => 'Ajouter un contenu',
                                'min' => 1,
                                'max' => 1,
                            ),
                        ),
                        'min' => '',
                        'max' => '',
                    ),
                ),
                'button_label' => 'Ajouter une section',
                'min' => '',
                'max' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'default',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'the_content',
            1 => 'comments',
            2 => 'featured_image',
        ),
        'active' => 1,
        'description' => '',
    );


    acf_add_local_field_group($fields);


endif;

?>