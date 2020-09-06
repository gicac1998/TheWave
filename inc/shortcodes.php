<?php

/*
	
@package sunsettheme
	
	========================
		SHORTCODES OPTIONS
	========================
*/

function sunset_tooltip ($atts,$content = null ) {
	//get the attributes
	$atts = shortcode_atts(
		array(
			'placement' =>	'top',
			'title'		=>	''
		),
		$atts,
		'tooltip'
	);
	$title = ($atts['title'] == '' ? $content : $atts['title']);

	//return HTML
	return '<span class="sunset-tooltip" data-toggle="tooltip" data-placement="'. $atts['placement'].'" title="'.$title.'">'.$content.'</span>';
}

add_shortcode( 'tooltip', 'sunset_tooltip' );

function sunset_popover ($atts, $content = null) {
	//[popover title="Popover title" placement="top" trigger="click" content="This is popover content"]This is a Popover content[/popover]
	$atts = shortcode_atts(
		array(
			'placement' => 'top',
			'title'		=> '',
			'trigger'	=> 'click',
			'content'	=> ''
		),
		$atts,
		'popover'
	);


	//return HTML
	return '<span class="sunset-popover" data-toggle="popover" data-trigger="click" data-placement="'. $atts['placement'].'" title="'.$atts['title'].'" data-content="'. $atts['content'].'" data-trigger="'.$atts['trigger'].'">'.$content.'</span>';
}

add_shortcode( 'popover', 'sunset_popover' );


//Contact Form Shortcode 
function sunset_contact_form ($atts,$content = null ) {
	//[contact_form]
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);


	//return HTML
	ob_start();
	include 'templates/contact-form.php';
	return ob_get_clean();
}

add_shortcode( 'contact_form', 'sunset_contact_form' );