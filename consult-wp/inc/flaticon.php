<?php

function vc_iconpicker_type_flaticon($icons){
	
	$flat_icons = array(
	'Flaticon' => array(
	
		array( 'flaticon-monitor' => 'flaticon monitor' ),
		array( 'flaticon-coding' => 'flaticon coding' ),
		array( 'flaticon-contract' => 'flaticon contract' ),
		array( 'flaticon-creativity' => 'flaticon creativity' ),
		array( 'flaticon-flask' => 'flaticon flask' ),
		array( 'flaticon-baby' => 'flaticon baby' ),
	
	),
	'New in 4.7' => array(
			array( 'fa fa-handshake-o' => 'Handshake Outlined' ),
			array( 'fa fa-envelope-open' => 'Envelope Open(email, e-mail, letter, support, mail, message, notification)' ),
			array( 'fa fa-envelope-open-o' => 'Envelope Open Outlined(email, e-mail, letter, support, mail, message, notification)' ),
			array( 'fa fa-linode' => 'Linode' ),
			array( 'fa fa-address-book' => 'Address Book' ),
			array( 'fa fa-address-book-o' => 'Address Book Outlined' ),
			array( 'fa fa-address-card' => 'Address Card(vcard)' ),
			array( 'fa fa-address-card-o' => 'Address Card Outlined(vcard-o)' ),
			array( 'fa fa-user-circle' => 'User Circle' ),
			array( 'fa fa-user-circle-o' => 'User Circle Outlined' ),
			array( 'fa fa-user-o' => 'User Outlined' ),
			array( 'fa fa-id-badge' => 'Identification Badge' ),
			array( 'fa fa-id-card' => 'Identification Card(drivers-license)' ),
			array( 'fa fa-id-card-o' => 'Identification Card Outlined(drivers-license-o)' ),
			array( 'fa fa-quora' => 'Quora' ),
			array( 'fa fa-free-code-camp' => 'Free Code Camp' ),
			array( 'fa fa-telegram' => 'Telegram' ),
			array( 'fa fa-thermometer-full' => 'Thermometer Full(thermometer-4, thermometer)' ),
			array( 'fa fa-thermometer-three-quarters' => 'Thermometer 3/4 Full(thermometer-3)' ),
			array( 'fa fa-thermometer-half' => 'Thermometer 1/2 Full(thermometer-2)' ),
			array( 'fa fa-thermometer-quarter' => 'Thermometer 1/4 Full(thermometer-1)' ),
			array( 'fa fa-thermometer-empty' => 'Thermometer Empty(thermometer-0)' ),
			array( 'fa fa-shower' => 'Shower' ),
			array( 'fa fa-bath' => 'Bath(bathtub, s15)' ),
			array( 'fa fa-podcast' => 'Podcast' ),
			array( 'fa fa-window-maximize' => 'Window Maximize' ),
			array( 'fa fa-window-minimize' => 'Window Minimize' ),
			array( 'fa fa-window-restore' => 'Window Restore' ),
			array( 'fa fa-window-close' => 'Window Close(times-rectangle)' ),
			array( 'fa fa-window-close-o' => 'Window Close Outline(times-rectangle-o)' ),
			array( 'fa fa-bandcamp' => 'Bandcamp' ),
			array( 'fa fa-grav' => 'Grav' ),
			array( 'fa fa-etsy' => 'Etsy' ),
			array( 'fa fa-imdb' => 'IMDB' ),
			array( 'fa fa-ravelry' => 'Ravelry' ),
			array( 'fa fa-eercast' => 'Eercast' ),
			array( 'fa fa-microchip' => 'Microchip' ),
			array( 'fa fa-snowflake-o' => 'Snowflake Outlined' ),
			array( 'fa fa-superpowers' => 'Superpowers' ),
			array( 'fa fa-wpexplorer' => 'WPExplorer' ),
			array( 'fa fa-meetup' => 'Meetup' ),
		),
	);
	
	return array_merge( $icons, $flat_icons );
}
add_filter( 'vc_iconpicker-type-flaticon', 'vc_iconpicker_type_flaticon' );




function consult_vc_icon_reg_css(){
	
	
	wp_register_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css');
}

add_action('vc_base_register_front_css','consult_vc_icon_reg_css');
add_action('vc_base_register_admin_css','consult_vc_icon_reg_css');


function consult_enqueue_icon_style_editor(){
	
	
	wp_enqueue_style('flaticon', get_stylesheet_directory_uri().'/assets/css/flaticon.css');
}

add_action('vc_backend_editor_enqueue_js_css','consult_enqueue_icon_style_editor');
add_action('vc_frontend_editor_enqueue_js_css','consult_enqueue_icon_style_editor');