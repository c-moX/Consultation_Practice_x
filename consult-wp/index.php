<?php get_header();?> 
    <div class="page_title_banner blog_sidebar_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('Blog Content Page', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->
	

    <!--- START MAIN_BLOG --->
	<div class="blog_page_area">
        <div class="container">
            <div class="row">
			
			
                <!--- Blog Post --->
				<div class="col-md-8">
                    <div class="blog_left_side_area"> <!-- blog_left_area -->
					
					<?php if(have_posts()): while(have_posts()): the_post(); ?> <!--- Start post_loop --->
						<div class="blog_left_single_item"> <!--- Start post_desc --->
							<div class="blog_pic image_fulwidth">
								<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
								<h4 class="date_position"><?php echo get_the_date('j F Y');?></h4>
							</div>
							<div class="blog_left_single_content para_default">
								<h3><a href="<?php the_permalink();?>"><?php echo get_the_title();?></a></h3>
								<p><?php echo wp_trim_words(get_the_content(), 42);?></p>
							</div>
						</div> <!--- End post_desc --->
					<?php endwhile; ?> <!--- End post_loop 01 --->
                        
                    <div class="blog_pagination"> <!--- Start pagination --->
                        <nav>
                            <ul class="pagination pagination-lg">
							<?php
							    the_posts_pagination(array(
								    'mid_size'   =>   3,
								    'prev_text'  => __('Previous <i class="flaticon-left-arrow"></i>', 'textdomain'),
								    'next_text'  => __('<i class="flaticon-right-arrow"></i> Next', 'textdomain'),
								));
							?>
                            </ul>
                        </nav>
                    </div> <!--- End pagination --->
						
					<?php   // For the blank post show //
					else: get_template_part('/template-parts/page/content', 'none'); 
					endif; // End post_loop 02 
						wp_reset_postdata();
					?>
                    </div><!-- blog_left_area -->
                </div><!-- col-md-8 -->
				
				
				<!--- Blog Sidebar --->
                <div class="col-md-4">
                    <div class="blog_right_side_area"> <!--- blog_right_area --->
					    <?php echo dynamic_sidebar('consult_main_sidebar');?>
                    </div> <!--- blog_right_area --->
                </div><!-- col-md-4 -->
				
				
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- END MAIN_BLOG -->
<?php get_footer();?> 
