<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<main id="main">
<div class="wrapper clearfix">
	<div id="content" role="main" style="margin-left:0!important;width:100%!important;border-right:none!important;" class="full-width">
		<div class="post-box">
			<?php while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
					<header><h1 class="ft-ptitle entry-title"><?php the_title(); ?></h1></header>
					<div class="ft-boxct clearfix">
						<section class="ft-entry"><?php the_content(); ?></section>
						<div class="ft-breadcrumbs hidden"><?php echo ft_breadcrumbs(); ?></div>
					</div>
				</article>
			<?php endwhile; // End the loop ?>
		</div>
	</div>
</div>
</main>
		
<?php get_footer(); ?>