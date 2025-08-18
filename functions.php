<?php

add_action('init', function () {
  register_block_style('core/button', [
    'name' => 'blue',
    'label' => __('Blue', 'gutenberg-boilerplate'),
    'style_handle' => 'blue',
  ]);

  register_block_style('core/button', [
    'name' => 'orange',
    'label' => __('Orange', 'gutenberg-boilerplate'),
    'style_handle' => 'custom-button-styles',
  ]);
});

if (!function_exists('gb_enqueue_css')) {
  function gb_enqueue_css()
  {
    wp_enqueue_style(
      'base',
      get_parent_theme_file_uri('/assets/css/base.css'),
      array(),
      wp_get_theme()->get('Version')
    );
    // wp_enqueue_style(
    //   'gb-style',
    //   get_parent_theme_file_uri('style.css'),
    //   array(),
    //   wp_get_theme()->get('Version')
    // );
  }
  add_action('wp_enqueue_scripts', 'gb_enqueue_css');
}
function mytheme_setup_editor_styles()
{
  // Add theme support for editor styles.
  // add_theme_support('editor-styles');

  // add_theme_support('align-wide');

  // add_theme_support('wp-block-styles');

  // Enqueue your base.css file for the editor.
  // The path is relative to your theme's root directory.
  // add_editor_style('assets/css/base.css');
}
add_action('after_setup_theme', 'mytheme_setup_editor_styles');
// function wpdocs_theme_add_editor_styles()
// {
//   add_editor_style('/assets/css/base.css');
// }
// add_action('admin_init', 'wpdocs_theme_add_editor_styles');
?>