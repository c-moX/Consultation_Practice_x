<?php 

function consult_intrigation(){
/*-----------------------------------------------------------------------
	                // HOME PAGE //
---------------------------------------------------------------------------*/
	
	/* Slider Section */
	//--------------------------
	vc_map(array(
		
		"name" => __("Slider", "consult"),
		"description" => "This Is Our Slider Addons",
		"base" => "rs_slider",
		"category" => "Consult  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(
		
			array(
				'param_name' => 'content',
				'type'       => 'textarea_html',
				'heading'    => 'Slider shortcode Past Here!',
				'value'      => '',
			),
		),
	));	

	/* One Section About */
	//--------------------------
	vc_map(array(
		
		"name" => __("About (01)", "consult"),
		"description" => "This Is Our About Addons",
		"base" => "home_one_base",
		"category" => "Consult  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(
		
			array(
				'param_name' => 'about_section_title',
				'type'       => 'textfield',
				'heading'    => 'Write section title',
				'value'      => '',
			),
			array(
				'param_name' => 'about_section_desc',
				'type'       => 'textarea_html',
				'heading'    => 'Write section description',
				'value'      => '',
			),
			array(
				'param_name' => 'about_section_img',
				'type'       => 'attach_image',
				'heading'    => 'Add image',
				'value'      => '',
			),
		),
	));
	
	/* Two Section Services */
	//--------------------------
	vc_map(array(
		
		"name" => __("Services (02)", "consult"),
		"description" => "This Is Our Services Addons",
		"base" => "home_two_base",
		"category" => "Consult  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(
		
			array(
				'param_name' => 'services_section_title',
				'type'       => 'textfield',
				'heading'    => 'Write section title',
				'value'      => '',
			),
			
			array(
			    'param_name'=> 'theme_services_group',
			    'type'      => 'param_group',
				'group'     => esc_html__('Services group','consult'),
				'heading'   => esc_html__('Services group customaization', 'consult'),
			    'params' => array(
				    
					array(
					    'param_name' => 'services_group_img',
						'type' => 'attach_image',
						'heading' => 'Add image',
						'value' => '',
					),
					array(
					    'param_name' => 'services_group_title',
						'type' => 'textfield',
						'heading' => 'Write group title',
						'value' => '',
					),
					array(
					    'param_name' => 'services_group_desc',
						'type' => 'textarea',
						'heading' => 'Write group description',
						'value' => '',
					),
				),
			),
			
		),
		
	));
	
	/* Three Section Works */
	//--------------------------
	vc_map(array(
		
		"name" => __("Works (03)", "consult"),
		"description" => "This Is Our Works Addons",
		"base" => "home_three_base",
		"category" => "Consult  (HM)",
		"icon" => get_template_directory_uri()."/images/favicon.ico",
		"params" => array(
		
			array(
				'param_name' => 'work_section_title',
				'type'       => 'textfield',
				'heading'    => 'Write section title',
				'value'      => '',
			),
			// Group icon/image Start //
			array(
				'param_name' => 'theme_work_group',
				'type'       => 'param_group',
				'group'      =>esc_html__('Works group','consult'),
				'heading'    =>esc_html__('Works group customaization', 'consult'),
				'params' => array(
					
					array(
					    'param_name' => 'work_icon_img',
					    'type' => 'iconpicker',
					    'heading' => 'Add icon',
					    'value' => '',
					),
					array(
						'param_name' => 'work_group_title',
						'type'       => 'textfield',
						'heading'    => 'Write title',
						'value'      => '',
					),
					array(
						'param_name' => 'work_group_desc',
						'type'       => 'textarea',
						'heading'    => 'Write description',
						'value'      => '',
					),
					
				),
			),
		
		),
	));
	
	/* Four Section Blog */
	//--------------------------
	vc_map(array(
		
		"name"  => __("Blog (04)", "consult"),
		"description" => "This Is Our Blog Addons",
		"base"     => "home_four_base",
		"category" => "Consult  (HM)",
		"icon"     => get_template_directory_uri()."/images/favicon.ico",
		"params"   => array(
		
		    array(
			    'param_name' => 'blog_section_title',
			    'type'       => 'textfield',
			    'heading'    => 'Blog post title',
			    'value'      => '',
			),
			array(
			    'param_name' => 'blog_post_value',
			    'type'       => 'textfield',
				'admin_label'=> true,
			    'heading'    => esc_html__( 'Post per page ', 'consult' ),
				'description'=> esc_html__( 'Set the number of post showed in per page', 'consult' ),
				'value'      => 3,
			),
		),
	));
	
/*--------------------------------------------------------------------
                    // CONTACT PAGE //
--------------------------------------------------------------------*/
	
	// Contact Form 7 
	//-----------------
	vc_map(array(

		'name'=>'Contact Form',
		'description'=>'This Is Contact Form 7',
		'base'=>'contact_form_two',
		'category'=>'Contact(cnt)',
		'icon'=>get_template_directory_uri().'/images/favicon.ico',
		'params'=>array(
		
			array(
				'param_name' => 'form_title',	
				'type' 		 => 'textfield',
				'group'      => 'form_mail',
				'heading' 	 => 'Contact Form 7 title',
				'value'      =>'Ready to Get Started?',
			),
			array(
				'param_name' => 'content',	
				'type' 		 => 'textarea_html',
				'group'      => 'form_mail',
				'heading' 	 => esc_html__('Form Shortcode here', 'consult'),
				'value'      =>'',
			),
		),
	));
	
	// Mailchimp 
	//------------
    vc_map(array(

		'name'=>'Mailchimp',
		'description'=>'This Is Contact Page',
		'base'=>'contact_mailchimp_three',
		'category'=>'Contact(cnt)',
		'icon'=>get_template_directory_uri().'/images/favicon.ico',
		'params'=>array(
		
			array(
				'param_name' => 'mailchimp_title',	
				'type' 		 => 'textfield',
				'group'      => 'form_mail',
				'heading' 	 => 'Mailchimp title',
				'value'      =>'Sing Up for Newsletter!',
			),
			array(
				'param_name' => 'content',	
				'type' 		 => 'textarea_html',
				'group'      => 'form_mail',
				'heading' 	 => esc_html__('Mailchimp Shortcodehere', 'consult'),
				'value'      =>'',
			),
     	),
	));
	
/*---------------------------------------------------------------------
	                        //TESTIMONIAL PAGE //
-------------------------------------------------------------------------------*/
	
	// Testimonial 
	//---------------
    vc_map(array(

		'name'=>'Testimonial',
		'description'=>'This Is Testimonial Page',
		'base'=>'theme_testimonial',
		'category'=>'Testimonial(cnt)',
		'icon'=>get_template_directory_uri().'/images/favicon.ico',
		'params'=>array(
		
			array(
				'param_name' => 'theme_testi_group',	
				'type' 		 => 'param_group',
				'group'      => esc_html__('Testimonilx', 'consult'),
				'heading'    => esc_html__('Testimonial group customaization', 'consult'),
				'params'     =>array(
				
				    array(
					    'param_name' => 'testi_img',
						'type'       => 'attach_image',
						'heading'    => 'Add image',
						'value'      => '',  
					),
					array(
					    'param_name' => 'testi_desc',
						'type'       => 'textarea',
						'heading'    => 'Persion description',
						'value'      => '',  
					),
					array(
					    'param_name' => 'testi_star',
						'type'       => 'iconpicker',
						'heading'    => 'Add icon',
						'value'      => '',  
					),
					array(
					    'param_name' => 'testi_name',
						'type'       => 'textfield',
						'heading'    => 'Persion name',
						'value'      => '',  
					),
					array(
					    'param_name' => 'testi_expert',
						'type'       => 'textfield',
						'heading'    => 'Persion expertist',
						'value'      => '',  
					),
				),
			),
		),
	));
	
/*---------------------------------------------------------------------
	                        //ABOUT PAGE //
-------------------------------------------------------------------------------*/
	
	// Testimonial Page
	//--------------------
    vc_map(array(

		'name'=>'About group',
		'description'=>'This Is About group Page',
		'base'=>'theme_About_adonn',
		'category'=>'About(cnt)',
		'icon'=>get_template_directory_uri().'/images/favicon.ico',
		'params'=>array(
		
			array(
				'param_name' => 'theme_about_group_one',
				'type'       => 'param_group',
				'group'      => esc_html__('Group 1', 'consult'),
				'heading'    => esc_html__('About group 1 customaization', 'consult'),
				'params'     =>array(
				
				    array(
					    'param_name' => 'group_one',
						'type'       => 'textfield',
						'heading'    => 'Group1 heading',
						'value'      => '',  
					),
					array(
					    'param_name' => 'group_one_img',
						'type'       => 'attach_image',
						'heading'    => 'Add image',
						'value'      => '',  
					),
					array(
					    'param_name' => 'group_one_desc',
						'type'       => 'textarea',
						'heading'    => 'Group1 description',
						'value'      => '',  
					),
				),
			),
		),
	));
	
/*---------------------------------------------------------------------
	                        //PORTFOLIO PAGE //
-------------------------------------------------------------------------------*/

    // Portfolio Page 
	//---------------
    vc_map(array(

		'name'=>'Portfolio',
		'description'=>'This Is Portfolio Page',
		'base'=>'theme_portfolio_adonn',
		'category'=>'Portfolio(cnt)',
		'icon'=>get_template_directory_uri().'/images/favicon.ico',
		'params'=>array(
		
			array(
			    'param_name' => 'portfolio_post_per',
			    'type' => 'textfield',
			    'heading' => 'Post per page',
			    'value' => 12,
			),
			
			/* array(
				'param_name' => 'theme_portfolio_group',	
				'type' 		 => 'param_group',
				'group'      => esc_html__('About', 'consult'),
				'heading'    => esc_html__('About group customaization', 'consult'),
				'params'     =>array(
				
				    array(
					    'param_name' => '',
						'type'       => '',
						'heading'    => '',
						'value'      => '',  
					),
				),
			), */
		),
	));


	

}
add_action('vc_before_init','consult_intrigation');

?>