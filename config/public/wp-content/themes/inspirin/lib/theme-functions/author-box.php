<?php global $smof_data; ?>

<?php if(!empty($smof_data['ft_enable_author_box'])): ?>
<div class="ft-bauthor">
	<div class="ft-atava">
		<?php echo get_avatar( get_the_author_meta('email'), '90' ); ?>
	</div>
	<div class="ft-atinfo">
		<div class="vcard author ft-attitle"><h4><span class="fn"><?php the_author_link(); ?></span></h4></div>
		<div class="ft-atdescr"><p><?php the_author_meta('description'); ?></p></div>
	</div>
</div>
<?php endif; ?>