<?php
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Widgetized Area',
    'before_widget' => '<div class = "widgetizedArea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
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

