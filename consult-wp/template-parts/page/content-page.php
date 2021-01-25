<?php
/**
 * Template part for displaying page content in page.php
 * @package WordPress
 * @subpackage Consult
 * @since Consult 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="default_page_content">
		    <?php the_content();?>
		</div>
		<div class="default_page_pagination">
		<?php wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'consult' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'consult' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) ); ?>
		</div>
	</div>
</article>
