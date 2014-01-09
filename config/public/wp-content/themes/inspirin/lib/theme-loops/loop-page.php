<?php /* Start loop */ ?>

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	<div class="ft-bpost">
		<header><h1 class="ft-ptitle entry-title"><?php the_title(); ?></h1></header>
		<div class="ft-boxct clearfix">
			<section class="ft-entry"><?php the_content(); ?></section>
			<div class="ft-breadcrumbs hidden"><?php echo ft_breadcrumbs(); ?></div>
		</div>
	</div>
</article>
	
<?php endwhile; // End the loop ?>