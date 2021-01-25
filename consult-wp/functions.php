<?php

/* if(file_exists(get_template_directory().'/inc/enqueue.php')){
	
	require_once(get_template_directory().'/inc/enqueue.php');
	
} */

require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/inc/flaticon.php');
require_once(get_template_directory().'/inc/theme-setup.php');
require_once(get_template_directory().'/inc/wp-bootstrap-navwalker.php');
require_once(get_template_directory().'/inc/custom-widgets.php');
require_once(get_template_directory().'/inc/custom-comments.php');
require_once(get_template_directory().'/inc/libs/class-tgm-plugin-activation.php');
require_once(get_template_directory().'/inc/plugin-activation.php');
require_once(get_template_directory().'/inc/theme-element.php');
require_once(get_template_directory().'/inc/theme-options.php');
require_once(get_template_directory().'/inc/mj-wp-breadcrumb.php');
require_once(get_template_directory().'/theme-options/cs-framework.php');
require_once(get_template_directory().'/inc/custom-portfolio.php');



//Custom Comment Fields //
function consult_wpb_move_comment_field_to_bottom( $fields ) {
	
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'consult_wpb_move_comment_field_to_bottom' );


