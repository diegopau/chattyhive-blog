<?php get_header(); ?>

<main id="main">
	<div class="wrapper clearfix">
		<div class="content-wrapper">
			<div class="content-grid">
				<?php get_sidebar( 'left' ); ?>
				<div id="content" role="main">
					<?php get_template_part('lib/theme-loops/loop', 'page'); ?>
				</div>
			</div>
		</div>
		<?php get_sidebar('right'); ?>
	</div>
</main>
		
<?php get_footer(); ?>