<?php
/**
 * @file
 * Custom setting for ZuviPro theme.
 */
use Drupal\Core\Form\FormStateInterface;
function zuvipro_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['#attached']['library'][] = 'zuvipro/theme-settings';
  $ver = '11.1.1';
  $theme_update_info = file_get_contents("https://drupar.com/theme-update-info/zuvipro.txt");
  $form['zuvipro'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h3 class="settings-form-title">' . t('') . '</h3>',
    '#default_tab' => 'general',
  ];

  /**
   * Main Tabs.
   */
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for using ZuviPro Theme</h3>ZuviPro is a premium Drupal 9 / 10 / 11 theme designed and developed by <a href="https://drupar.com" target="_blank">Drupar.com</a>'),
    '#group' => 'zuvipro',
  ];
  $form['layout'] = [
    '#type'  => 'details',
    '#title' => t('Layout'),
    '#group' => 'zuvipro',
  ];
  $form['colord'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'zuvipro',
  ];
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Slider'),
    '#group' => 'zuvipro',
  ];
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'zuvipro',
  ];
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'zuvipro',
  ];
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'zuvipro',
  ];
  $form['components'] = [
    '#type'  => 'details',
    '#title' => t('Components'),
    '#group' => 'zuvipro',
  ];
  // Main Tabs -> Footer.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'zuvipro',
  ];
  // Main Tabs ->Insert codes
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'zuvipro',
  ];
  // Main Tabs -> Licensing.
  $form['license'] = [
    '#type'  => 'details',
    '#title' => t('Theme License'),
    '#group' => 'zuvipro',
  ];

  // Main Tabs -> Update.
  $form['update'] = [
    '#type'  => 'details',
    '#title' => t('Update'),
    '#description' => t('<h4>Check For Update</h4>'),
    '#group' => 'zuvipro',
  ];

  // Main Tabs -> Support.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#description' => t('<h4>Support</h4><p>For any support related to ZuviPro theme, please <a href="https://drupar.com/node/add/ticket" target="_blank">open a support ticket</a>.</p>'),
    '#group' => 'zuvipro',
  ];

  // General -> info.
  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://drupar.com/theme/zuvipro" target="_blank">Theme Homepage</a> || <a href="//demo2.drupar.com/zuvipro/" target="_blank">Theme Demo</a> || <a href="https://drupar.com/zuvipro-documentation" target="_blank">Theme Documentation</a> || <a href="https://drupar.com/zuvipro-documentation/support" target="_blank">Theme Support</a>'),
  ];
  // Layout
  $form['layout']['layout_container'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Container width (px)'),
  ];
  $form['layout']['layout_container']['container_width'] = [
    '#type'          => 'number',
    '#default_value' => theme_get_setting('container_width', 'zuvipro'),
    '#description'   => t('Set width of the container in px. Default width is 1200px.'),
  ];
  // Layout -> Header Layout
  $form['layout']['layout_header'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Header Layout'),
  ];
  $form['layout']['layout_header']['header_width'] = [
    '#type'          => 'select',
    '#options' => array(
    	'header_width_contained' => t('contained'),
    	'header_width_full' => t('Full Width'),),
    '#default_value' => theme_get_setting('header_width', 'zuvipro'),
  ];
  // Layout -> Main Layout
  $form['layout']['layout_main'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Main Layout'),
  ];
  $form['layout']['layout_main']['main_width'] = [
    '#type'          => 'select',
    '#options' => array(
    	'main_width_contained' => t('contained'),
    	'main_width_full' => t('Full Width'),),
    '#default_value' => theme_get_setting('main_width', 'zuvipro'),
  ];
  // Layout -> Footer Layout
  $form['layout']['layout_footer'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Footer Layout'),
  ];
  $form['layout']['layout_footer']['footer_width'] = [
    '#type'          => 'select',
    '#options' => array(
    	'footer_width_contained' => t('contained'),
    	'footer_width_full' => t('Full Width'),),
    '#default_value' => theme_get_setting('footer_width', 'zuvipro'),
  ];
  // Color tab -> Info.
  include_once 'inc/settings/color.php';

  /**
   * Settings under slider tab.
   */
  // Homepage -> Slider -> Bottom wave shape
  $form['slider']['slider_bottom_wave'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Bottom Wave Shape'),
  ];

  $form['slider']['slider_bottom_wave']['slider_wave'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider Bottom Wave Shape'),
    '#default_value' => theme_get_setting('slider_wave', 'zuvipro'),
    '#description'   => t("Check this option to show slider bottom wave shape. Uncheck to hide."),
  ];
  $form['slider']['slider_type'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Types'),
    '#description'   => t('<ul><li>Basic Slider (text only)</li><li>Basic Slider (text and image)</li><li>Classic Slider</li><li>Layered Slider</li></ul>'),
  ];
  $form['slider']['slider_faq'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Frequently Asked Questions'),
    '#description'   => t('<h6>Can I create more than one slider?</h6>
    <p>Yes</p>
    <hr />
    <h6>Can I create slider in inner pages?</h6>
    <p>Yes</p>
    <hr />
    <h6>Does the slider support Drupal multilingual?</h6>
    <p>Yes</p>'),
  ];
  $form['slider']['slider_code'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Code'),
    '#description'   => t('<p>Please refer to below links for slider codes.<ul>
    <li><a href="https://drupar.com/node/3426" target="_blank">Slider Basic</a></li>
    <li><a href="https://drupar.com/node/3427" target="_blank">Slider Basic With Image</a></li>
    <li><a href="https://drupar.com/node/3428" target="_blank">Slider Style - Classic</a></li>
    <li><a href="https://drupar.com/node/3429" target="_blank">Slider Style - Layered</a></li>
    </ul>'),
  ];
  $form['slider']['slider_doc'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Documentation'),
    '#description'   => t('Please refer to <a href="https://drupar.com/node/864" target="_blank">slider documentation page</a> for detailed information.'),
  ];

  // Settings under header tab.
  // Header -> sticky header.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
  ];
  $form['header']['sticky_header']['sticky_header_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Sticky Header'),
    '#default_value' => theme_get_setting('sticky_header_option', 'zuvipro'),
    '#description'   => t("Check this option to enable sticky header. Uncheck to disable."),
  ];
  // Settings under sidebar.
  $form['sidebar']['front_sidebar_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebar_section']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar'),
    '#description'   => t("<p>Check this option to enable left and right sidebar on homepage.</p><hr /><br /><strong>Homepage Content</strong> block regions will always be full width."),
  ];
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Sidebar'),
  ];
  $form['sidebar']['animated_sidebar']['animated_sidebar_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable animated sidebar'),
    '#default_value' => theme_get_setting('animated_sidebar_option', 'zuvipro'),
    '#description'   => t("Check this option to enable animated sidebar feature. Uncheck to hide.<br />Please refer to this tutorial for details. <a href='https://drupar.com/zuvipro-documentation/animated-sidebar' target='_blank'>How To Create Animated Sidebar</a>"),
  ];
  // Content -> Page Loading.
  $form['content']['preloader'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Pre Page Loader'),
  ];
  $form['content']['preloader']['preloader_option'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show a loading icon before page loads.'),
    '#default_value' => theme_get_setting('preloader_option', 'zuvipro'),
    '#description'   => t("Check this option to show a cool animated image until your website is loading. Uncheck to disable this feature."),
  ];

  // Content -> Page Loading.
  $form['content']['cursor'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Fancy Cursor'),
  ];
  $form['content']['cursor']['fancy_cursor'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable fancy circle around mouse cursor.'),
    '#default_value' => theme_get_setting('fancy_cursor', 'zuvipro'),
    '#description'   => t("Check this option to add a fancy animated circle around the mouse cursor. Uncheck to disable this feature."),
  ];

  // Settings under content tab -> Homepage.
  $form['content']['homepage'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Content'),
    '#description'   => t('Please follow this tutorial to add content on homepage. <a href="https://drupar.com/zuvipro-documentation/how-add-content-homepage" target="_blank">How to add content on homepage</a>'),
  ];

  // Settings under content tab -> Animated Content.
  $form['content']['animated_content_in_view'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Page Content'),
    '#description'   => t('<p><hr /></p><p>Please visit this tutorial page for details. <a href="https://drupar.com/zuvipro-documentation/how-create-animated-content" target="_blank">How to create animated content</a>.</p>'),
  ];

  $form['content']['animated_content_in_view']['animated_content'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Animated Page Content when in view'),
    '#default_value' => theme_get_setting('animated_content', 'zuvipro'),
    '#description'   => t("Check this option to enable animated page content when in view. Uncheck to disable this feature."),
  ];


  // Node author picture.
  $form['content']['node'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node'),
  ];

  $form['content']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic', 'zuvipro'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  // Show user picture in comment.
  $form['content']['comment'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Comment'),
  ];
  /*
   * Components
   */
  $form['components']['components_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Components -> Social
  $form['components']['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#group' => 'components_tab',
  ];
  $form['components']['social']['all_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons'),
  ];
  $form['components']['social']['all_icons']['all_icons_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in footer'),
    '#default_value' => theme_get_setting('all_icons_show', 'zuvipro'),
    '#description'   => t("Check this option to show social icons in footer. Uncheck to hide all icons. Below you can hide individual icons."),
  ];
  // Facebook.
    $form['components']['social']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];

  $form['components']['social']['facebook']['facebook_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('facebook_url', 'zuvipro'),
  ];

  // Twitter.
  $form['components']['social']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];

  $form['components']['social']['twitter']['twitter_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('twitter_url', 'zuvipro'),
  ];

  // Instagram.
  $form['components']['social']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];

  $form['components']['social']['instagram']['instagram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Instagram Url'),
    '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('instagram_url', 'zuvipro'),
  ];

  // Linkedin.
  $form['components']['social']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];

  $form['components']['social']['linkedin']['linkedin_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Linkedin Url'),
    '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('linkedin_url', 'zuvipro'),
  ];

  // YouTube.
  $form['components']['social']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];

  $form['components']['social']['youtube']['youtube_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('youtube_url', 'zuvipro'),
  ];

  // vimeo.
  $form['components']['social']['vimeo'] = [
    '#type'        => 'details',
    '#title'       => t("vimeo"),
  ];

  $form['components']['social']['vimeo']['vimeo_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('vimeo Url'),
    '#description'   => t("Enter yours vimeo.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('vimeo_url', 'zuvipro'),
  ];

  // telegram.
    $form['components']['social']['telegram'] = [
    '#type'        => 'details',
    '#title'       => t("Telegram"),
  ];

  $form['components']['social']['telegram']['telegram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Telegram Url'),
    '#description'   => t("Enter yours Telegram profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('telegram_url', 'zuvipro'),
  ];

  // WhatsApp.
    $form['components']['social']['whatsapp'] = [
    '#type'        => 'details',
    '#title'       => t("WhatsApp"),
  ];

  $form['components']['social']['whatsapp']['whatsapp_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('WhatsApp Url'),
    '#description'   => t("Enter yours whatsapp message url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('whatsapp_url', 'zuvipro'),
  ];

  // Github.
    $form['components']['social']['github'] = [
    '#type'        => 'details',
    '#title'       => t("GitHub"),
  ];

  $form['components']['social']['github']['github_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('GitHub Url'),
    '#description'   => t("Enter yours github page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('github_url', 'zuvipro'),
  ];

  // Social -> vk.com url.
  $form['components']['social']['vk'] = [
    '#type'        => 'details',
    '#title'       => t("vk.com"),
  ];
  $form['components']['social']['vk']['vk_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('vk.com'),
      '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('vk_url', 'zuvipro'),
  ];

  // Social -> New Social Icons
  $form['components']['social']['social_new_icon'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Add More Social Icons'),
  ];

  $form['components']['social']['social_new_icon']['social_new_icon_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('New Social Icons Code'),
    '#default_value' => theme_get_setting('social_new_icon_code', 'zuvipro'),
    '#description'   => t('Please refer to this <a href="https://drupar.com/zuvipro-documentation/social-icons-footer" target="_blank">documentation page</a> for social icons code tutorial.'),
  ];
  // Components -> Node share
  $form['components']['node_share_tab'] = [
    '#type'  => 'details',
    '#title' => t('Node sharing'),
    '#group' => 'components_tab',
  ];
  // Social-> Node sharing option.
  $form['components']['node_share_tab']['page_share'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node Sharing on Social networking websites'),
  ];
  $form['components']['node_share_tab']['page_share']['page_share_all'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Node Sharing Feature'),
    '#default_value' => theme_get_setting('page_share_all', 'zuvipro'),
    '#description'   => t("Check this option to enable site wide social sharing. Below you can enable or disable for individual content type and frontpage. Uncheck to disable this feature for all pages."),
  ];

  $form['components']['node_share_tab']['page_share']['page_share_front'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Homepage'),
    '#default_value' => theme_get_setting('page_share_front', 'zuvipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Homepage</strong>. Uncheck to hide."),
  ];

  $form['components']['node_share_tab']['page_share']['page_share_page'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Page Content Type'),
    '#default_value' => theme_get_setting('page_share_page', 'zuvipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Basic page</strong> content type nodes. Uncheck to hide."),
  ];

  $form['components']['node_share_tab']['page_share']['page_share_article'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Article Content Type'),
    '#default_value' => theme_get_setting('page_share_article', 'zuvipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on <strong>Article</strong> content type nodes. Uncheck to hide."),
  ];
  $form['components']['node_share_tab']['page_share']['page_share_other'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Share Other Content Types'),
    '#default_value' => theme_get_setting('page_share_other', 'zuvipro'),
    '#description'   => t("Check this option to show social sharing buttons (facebook, twitter, Instagram etc) on other content type nodes. Uncheck to hide."),
  ];
  $form['content']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic', 'zuvipro'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];
  // Components -> Font icons
  $form['components']['font_icons'] = [
    '#type'  => 'details',
    '#title' => t('Font Icons'),
    '#group' => 'components_tab',
    '#description'   => t('Following fonts icons libraries are included in the theme. For more details, please refer to the documentation page: <a href="https://drupar.com/node/892/" target="_blank">Font Icons</a>'),
  ];
  $form['components']['font_icons']['fontawesome4'] = [
    '#type'          => 'fieldset',
    '#title'         => t('FontAwesome 4'),
  ];
  $form['components']['font_icons']['fontawesome4']['fontawesome_four'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 4 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_four', 'zuvipro'),
    '#description'   => t('Check this option to enable fontawesome version 4 font icons.'),
  ];
  $form['components']['font_icons']['fontawesome5'] = [
    '#type'          => 'fieldset',
    '#title'         => t('FontAwesome 5'),
    '#description'   => t("<mark>Do not enable both FontAwesome 5 and FontAwesome 6</mark>")
  ];
  $form['components']['font_icons']['fontawesome5']['fontawesome_five'] = [
    '#type'          => 'checkbox',
    '#title'         => t('FontAwesome 5 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_five', 'zuvipro'),
    '#description'   => t("Check this option to enable FontAwesome 5 Font Icons. Uncheck to disable."),
  ];
  $form['components']['font_icons']['fontawesome6'] = [
    '#type'          => 'fieldset',
    '#title'         => t('FontAwesome 6'),
    '#description'   => t("<mark>Do not enable both FontAwesome 5 and FontAwesome 6</mark>")
  ];
  $form['components']['font_icons']['fontawesome6']['fontawesome_six'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable FontAwesome 6 Font Icons'),
    '#default_value' => theme_get_setting('fontawesome_six', 'zuvipro'),
    '#description'   => t('<p>Check this option to enable fontawesome version 6 font icons.</p><p><a href="https://drupar.com/node/2863/">How to use FontAwesome 6</a></p>'),
  ];
	$form['components']['font_icons']['bootstrap_icons'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Bootstrap Font Icons'),
  ];
  $form['components']['font_icons']['bootstrap_icons']['bootstrapicons'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Bootstrap Icons'),
    '#default_value' => theme_get_setting('bootstrapicons', 'zuvipro'),
    '#description'   => t('<p>Check this option to enable Bootstrap Font Icons.</p><p><a href="https://drupar.com/node/2864/">How to use Bootstrap Font Icons</a></p>'),
  ];
  $form['components']['font_icons']['material'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Google Material Font Icons'),
    '#description'   => t('<a href="https://drupar.com/node/2865" target="_blank">How to use Google Material font icons</a>'),
  ];
  $form['components']['font_icons']['material']['material_icon_outlined'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons - Outlined'),
    '#default_value' => theme_get_setting('material_icon_outlined', 'zuvipro'),
    '#description'   => t('Check this option to enable Google Material Outlined Font Icons. Uncheck to disable.'),
  ];
  $form['components']['font_icons']['material']['material_icon_filled'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons - Filled'),
    '#default_value' => theme_get_setting('material_icon_filled', 'zuvipro'),
    '#description'   => t('Check this option to enable Google Material Filled Font Icons. Uncheck to disable.'),
  ];
  $form['components']['font_icons']['material']['material_icon_round'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons - Round'),
    '#default_value' => theme_get_setting('material_icon_round', 'zuvipro'),
    '#description'   => t('Check this option to enable Google Material Round Font Icons. Uncheck to disable.'),
  ];
  $form['components']['font_icons']['material']['material_icon_sharp'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons - Sharp'),
    '#default_value' => theme_get_setting('material_icon_sharp', 'zuvipro'),
    '#description'   => t('Check this option to enable Google Material Sharp Font Icons. Uncheck to disable.'),
  ];
  $form['components']['font_icons']['material']['material_icon_tone'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Google Material Font Icons - Two Tone'),
    '#default_value' => theme_get_setting('material_icon_tone', 'zuvipro'),
    '#description'   => t('Check this option to enable Google Material Two Tone Font Icons. Uncheck to disable.'),
  ];
  // Settings under footer tab.
  // Scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];

  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on', 'zuvipro'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this fearure and hide scroll to top icon."),
  ];

  $form['footer']['footer_wave_shape'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Footer Wave Shape'),
  ];

  $form['footer']['footer_wave_shape']['footer_wave'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Footer Wave Shape'),
    '#default_value' => theme_get_setting('footer_wave', 'zuvipro'),
    '#description'   => t("Check this option to show footer top wave shape. Uncheck to hide."),
  ];

  // Footer -> Copyright.
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];

  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text', 'zuvipro'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];
  $form['footer']['copyright']['copyright_custom'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show custom copyright text from copyright block region.'),
    '#default_value' => theme_get_setting('copyright_custom', 'zuvipro'),
    '#description'   => t('<p>Check this option to show custom copyright text. Create a new block and place the block in copyright region. Uncheck this option to show default copyright text.</p><p>For more details, please refer to the <a href="https://drupar.com/node/888/" target="_blank">documentation page</a></p>'),
  ];

  // Footer -> Cookie.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
  ];
  $form['footer']['cookie']['cookie_message'] = [
    '#type'          => 'checkbox',
    '#title'       => t('Show Cookie Consent Popup Message'),
    '#default_value' => theme_get_setting('cookie_message', 'zuvipro'),
    '#description'   => t('Required to place a Cookie Consent message on your site, as per the EU cookie law? Make your website EU Cookie Law Compliant.<br />According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];
  $form['footer']['cookie']['cookie_custom'] = [
    '#type'          => 'checkbox',
    '#title'       => t('Show Custom Cookie Consent Message'),
    '#default_value' => theme_get_setting('cookie_custom', 'zuvipro'),
    '#description'   => t('<p>Check this option to show custom cookie consent message. Create a new block and place the block in Cookie Consent Message region. Uncheck this option to show default message text.</p><p>For more details, please refer to the <a href="https://drupar.com/node/874/" target="_blank">documentation page</a></p>'),
  ];

  /**
   * Insert Codes
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  // Insert Codes -> CSS
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  // Insert Codes -> Head
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert Codes -> Body
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  // Insert css codes
  $form['insert_codes']['css']['custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Custom Styling'),
  ];
  $form['insert_codes']['css']['custom']['styling'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom css'),
    '#default_value' => theme_get_setting('styling', 'zuvipro'),
    '#description'   => t("Check this option to enable custom styling. Uncheck to disable this fearure.<br />Please refer to this tutorial page. <a href='https://drupar.com/zuvipro-documentation/custom-css' target='_blank'>How To Use Custom Styling</a>"),
  ];
  $form['insert_codes']['css']['custom']['styling_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Custom CSS Codes'),
    '#default_value' => theme_get_setting('styling_code', 'zuvipro'),
    '#description'   => t('Please enter your custom css codes in this text box. You can use it to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://drupar.com/zuvipro-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];
  // Insert Codes -> Head -> Head codes
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes in &lt;head&gt; section'),
    '#default_value' => theme_get_setting('insert_head'),
    '#description'   => t("Check this option to enable custom codes in &lt;head&gt; section. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['head']['head_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('&lt;head&gt; Codes'),
    '#default_value' => theme_get_setting('head_code'),
    '#description'   => t("Please enter your custom codes for &lt;head&gt; section. These codes will be inserted just before <strong>&lt;/head&gt;</strong>."),
  ];
  // Insert Codes -> Body -> Body start codes
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['insert_body_start'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes after &lt;body&gt; tag'),
    '#default_value' => theme_get_setting('insert_body_start'),
    '#description'   => t("Check this option to enable custom codes after &lt;body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_start_section']['body_start_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_start_code'),
    '#description'   => t("Please enter your custom codes after &lt;body&gt; tag. These codes will be inserted just after <strong>&lt;body&gt;</strong> tag."),
  ];
  // Insert Codes -> Body -> Body end codes
  $form['insert_codes']['body']['insert_body_end_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code before &lt;/BODY&gt; tag'),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['insert_body_end'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable custom codes before &lt;/body&gt; tag.'),
    '#default_value' => theme_get_setting('insert_body_end'),
    '#description'   => t("Check this option to enable custom codes before &lt;/body&gt; tag. Uncheck to disable this feature."),
  ];
  $form['insert_codes']['body']['insert_body_end_section']['body_end_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Codes'),
    '#default_value' => theme_get_setting('body_end_code'),
    '#description'   => t("Please enter your custom codes before &lt;/body&gt; tag. These codes will be inserted just before <strong>&lt;/body&gt;</strong>."),
  ];
  /**
   * Settings under License tab.
   */
  $form['license']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('License Type'),
    '#description' => t('<p>Your theme license is: <strong>Single Domain License</strong></p>
    <p>You are allowed to use this theme on a single website. For details, please refer to <a href="https://drupar.com/theme-license" target="_blank">Theme License Details</a></p>
    <hr /><br /><a href="https://drupar.com/upgrade/zuvipro" target="_blank">Upgrade to unlimited domain license</a>. Upgrade fee is $30 only.'),
  ];
  $form['license']['upgrade'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Upgrade'),
    '#description' => t('<p>You can upgrade to unlimited domain license. Upgrade price is $30 only.</p><p><hr /></p><p><a href="https://drupar.com/upgrade/zuvipro" target="_blank">Upgrade to unlimited domain license</a>.</p>'),
  ];

  /**
   * Settings under update tab.
   */
  $form['update']['update_version'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Current Theme Version'),
    '#description' => t("$ver"),
  ];
  $form['update']['update_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Latest ZuviPro Version'),
    '#description' => t("<pre>$theme_update_info</pre>"),
  ];

  // Settings under support tab.
  // Settings under support tab.
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#description' => t('<h4>Documentation</h4>
    <p>We have a detailed documentation about how to use theme. Please read the <a href="https://drupar.com/zuvipro-documentation" target="_blank">ZuviPro Theme Documentation</a>.</p>
    <hr />
    <h4>Open Support Ticket</h4>
    <p>If you need support that is beyond our theme documentation, please open a support ticket.<br /><a href="https://drupar.com/node/add/ticket" target="_blank">Create a support ticket</a></p>'),
  ];
// End form.
}
