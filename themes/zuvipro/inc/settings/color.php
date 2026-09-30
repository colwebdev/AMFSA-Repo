<?php
/**
 * Color Settings
 */
$form['colord']['color_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Color Scheme Settings'),
    '#description'   => t('These settings adjust the look and feel of the ZuviPro theme. Changing the color below will change the color of ZuviPro theme.'),
  ];
  $form['colord']['color_scheme_option'] = [
    '#type' => 'fieldset',
    '#title' => t('Color Scheme'),
  ];
  $form['colord']['color_scheme_option']['color_scheme'] = [
    '#type'          => 'select',
    '#title' => t('Select Color Scheme'),
    '#options' => array(
      'color_default' => t('Default'),
      'color_custom' => t('Custom'),
      ),
    '#default_value' => theme_get_setting('color_scheme'),
    '#description'   => t('Default will set the theme to default color scheme. Custom will set the theme color as set below.')
  ];
  $form['colord']['color_custom'] = [
    '#type' => 'fieldset',
    '#title' => t('Custom Color Scheme'),
    '#description'   => t('Customize color of the theme. This will work if you have selected <strong>Custom</strong> color scheme above.')
  ];
  $form['colord']['color_custom']['color_primary'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_primary'),
    '#title'       => t('Primary Color'),
    '#default_value' => theme_get_setting('color_primary'),
    '#description' => t('<p>Default value is <strong>#f26c4f</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_secondary'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_secondary'),
    '#title'       => t('Secondary Color'),
    '#default_value' => theme_get_setting('color_secondary'),
    '#description' => t('<p>Default value is <strong>#f4399e</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['bg_body'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('bg_body'),
    '#title'       => t('Body Background'),
    '#default_value' => theme_get_setting('bg_body'),
    '#description' => t('<p>Default value is <strong>#0d0f16</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['bg_header'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('bg_header'),
    '#title'       => t('Header and Footer Background'),
    '#default_value' => theme_get_setting('bg_header'),
    '#description' => t('<p>Default value is <strong>#020312</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['block_bg'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('block_bg'),
    '#title'       => t('Block Background'),
    '#default_value' => theme_get_setting('block_bg'),
    '#description' => t('<p>Default value is <strong>#181a25</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_light'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_light'),
    '#title'       => t('Light Color'),
    '#default_value' => theme_get_setting('color_light'),
    '#description' => t('<p>Default value is <strong>#676A79</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_border'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_border'),
    '#title'       => t('Line and Border Color'),
    '#default_value' => theme_get_setting('color_border'),
    '#description' => t('<p>Default value is <strong>#46484b</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_text'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_text'),
    '#title'       => t('Text Color'),
    '#default_value' => theme_get_setting('color_text'),
    '#description' => t('<p>Default value is <strong>#a1a1a1</strong></p><p><hr /></p>'),
  ];
  $form['colord']['color_custom']['color_heading'] = [
    '#type'        => 'color',
    '#field_suffix' => theme_get_setting('color_heading'),
    '#title'       => t('Heading Color'),
    '#default_value' => theme_get_setting('color_heading'),
    '#description' => t('<p>Default value is <strong>#ffffff</strong></p><p><hr /></p>'),
  ];