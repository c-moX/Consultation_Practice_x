<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'consult' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'consult'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'callback' => 'consult_comment'
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(array(
			'mid_size'   =>   3,
			'prev_text'  => __('Previous <i class="flaticon-left-arrow"></i>', 'textdomain'),
			'next_text'  => __('<i class="flaticon-right-arrow"></i> Next', 'textdomain'),
		));

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'consult' ); ?></p>
		<?php
	endif;
	?>

</div><!-- #comments -->





<!--- #Start my_comment_form# --->
<div class="consultency_comments_form">
<h5  class="comments_title"><?php _e('Add Comment','consult');?></h5>
	<div class="row">
	<?php 
		$consult_comment_fields = array();
		$consult_name_field_placeholder = __('Name','consult');
		$consult_email_field_placeholder = __('E-mail','consult');
		$consult_url_field_placeholder = __('Website','consult');
		
		$consult_comment_fields['author']=<<<EOD
			<div class="col-md-12 col-sm-12">
				<div class="form-group">
					<input type="text" id="author" name="author" class="form-control" placeholder="{$consult_name_field_placeholder}*">
				</div>
			</div>
EOD;


		$consult_comment_fields['email'] = <<<EOD
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<input type="email" id="email" name="email" class="form-control" placeholder="{$consult_email_field_placeholder}*">
					</div>
				</div>

EOD;

		$consult_comment_fields['url'] = <<<EOD
				<div class="col-md-6 col-sm-6">
					<div class="form-group">
						<input type="url" id="url" name="url" class="form-control" placeholder="{$consult_url_field_placeholder}">
					</div>
				</div>

EOD;
		$consult_comment_field = <<<EOD
				<div class="col-md-12">
					<div class="form-group">
						<textarea id="comment" name="comment" class="form-control" rows="4" placeholder="Your Comment"></textarea>
					</div>
				</div>
EOD;
		
		$consult_comment_submit_button = <<<EOD
				<div class="col-md-12">
					<div class="form-group">
						<div class="send_me_ph">
							<input type="submit" id="submit" name="submit" class="submit_btn_quick_contact" value="Post a Comment">
						</div>
					</div>
				</div>
EOD;
				$consult_comment_form_arguments = array(
					'fields'=>$consult_comment_fields,
					'comment_field'=>$consult_comment_field,
					'submit_button'=>$consult_comment_submit_button,
					'class_form'=>'msg_form',
					'comment_notes_before'=>'<p></p>',
					//'comment_notes_after'=>'<p>Your email address will not be published. Required fields are marked *</p>',
					'title_reply'=>''
				);

				comment_form($consult_comment_form_arguments);
				?>

	</div>
	</div>
	
	