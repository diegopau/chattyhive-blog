<?php /* Start loop */ ?>

<?php while (have_posts()) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="ft-bpost">
		<header><h2 class="ft-ptitle entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></header>
		<div class="ft-bmeta"><span class="ft-author vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span> - <span class="ft-time"><time class="updated" datetime="<?php the_time('F, jS Y'); ?>"><?php the_time('F j, Y'); ?></time></span> - <span class="ft-categories"><?php the_category(', '); ?></span></div>
		<section class="ft-entry"><?php the_content(__('Continue Reading','ft')); ?></section>
		<div class="comment_number"><?php comments_number( '&nbsp;', '1 comment', '% comments' ); ?></div>		
	</div>
</article>

<?php endwhile; // End the loop ?>