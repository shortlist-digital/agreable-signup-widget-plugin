<?php

$key = 'widget_signup';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => $key,
  'name' => 'signup',
  'label' => 'Sign-up box',
  'display' => 'row',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement
    ),
    array (
      'key' => $key . '_sell',
      'label' => 'Sign-up Sell',
      'name' => 'sell',
      'type' => 'text',
      'instructions' => 'A compelling sell imploring a user to sign up',
    ),
    array (
      'key' => $key . '_subsell',
      'label' => 'Sign-up Sub Sell',
      'name' => 'sub_sell',
      'type' => 'text',
      'instructions' => 'Add more detail on why a user should sign up',
    ),
    array (
      'key' => $key . '_buttonsell',
      'label' => 'Button Sell',
      'name' => 'button_sell',
      'type' => 'text',
      'default_value' => 'Subscribe now!',
    ),
    array (
      'key' => $key . '_thank_you_message',
      'label' => 'Thank You Message',
      'name' => 'thank_you_message',
      'type' => 'text',
      'default_value' => 'Thanks! We\'ve safely stored your email address.',
    ),
    array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement
    )
  ),
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
