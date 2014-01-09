<?php get_header(); ?>

<main id="main">
<div class="wrapper clearfix">
	<div class="content-wrapper">
		<div class="content-grid">
			<?php get_sidebar( 'left' ); ?>
			<div id="content" role="main">
				<article id="post-404" class="hentry error-page">
					<div class="ft-bpost clearfix">
						<h1 class="ft-ptitle entry-title" style="margin-bottom:25px;"><?php _e('Page Not Found', 'ft'); ?></h1>
						<p><?php _e('Unfortunately, the page you\'ve requested cannot be displayed. It appears that you\'ve lost your way either through an outdated link or a typo on the page you were trying to reach. Please feel free to return to the front page or use the search box in the upper area of the page to find the information you were looking for. We are very sorry for any inconvenience.','ft'); ?></p>
						<?php get_search_form( true ); ?>
					</div>
				</article>
			</div>
		</div>
	</div>
	<?php get_sidebar('right'); ?>
</div>
</main>
		
<?php get_footer(); ?>