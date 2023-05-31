<?php

add_action('acf/init', 'hfm_acf_init_blocks');
function hfm_acf_init_blocks()
{

  if (function_exists('acf_register_block_type')) {
    acf_register_block_type(
      array(
        'name'            => 'dl-dt-dd',
        'title'           => 'Перечисление',
        'description'     => 'Отображает нумерованные блоки с форматированием',
        'render_template' => 'block-templates/dl-dt-dd.php',
        'category'        => 'text',
        'icon'            => 'admin-comments',
        'api_version'     => 2,
        'keywords'        => array('opening hours', 'hours'),
        'mode'            => 'preview',
        'supports'        => array(
          'jsx'        => true,
          'color'      => array(
            'text'       => true,
            'background' => false,
          ),
          'align_text' => true,
        ),
      )
    );
  }
}
