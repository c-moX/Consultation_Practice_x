<?php 
/**
Template Name: Landing Page
@package WordPress
@since Consult 1.0
**/
get_header(); 
?>
<div id="section-edit">
	<div class="section-edt">
		<?php while ( have_posts() ) : the_post();  ?>					
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content-posts">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
	</div>
</div>
<?php get_footer();?>