<?php global $smof_data; ?>

<?php if(!empty($smof_data['ft_social_share'])): ?>

<div class="ft-share">		
	<ul>
		<li class="ft-stwitter"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>&tw_p=tweetbutton&url=<?php the_permalink(); ?>&via=<?php if(!empty($smof_data['ft_twitter'])): ?><?php echo esc_attr($smof_data['ft_twitter']); ?><?php endif; ?>"><i class="icon-twitter"></i>Tweet</a></li>
		<li class="ft-sfacebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-facebook"></i>Like It</a></li>
		<li class="ft-sgoogle"><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-google-plus"></i>Google +</a></li>
		<li class="ft-slinkedin"><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title_attribute(); ?>&source=<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-linkedin"></i>Linkedin</a></li>
		<li class="ft-spinterest"><a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?><?php echo $image[0]; ?><?php endif; ?>&description=<?php the_title_attribute(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="icon-pinterest"></i>Pinterest</a></li>	
	</ul>
</div>

<?php endif; ?>