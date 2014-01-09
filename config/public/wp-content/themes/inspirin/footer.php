<?php global $smof_data; ?>
<footer id="footer">
	<div class="ft-rdposts clearfix">
		<div class="wrapper clearfix">
		<div class="ft-rdtitle">
			<i class="icon-star-empty"></i>
			<p><?php _e('Top Article', 'ft'); ?></p>
			<span><?php _e('Don\'t Miss', 'ft'); ?></span>
		</div>
		<div class="ft-rdpost">
			<?php query_posts('showposts=1&orderby=rand&ignore_sticky_posts=1'); the_post(); ?>
			<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title_limit( 65, '...'); ?></a></p>
			<span><?php _e('On', 'ft'); ?> <time class="updated meta-button" datetime="<?php the_time('F j, Y'); ?>" pubdate> <?php the_time('F j, Y'); ?></time> <?php _e('With', 'ft'); ?> <?php comments_popup_link(__('0 Comments', 'ft'), __('1 Comment', 'ft'), '% '.__('Comments', 'ft')); ?></span>
			<?php wp_reset_query(); ?> 
		</div>
		</div>
	</div>
	<div class="wrapper clearfix">
		<div class="ft-widgets clearfix">
			<?php dynamic_sidebar("Footer Widgets"); ?>
		</div>
	</div>
	<div class="ft-ftmenu clearfix">
		<div class="wrapper">
			<?php if ( has_nav_menu( 'footer_navigation' ) ): ?>
			<?php wp_nav_menu( array('theme_location' => 'footer_navigation','container' => false,'menu_class' => 'footermenu','echo' => true,'before' => '','after' => '','link_before' => '','link_after' => '','depth' => 3,'items_wrap' => '<ul class="footermenu">%3$s</ul>')); ?>
			<?php else: ?>
			<p class="ft-ftnomenus">Please Setup Your Menus : Dashboard -> Appearance -> Menus</p>
			<?php endif; ?>
		</div>
	</div>
	<div class="ft-copyright clearfix">
		<div class="wrapper">
			<div class="ft-cptext"><?php if(!empty($smof_data['ft_footer_text'])): ?><?php echo $smof_data['ft_footer_text']; ?><?php endif; ?></div>
			<div class="ft-cplogo"><?php _e('Powered by Wordpress. Designed by','ft') ?> <a target="_blank" href="http://www.famethemes.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/copyright/famethemes.png" width="48" height="25" atl="FameThemes" /></a></div>
		</div>
	</div>
</footer>

</div>

<aside class="ft-backtop">
	<div class="back-top">
		<a href="#top">
			<span><i class="icon-arrow-up"></i></span>
		</a>
	</div>
</aside>
				
<?php wp_footer(); ?>

<?php if(!empty($smof_data['ft_google_analytics'])): ?><?php echo $smof_data['ft_google_analytics']; ?><?php endif; ?>

</body>
</html>