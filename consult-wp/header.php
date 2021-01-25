<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <!-- meta data -->
    <meta charset="<?php bloginfo('charset');?>">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
    <title><?php echo esc_html('Home page | Consult', 'consult');?></title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head();?>	
</head>
<body <?php body_class();?>>

    <!--Start Preloader--
    <div class="preloader">
        <div class="preloader-inner-area">
            <div class="loader-overlay">
                <div class="l-preloader">
                    <div class="c-preloader"></div>
                </div>
            </div>
        </div>
    </div> 
    <!--End Preloader-->

    <header id="header" class="header_areaa">
        <nav class="navbar extended">
            <div class="nav-wrapper dark-wrapper inverse-text">
                <div class="container flex-it">
					<?php
						wp_nav_menu(array(
							'theme_location'   => 'head_menu',
							'container'        => 'div',
							'container_class'  => 'navbar-collapse collapse align-left',
							'menu'             => 'ul',
							'menu_class'       => 'nav navbar-nav',
							'depth'            => '10',
							'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
							'walker'           => new WP_Bootstrap_Navwalker()
						));
					?>
                    <div class="navbar-other">
                        <div class="align-right text-right">
                            <div class="navbar-brand">
							    <?php
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								if ( has_custom_logo() ) {
										echo '<a href="'. esc_url( home_url('/')).'"><img src="' . esc_url( $logo[0] ) . '" alt="' . esc_html__( 'Logo', 'themx' ) . '"/></a>';
								} else {
										echo '<a href="'. esc_url( home_url('/')).'"><h2 class="themx-site-title">'. esc_attr( get_bloginfo( 'name' )) . '</h2></a>';
								}	
							?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- /header -->