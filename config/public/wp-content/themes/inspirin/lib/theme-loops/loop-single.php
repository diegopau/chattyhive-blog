<?php /* Start loop */ ?><?php global $smof_data; ?>
<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single'); ?>>
	<div class="ft-bpost">
		<header><h1 class="ft-ptitle entry-title"><?php the_title(); ?></h1></header>
		<div class="ft-bmeta"><span class="ft-author vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span> - <span class="ft-time"><time class="updated" datetime="<?php the_time('F, jS Y'); ?>"><?php the_time('F j, Y'); ?></time></span> - <span class="ft-categories"><?php the_category(', '); ?></span></div>
		<?php include get_template_directory() . '/lib/theme-functions/theme-share.php'; ?>
		<div class="ft-boxct">
			<section class="ft-entry"><?php the_content(); ?></section>
			<?php wp_link_pages('before=<div id="ft-pagelinks">&after=</div>'); ?>
		</div>
		<div class="ft-ptags"><strong><?php _e('Post Tags', 'ft'); ?>:</strong><?php the_tags( '','','' ); ?></div>
		<?php include get_template_directory() . '/lib/theme-functions/optin-form.php'; ?>
		<?php include get_template_directory() . '/lib/theme-functions/author-box.php'; ?>
		<?php include get_template_directory() . '/lib/theme-functions/related-posts.php'; ?>
		<div class="ft-breadcrumbs hidden"><?php echo ft_breadcrumbs(); ?></div>
		<div class="ft-boxcm"><?php comments_template(); ?></div>
		<div class="ft-pnav">
			<span class="nav-previous"><?php previous_post_link('%link', __( '&larr; Previous Post', 'ft' ) ); ?></span>
			<span class="nav-next"><?php next_post_link('%link', __( 'Next Post &rarr;', 'ft' ) ); ?></span>
		</div>
	</div>
</article>

<?php endwhile; // End the loop ?>