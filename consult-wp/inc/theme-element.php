<?php 
/*-------------------------------------------------------------------------
                               //HOME PAGE 
----------------------------------------------------------------------------*/

/* Slider section */
//--------------------------
function home_slider($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'content' => '',
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="">
        <?php echo do_shortcode('[metaslider id="308"]'); ?> <!-- [metaslider id="308"] -->
    </div><!-- END REVOLUTION SLIDER -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('rs_slider','home_slider');

/* One Section Services */
//--------------------------
function consult_home_one($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		    'about_section_title' => '',
		    'about_section_desc' => '',
		    'about_section_img' => '',
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="looking_for_specific_area">
        <div class="container">
            <div class="row">
			
			
			
                <div class="col-md-6">
                    <div class="looking_for_left para_default">
                        <h3><?php echo esc_html($about_section_title);?></h3>
                        <p><?php echo esc_html($about_section_desc);?></p>
					</div>
                </div>
				
                <div class="col-md-6">
                    <div class="looking_for_right image_fulwidth wow fadeInRight" data-wow-delay="300ms">
                        <?php
						$sce1_single_image =wp_get_attachment_image_src($about_section_img,'full'); //Single Image //
						if($sce1_single_image){ ?>
							 <img src="<?php echo esc_url($sce1_single_image[0]);?>">
						<?php } ?>
                    </div>
                </div>
				
				
				
            </div><!--row -->
        </div><!--container -->
    </div><!--looking_for_specific_area -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('home_one_base','consult_home_one');

/* Two Section Services */
//--------------------------
function consult_home_two($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'services_section_title' => '',
		
		'theme_services_group' => array(
		    'services_group_img' => '',
		    'services_group_title' => '',
		    'services_group_desc' => '',
		),
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="why_choose_us_area">
        <div class="container">
            <div class="row">
			
				<div class="item single_blog_item_div para_default text-center">
					<h2><a><?php echo esc_html($services_section_title);?></a></h2>
				</div>
				
				
				
				<?php 
				$theme_services_group = vc_param_group_parse_atts($attr['theme_services_group']);
				if($theme_services_group){
					foreach($theme_services_group as $s_key => $s_value){ ?>
				
                <div class="col-md-4 col-sm-6">
                    <div class="choose_us_single para_default image_fulwidth text-center wow fadeInLeft" data-wow-delay="300ms">
                        
						<?php
						$sce2_group_image =wp_get_attachment_image_src($s_value['services_group_img'],'full'); //group image //
						if($sce2_group_image){ ?>
							 <img src="<?php echo esc_url($sce2_group_image[0]);?>">
						<?php } ?>
						
                        <h3><?php echo esc_html($s_value['services_group_title']);?></h3>
                        <p><?php echo esc_html($s_value['services_group_desc']);?></p>
                    </div>
                </div><!--col-md-4 -->
				<?php }} ?>	
				
				
				
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('home_two_base','consult_home_two');

/* Three Section Works */
//--------------------------
function consult_home_three($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'work_section_title' => '',
		
		'theme_work_group' => array(
		    'work_icon_img' => '',
		    'work_group_title' => '',
		    'work_group_desc' => '',
		),
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="about_section_area">
        <div class="container-fluid">
            <div class="row">
			
				<div class="item single_blog_item_div para_default text-center">
					<h2><a><?php echo esc_html($work_section_title);?></a></h2>
				</div>
				
				
				<?php 
				$theme_work_group = vc_param_group_parse_atts($attr['theme_work_group']);
				if($theme_work_group){
				    foreach($theme_work_group as $s_key => $s_value){ ?>
				
                <div class="col-md-4 col-sm-6"> <!--- Home Work Section 03 --->
                    <div class="about_Single_item para_default text-center wow fadeInLeft" data-wow-delay="300ms">
                        <i class="<?php echo esc_attr($s_value['work_icon_img']);?>"></i>
                        <h3><?php echo esc_html($s_value['work_group_title']);?></h3>
                        <p><?php echo esc_html($s_value['work_group_desc']);?></p>
                    </div>
                </div><!--col-md-4 -->
				<?php }} ?>	
				
				
            </div><!--row -->
        </div><!--container-fluid -->
    </div><!--about_section_area -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('home_three_base','consult_home_three');

/* Four Section Blog */
//--------------------------
function consult_home_four($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'blog_section_title' => '',
		'blog_post_value' => '',
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="latest_blog_section_area removeBg_latest_blog">
        <div class="container">
            <div class="row">
			
			
			
				<div class="item single_blog_item_div para_default text-center">
					<h2><a><?php echo esc_html($blog_section_title);?></a></h2>
				</div>
				
				<?php 
				   $consult_blog_post = new WP_Query(array(
				   'post_type' => 'post',
				   'posts_per_page'=>$blog_post_value,
					
					));
			    if($consult_blog_post->have_posts()): while($consult_blog_post->have_posts()): $consult_blog_post->the_post(); ?> <!--- Start post_loop --->
				
                <div class="col-md-4"> <!--- Home Blog Section 04 --->
                    <div class="single_blog_h_active">
                        <div class="single_blog_item_area para_default image_fulwidth text-center">
                            <a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
                            <h4><?php echo get_the_date('j F Y');?></h4>
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php echo wp_trim_words(get_the_content(), 18);?></p>
                        </div>
					</div>
				</div>
				<?php endwhile; endif; ?> <!--- End post_loop --->
				
            
			
			</div>
        </div><!-- container-->
    </div><!-- latest_blog_section_area-->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('home_four_base','consult_home_four');

/*--------------------------------------------------------------------
            // CONTACT PAGE //
--------------------------------------------------------------------*/

/* Contact Form 7 Shortcode */
//--------------------------
function consult_contact_form($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'form_title' => '',
		
		),$attr)
	);
	
	ob_start();
	?>
	<div class="page_title_banner testimonial_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('Our team testimonials', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
	
    <div class="contact_page_get_start_area">
        <div class="container">
            <div class="row">
                <div class="make_an_appoinment_area get_start_areA">
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center"><?php echo esc_html($form_title);?></h3>
                    </div>
					
					
					<?php 
						include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
						if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) { 
						    echo  do_shortcode($content);
						}
					?>
                </div>
            </div><!--row-->
        </div><!--container-->
    </div><!--contact_page_get_start_area-->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('contact_form_two','consult_contact_form');

/*Consult Mailchimp */
//--------------------------
function consult_mailchimp($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'mailchimp_title' => '',
		
		),$attr)
	);
	
	ob_start();
	?>
    <div id="home1_newsletter">
        <div class="container">
            <div class="home1_newsletter">
                <div class="row">
				
                    
					<div class="col-md-7 col-sm-12">
                        <div class="home1_newsletter_text">
                            <h2 class="banner_effect"><?php echo esc_html($mailchimp_title);?></h2>
                        </div>
                    </div>
					
					<div class="col-md-5 col-sm-12">
                        <div class="home1_newsletter_input wow fadeInRight" data-wow-delay="300ms">
							
							<?php 
								include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
								if ( is_plugin_active( 'mailchimp-for-wp/mailchimp-for-wp.php' ) ) { 
									echo  do_shortcode($content);
								}
							?>
                        </div>
                    </div>
					
					
                </div>
            </div><!--home1_newsletter-->
        </div><!--container-->
    </div><!--home1_newsletter-->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('contact_mailchimp_three','consult_mailchimp');

//--------------------------------------------------------------------
                    // TESTIMONIAL PAGE //
//--------------------------------------------------------------------*/

/*Consult Testimonial */
//--------------------------
function consult_testimonial($attr, $content=null){
	
	extract(
		shortcode_atts(array(
			'theme_testi_group' => array(
				'testi_img' => '',
				'testi_desc' => '',
				'testi_star' => '',
				'testi_name' => '',
				'testi_expert' => '',
			),
		),$attr)
	);
	
	ob_start();
	?>
	<div class="page_title_banner testimonial_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('Our team testimonials', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
	
	<div class="Testimonials_section_area">
        <div class="container">
            <div class="row">
			
			    <?php 
				$theme_testi_group = vc_param_group_parse_atts($attr['theme_testi_group']);
				if($theme_testi_group){
					foreach($theme_testi_group as $testi_key => $testi_value){ ?>
			
                <div class="col-md-4 col-sm-6">
                    <div class="single_testimonial_promo_div para_default text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="img_testimonial">
                            <?php
								$testimonial_group_image =wp_get_attachment_image_src($testi_value['testi_img'],'full'); //group image //
								if($testimonial_group_image){ ?>
									 <img src="<?php echo esc_url($testimonial_group_image[0]);?>">
							<?php } ?>
                        </div>
                        <p><?php echo esc_html($testi_value['testi_desc']);?></p>
                        <div class="strat_count">
                            <span class="<?php echo esc_attr($testi_value['testi_star']);?>"></span>
                            <span class="<?php echo esc_attr($testi_value['testi_star']);?>"></span>
                            <span class="<?php echo esc_attr($testi_value['testi_star']);?>"></span>
                            <span class="<?php echo esc_attr($testi_value['testi_star']);?>"></span>
                            <span class="<?php echo esc_attr($testi_value['testi_star']);?>"></span>
                        </div>
                        <h5><?php echo esc_html($testi_value['testi_name']);?> <span><?php echo esc_html($testi_value['testi_expert']);?></span></h5>
                    </div>
                </div><!-- col-md-4 -->
				<?php }}?>
				
				
				
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- Testimonials_section_area -->
    <?php
	
	return ob_get_clean();
	
}
add_shortcode('theme_testimonial', 'consult_testimonial');

//--------------------------------------------------------------------
            // ABOUT PAGE //
//--------------------------------------------------------------------*/

/* About page */
//--------------------------
function consult_about_page($attr, $content=null){
	
	extract(
		shortcode_atts(array(
		'group_one' => '',
		'group_one_desc' => '',
		'group_one_img' => '',
			
		),$attr)
	);
	
	ob_start();
	?>
	<div class="page_title_banner not_found_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('About us page', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if (function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
	
	<div class="about_page_tab_section_area">
        <div class="container">
            <div class="row">
                <div class="about_us_tab_area">
                    <div class="tab_menu_s_p_two">
					
					
					
                        <div class="col-md-12">
                            <ul class="tab_button_service">
                                <li role="presentation" class="ta_button_Bg2 active">
                                    <a href="#Upwork" aria-controls="Freelancer" role="tab" data-toggle="tab">
                                     Our Mission</a>
                                </li>
								
                                <li role="presentation" class="ta_button_Bg2">
                                    <a href="#Freelancer" aria-controls="Freelancer" role="tab" data-toggle="tab">
                                    Our Vision</a>
                                </li>
                                <li role="presentation" class="ta_button_Bg3">
                                    <a href="#Desiagns" aria-controls="Desiagns" role="tab" data-toggle="tab">
                                    About Us</a>
                                </li>
                                <li role="presentation" class="ta_button_Bg3">
                                    <a href="#RESPONSIVE" aria-controls="Desiagns" role="tab" data-toggle="tab">
                                    Our History</a>
                                </li>
                            </ul>
                        </div>
						
						
						

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Upwork">
                                <div class="row">
                                    <div class="col-md-12">
									
                                        
										<div class="col-md-6">
                                            <div class="image_fulwidth wow fadeInLeft" data-wow-delay="300ms">
                                                <img src="<?php echo get_template_directory_uri();?>/images/our_vision_left_pic.jpg" alt="">
                                            </div>
                                        </div>
										
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>Our Mission</h3>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
                                                <ul class="list_for_type_of_visition">
                                                    <li><i class="fa fa-dot-circle-o"></i> Far far away, behind the word mountains, far from the countries</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Vokalia and Consonantia. Far far away, behind the word mountains,</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Separated they live in Bookmarksgrove right at the coast of the.</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> far from the countries Vokalia and Consonantia</li>
                                                </ul>
                                            </div>
                                        </div>
										
										
										
                                    </div>
                                </div>
                            </div>
                        
						
						    <div role="tabpanel" class="tab-pane fade" id="Freelancer">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="image_fulwidth">
                                                <img src="<?php echo get_template_directory_uri();?>/images/our_vision_left_pic04.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>Our Vision</h3>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five.</p>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Desiagns">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="image_fulwidth">
                                                <img src="<?php echo get_template_directory_uri();?>/images/our_vision_left_pic05.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>About Us</h3>
                                                
                                                <ul class="list_for_type_of_visition">
                                                    <li><i class="fa fa-dot-circle-o"></i> Far far away, behind the word mountains, far from the countries</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Vokalia and Consonantia. Far far away, behind the word mountains,</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> Separated they live in Bookmarksgrove right at the coast of the.</li>

                                                    <li><i class="fa fa-dot-circle-o"></i> far from the countries Vokalia and Consonantia</li>
                                                </ul>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="RESPONSIVE">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="image_fulwidth">
                                                <img src="<?php echo get_template_directory_uri();?>/images/our_vision_left_pic03.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>Our History</h3>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five.</p>

                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						
						
						</div>
                    </div>
                </div><!--about_us_tab_area-->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- about_page_tab_section_area -->
	<?php 
	return ob_get_clean();
	
}
add_shortcode('theme_About_adonn', 'consult_about_page');

//--------------------------------------------------------------------
            // PORTFOLIO PAGE //
//--------------------------------------------------------------------*/

/* Portfolio Page */
//--------------------------
function consult_section_portfolio($attr,$content=null){
	
	extract(
	    shortcode_atts(array(
            'portfolio_post_per'=>'',
	
	    ),$attr)
	);
	
	ob_start();
	
	?>
	<div class="page_title_banner not_found_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2 class="banner_effect"><?php echo esc_html('About us page', 'consult');?></h2>
                <ul class="breadcrumb">
				<?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb();?>
                </ul>
            </div>
        </div><!--container-->
    </div><!--page_title_banner-->
	
	
	
	<div id="consultancy_masonery" class="portfolio_section_area">
        <div class="container">
            <div class="consultancy_masonery_menu">
                <a class="active" data-filter="*"><span class="text"><?php echo esc_html('All', 'consult');?></span></a>
				<?php
				$terms = get_terms('Portfolio');
				foreach($terms as $term ){ ?>
					<a data-filter=".<?php echo $term->slug;?>"><span class="text"><?php echo $term->name;?></span></a>
					
				<?php } ?>
            </div>
			

            <div class="consultancy_masonery text-center">
                <div class="consultancy_masonery_container text-center">
                    <div class="consultancy_masonery_sizer"></div>
					
					<?php 
					$consult_portfolio_post =new WP_Query(
					    array(
						    'post_type'=>'portfolio',
						    'taxonomy'=>'Portfolio',
						    'post_per_page'=>$portfolio_post_per,
					    ));
					  
					if($consult_portfolio_post->have_posts()):while($consult_portfolio_post->have_posts()):$consult_portfolio_post->the_post();
					?>
					  
					<?php
					$portfolio_var = get_post_meta(get_the_ID(), '_portfolio_setting', true );
                                                
                    $att_ID=get_post_thumbnail_id(get_the_ID());

					$terms = get_the_terms( get_the_ID(), 'Portfolio' );
                         
					if ( $terms && ! is_wp_error( $terms ) ) : 
						 
						$draught_links = array();
						 
						foreach ( $terms as $term ) {
							$draught_links[] = $term->slug;
						}
												 
						$on_draught = join( " ", $draught_links );
											  
					?>
                    <div class="consultancy_masonery_item consultancy_masonery_item--<?php echo $portfolio_var['port_image_size'];?> <?php echo $on_draught; ?>">
                        <a href="<?php echo esc_url(wp_get_attachment_url($att_ID)); ?>">
                            <?php the_post_thumbnail();?>
                        </a>
                    </div><!-- consultancy_masonery_item -->
					
					
					
					<?php endif; ?>
					<?php endwhile; endif; ?>
                </div><!--.consultancy_masonery_container-->
            </div><!--.portfolio2-->
			
        </div><!--#portfolio2-->
    </div><!--#portfolio2-->
	   
	
	
	
	<?php
	return ob_get_clean();
	
}
add_shortcode('theme_portfolio_adonn','consult_section_portfolio');




?>