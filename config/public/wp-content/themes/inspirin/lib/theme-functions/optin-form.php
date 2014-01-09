<?php global $smof_data; ?>

<?php if(!empty($smof_data['ft_enable_optin_form'])): ?>

<div class="ft-optin">

	<?php if(!empty($smof_data['ft_optin_title'])): ?><h5><?php echo esc_attr($smof_data['ft_optin_title']); ?></h5><?php endif; ?>

	<?php if(!empty($smof_data['ft_optin_text'])): ?><p><?php echo $smof_data['ft_optin_text']; ?></p><?php endif; ?>

	<?php if(!empty($smof_data['ft_optin_code'])): ?><?php echo $smof_data['ft_optin_code']; ?><?php endif; ?>

</div>

<?php endif; ?>