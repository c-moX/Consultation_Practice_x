<?php

function consult_blog_sidebar() {
    register_sidebar(array(
	    'name'          => __( 'Main Sidebar', 'consult'),
	    'id'            => 'consult_main_sidebar',
	    'description'   => __( 'This Is Our Drag and Drop Blog Right Sidebar', 'consult' ),
		'before_widget' => '<div class="blog_right_widget blog_widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="blog_widget_title">',
		'after_title'   => '</h3>',
	))
	
	;register_sidebar(array(
	    'name'          => __( 'Footer Sidebar', 'consult'),
	    'id'            => 'consult_footer_sidebar',
	    'description'   => __( 'This Is Our Drag and Drop Footer one Sidebar', 'consult' ),
		'before_widget' => '<div class="col-md-3 col-sm-6 footer_widget footer_widget_content para_default">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h4 class="widget_title">',
	    'after_title'   => '</h4>',
	));


}
add_action('widgets_init', 'consult_blog_sidebar');


// consult - Recent Post Custom Widget
class consult_rcnt_post extends WP_Widget {

	// UpName Or Register Widgets
	function __construct() {
		parent::__construct(
			'consult_rcnt_post', // Base ID
			esc_html__( 'Consult - Recent Post', 'consult' ), 
			array( 'description' => esc_html__( 'This is custom recent post style', 'consult' ), ) // Args
		);
	}
	
	//In form Name 
	public function form( $instance ) {
		$recent_post_title = ! empty( $instance['recent_post_title'] ) ? $instance['recent_post_title'] : esc_html__( '', 'consult' );
		?>
		<p>
		    <label for="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>"><?php esc_attr_e( 'Title:', 'consult' ); ?></label> 
		    <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'recent_post_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'recent_post_title' ) ); ?>" type="text" value="<?php echo esc_attr( $recent_post_title ); ?>">
		</p>
		<?php 
	}

	//Custom Widgets Style 
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['recent_post_title'] ) ) {
			echo $args['before_title'] . apply_filters( 'recent_post_title', $instance['recent_post_title'] ) . $args['after_title'];
		} ?>
		<div class="project_div clearfix">
		<?php 
		query_posts('post_type=post&posts_per_page=6');
		if(have_posts()) : while(have_posts()) : the_post();
		?>
			<figure class="image">
				<a href="<?php the_permalink(); ?>">
				    <?php if( has_post_thumbnail() ) the_post_thumbnail('consult-recent-post');?> <!--- Rcent-Post-Img --->
				</a>
			</figure>
			
			<?php endwhile; endif;?>
		</div>
		<?php
		echo $args['after_widget'];
	}

	//For Save/Updated 
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['recent_post_title'] = ( ! empty( $new_instance['recent_post_title'] ) ) ? strip_tags( $new_instance['recent_post_title'] ) : '';

		return $instance;
	}

	
}
function consult_recent_post() {
	register_widget( 'consult_rcnt_post' );
}

add_action( 'widgets_init', 'consult_recent_post' );







