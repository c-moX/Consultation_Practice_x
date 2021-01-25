<?php

function consult_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? (!($args['has_children']=='depth-1') ? 'new-depth' : '') : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="content_blog_a fix">
    <?php endif; ?>
	<div class="e_blog_A">
		<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	</div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php echo esc_html__( 'Your comment is awaiting moderation.', 'consult' ); ?></em>
          <br />
    <?php endif; ?>	
	<div class="blog_a_text">
		
		<h5>
		    <?php printf( __( '<cite class="fn">%s</cite>', 'consult'  ), get_comment_author_link() ); ?>
			<span class="reply_btnn"><?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></p>
		</h5>
		<?php comment_text(); ?>
		<p><?php printf( __('%1$s at %2$s', 'consult' ), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( esc_html__( '(Edit)', 'consult'  ), '  ', '' ); ?></p>
		
	</div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }