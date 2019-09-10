<?php

	$sidebar1 = array(
		'name'          => 'Primera Sidebar Left' ,
		'id'            => "primera-sidebar-left",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '',
	);

	$sidebar2 = array(
		'name'          => 'Primera Sidebar Right' ,
		'id'            => "primera-sidebar-right",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '',
	);

	register_sidebar( $sidebar1 );
	register_sidebar( $sidebar2 );