<?php

$query = ffThemeOptions::getQuery('layout');

$defaultLogo = '';

if( $query->get('default header-logo-use') ) {
    $defaultLogo =  $query->get('default header-logo');
}


$data = array (
  'sections' =>
  array (
    '0-|-navigation' =>
    array (
      'navigation' =>
      array (
        'logo' =>
        array (
          'image' => $defaultLogo,
          'is_retina' => '0',

           'tablet' => array(
               'image' => $defaultLogo,
               'is_retina' => '0',
           ),

            'phone' => array(
               'image' => $defaultLogo,
               'is_retina' => '0',
           ),
        ),
        'navigation-menu-id' => '',
        'search' =>
        array (
          'show' => '1',
          'placeholder' => __('Enter your keyword here and then press enter...','wien'),
        ),
      ),
    ),
  ),
);
