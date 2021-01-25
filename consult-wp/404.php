<?php get_header();?>     
    <div class="page_title_banner not_found_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('404', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->

    <div class="page_area_404">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content404 text-center">
                        <h2><?php echo esc_html('4', 'consult');?><i class="fa fa-frown-o"></i><?php echo esc_html('4', 'consult');?></h2>
                        <h3><?php echo esc_html('Sorry! The Page Not Found', 'consult');?></h3>
                        <p><?php echo esc_html('The page you were looking for could not be found.', 'consult');?></p>
                        <div class="send_me_ph">
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="submit_btn_quick_contact"><?php echo esc_html('Back To Home', 'consult');?></a>
						</div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- page_area_404 -->
<?php get_footer();?> 
