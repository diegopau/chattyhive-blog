<?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author')); ?>

<div class="ft-bauthor">
	<div class="ft-atava">
		<?php echo get_avatar( $curauth->user_email, '90' ); ?>
	</div>
	<div class="ft-atinfo">
		<div class="vcard author ft-attitle"><h4><span class="fn"><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->display_name; ?></a></span></h4></div>
		<div class="ft-atdescr"><p><?php echo $curauth->description; ?></p></div>
	</div>
</div>