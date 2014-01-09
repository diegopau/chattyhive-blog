<?php global $smof_data; ?>
<style type="text/css">
	a, a:hover, .ft-rdtitle i { color: <?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>}
	#sidebar-left .widget ul li a, input[type="button"], input[type="submit"], #post-nav .pagination span, #post-nav .pagination a, .ft-rdposts, .ft-ftmenu, .ft-ptags a, a:hover.comment-reply-link { background:<?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
	.hentry a.more-link { background-color:<?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
	.widget_calendar table#wp-calendar thead > tr > th { background:<?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
	.widget_calendar th { border-right: 1px solid <?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
	.widget_calendar table > thead { border: 1px solid <?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
	.widget_calendar table > thead > tr { border-bottom: 1px solid <?php if(!empty($smof_data['ft_color_style'])): ?><?php echo $smof_data['ft_color_style']; ?><?php endif; ?>; }
</style>

<?php if(!empty($smof_data['ft_enable_custom_font'])): ?>
<?php if(!empty($smof_data['ft_headings_font'])): ?>
<link href='http://fonts.googleapis.com/css?family=<?php echo urlencode($smof_data['ft_headings_font']); ?>:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese' rel='stylesheet' type='text/css' />
<?php endif; ?>
<?php if(!empty($smof_data['ft_menus_font'])): ?>
<link href='http://fonts.googleapis.com/css?family=<?php echo urlencode($smof_data['ft_menus_font']); ?>:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese' rel='stylesheet' type='text/css' />
<?php endif; ?>
<?php if(!empty($smof_data['ft_top_article_font'])): ?>
<link href='http://fonts.googleapis.com/css?family=<?php echo urlencode($smof_data['ft_top_article_font']); ?>:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&amp;subset=latin,greek-ext,cyrillic,latin-ext,greek,cyrillic-ext,vietnamese' rel='stylesheet' type='text/css' />
<?php endif; ?>
<style type="text/css">
	h1,h2,h3,h4,h5,h6,.ct-logo{font-family:'<?php if(!empty($smof_data['ft_headings_font'])): ?><?php echo $smof_data['ft_headings_font']; ?><?php endif; ?>'!important;font-weight:<?php if(!empty($smof_data['ft_headings_font_weight'])): ?><?php echo $smof_data['ft_headings_font_weight']; ?><?php endif; ?>!important;}
	.ft-menu,.ft-ftmenu{font-family:'<?php if(!empty($smof_data['ft_menus_font'])): ?><?php echo $smof_data['ft_menus_font']; ?><?php endif; ?>'!important;font-weight:<?php if(!empty($smof_data['ft_menus_font_weight'])): ?><?php echo $smof_data['ft_menus_font_weight']; ?><?php endif; ?>!important;}
	.ft-rdposts{font-family:'<?php if(!empty($smof_data['ft_top_article_font'])): ?><?php echo $smof_data['ft_top_article_font']; ?><?php endif; ?>'!important;font-weight:<?php if(!empty($smof_data['ft_top_article_font_weight'])): ?><?php echo $smof_data['ft_top_article_font_weight']; ?><?php endif; ?>!important;}
</style>
<?php endif; ?>