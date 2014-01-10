<?php global $smof_data; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="generator" content="Inspirin Theme By FameThemes" />
	<?php if(!empty($smof_data['ft_favicon'])): ?><link rel="shortcut icon" href="<?php echo esc_url($smof_data['ft_favicon']); ?>" type="image/x-icon" /><?php endif; ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

<header id="header">
	<div class="wrapper clearfix cabecera">
		<div class="ft-lheader">
			<a class="ft-jpbutton" href="#menu"><i class="icon-reorder"></i></a>	
			<div class="ft-logo">
				<?php if(!empty($smof_data['ft_logo'])): ?><?php if(is_home() || is_front_page()) : ?>
				<h1 class="ct-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url($smof_data['ft_logo']); ?>" width="<?php if(!empty($smof_data['ft_logo_width'])): ?><?php echo esc_attr($smof_data['ft_logo_width']); ?><?php endif; ?>" height="<?php if(!empty($smof_data['ft_logo_height'])): ?><?php echo esc_attr($smof_data['ft_logo_height']); ?><?php endif; ?>" alt="<?php bloginfo('name'); ?>" /></a></h1>
				<?php else: ?>
				<div class="ct-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url($smof_data['ft_logo']); ?>" width="<?php if(!empty($smof_data['ft_logo_width'])): ?><?php echo esc_attr($smof_data['ft_logo_width']); ?><?php endif; ?>" height="<?php if(!empty($smof_data['ft_logo_height'])): ?><?php echo esc_attr($smof_data['ft_logo_height']); ?><?php endif; ?>" alt="<?php bloginfo('name'); ?>" /></a></div>
				<?php endif; ?><?php else: ?><?php if(is_home() || is_front_page()) : ?>
				<h1 class="ct-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
				<?php else: ?>
				<div class="ct-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></div>
				<?php endif; ?>
				<?php endif; ?>		
			</div>
		</div>
		<div class="ft-rheader">
			<div class="ft-menu">
				<?php if ( has_nav_menu( 'primary_navigation' ) ): ?>
				<?php wp_nav_menu( array('theme_location' => 'primary_navigation','container' => false,'menu_class' => 'primenu','echo' => true,'before' => '','after' => '','link_before' => '','link_after' => '','depth' => 3,'items_wrap' => '<ul class="primenu">%3$s</ul>')); ?>
				<?php else: ?>
				<p class="ft-nomenus">Please Setup Your Menus : Dashboard --> Appearance --> Menus</p>
				<?php endif; ?>
			</div>
			<div class="ft-icons">
				<ul>
					<?php if(!empty($smof_data['ft_rss'])): ?><li class="ft-rss"><a target="_blank" href="<?php echo esc_url($smof_data['ft_rss']); ?>"><i class="icon-rss"></i></a></li><?php endif; ?>
					<?php if(!empty($smof_data['ft_twitter'])): ?><li class="ft-twitter"><a target="_blank" href="http://twitter.com/<?php echo esc_attr($smof_data['ft_twitter']); ?>"><i class="icon-twitter"></i></a></li><?php endif; ?>
					<?php if(!empty($smof_data['ft_facebook'])): ?><li class="ft-facebook"><a target="_blank" href="<?php echo esc_url($smof_data['ft_facebook']); ?>"><i class="icon-facebook"></i></a></li><?php endif; ?>
					<?php if(!empty($smof_data['ft_google_plus'])): ?><li class="ft-google"><a target="_blank" href="<?php echo esc_url($smof_data['ft_google_plus']); ?>"><i class="icon-google-plus"></i></a></li><?php endif; ?>
					<li><a class="search-bt" href="#"><i class="icon-search"></i></a></li>
				</ul>
				<div class="ft-search-hide"><?php get_search_form( true ); ?><div class="ft-shbg"></div></div>
			</div>
		</div>
	</div>			
</header>

<div class="container">
