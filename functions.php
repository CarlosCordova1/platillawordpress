<?php
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widgetized Area',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<header class="major"><h2>',
    'after_title' => '</h2></header>',
  )
);
  register_sidebar(array(
    'name' => 'Widgetized Ads',
    'before_widget' => '<div class = "widgetizedAreaAds">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

add_theme_support( 'title-tag' );