<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="widget sidebar-block %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
    ));
	
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Footer',
		'before_widget' => '<div id="%1$s" class="widget sidebar-block %2$s">',
		'after_widget' => '</div> <!-- end .widget -->',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
    ));
?>