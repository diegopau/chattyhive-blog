<?php

function ft_load_randomposts_widget()
{
	register_widget( 'FT_Randomposts' );
}

add_action('widgets_init', 'ft_load_randomposts_widget');


/* ==  Widget ==============================*/
class FT_Randomposts extends WP_Widget {


/* ==  Widget Setup ==============================*/	

	function FT_Randomposts() {
	
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'ft_randomposts_widget ft-scrollbar', 'description' => __('A widget that displays random posts.', 'ft') );

		/* Widget control settings. */
		$control_ops = array( 'id_base' => 'ft_randomposts_widget' );

		/* Create the widget. */
		$this->WP_Widget( 'ft_randomposts_widget', __('WFT - Random Posts', 'ft'), $widget_ops, $control_ops );
	}


/* ==  Display Widget ==============================*/

	function widget( $args, $instance ) {
	
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$number = $instance['number'];

		/* Before widget (defined by themes). */
		echo $before_widget;

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title ) {
			echo $before_title . $title . $after_title;
		}

		?>
		
		<?php $ran_posts = new WP_Query(array('showposts' => $number,'post__not_in' => get_option( 'sticky_posts' ),'orderby'=> 'rand')); ?>

		<?php if ($ran_posts->have_posts()) : ?>
					
		<?php while($ran_posts->have_posts()): $ran_posts->the_post(); global $post; ?>

        <article id="post-<?php the_ID(); ?>-recent" class="ft-wpost clearfix">
			<div class="ft-fimg clearfix"><?php if ( has_post_thumbnail() ) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('sidebar'); ?></a><?php endif; ?></div>
			<p class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
		</article>	
         		
		<?php endwhile; ?>

		<?php endif; ?>

		<?php wp_reset_query(); ?>
		
		<?php 

		/* After widget (defined by themes). */
		echo $after_widget;
	}



/* ==  Update Widget ==============================*/
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = $new_instance['number'];

		/* No need to strip tags for.. */

		return $instance;
	}
	
	
	
/* ==  Widget Settings ==============================*/
	
	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	 
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array(
			'title' => 'Random Posts',
			'number' => '4'
		);
		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'ft') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
		</p>
		
		<!-- Widget Number: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e('Number:', 'uxe') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" value="<?php echo $instance['number']; ?>" />
		</p>

		
	<?php
	}
}