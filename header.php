<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/grid.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<title>
<?php
if(is_404())
{
	echo '404 Error: ';
}
?>
<?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?>
<?php if(is_home() || is_front_page())
{
	echo " | ";
	bloginfo('description');
}
?>
</title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
    	<header id="site-header">
        	<hgroup class="c6">
                <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="Home"><?php bloginfo('name'); ?></a></h1>
                <h2 id="site-description"><?php bloginfo('description'); ?></h2>
            </hgroup>
            <div class="c6">
            	<?php get_search_form(); ?>
            </div>
            <div class="clear"></div>
            <nav id="primary-nav">
            	<?php
			wp_nav_menu(
			array(
			'theme_location'=>'primary-menu',
			'container'=>'',
			'container_id'=>'',
			'container_class'=>'',
			'menu_id'=>'primary-menu',
			'depth'=>1
			)
			);
			?>
                <ul id="social-menu">
                	<li class="menu-item"><a href="#" id="facebook-link">Facebook</a></li>
                    <li class="menu-item"><a href="#" id="twitter-link">Twitter</a></li>
                    <li class="menu-item"><a href="#" id="rss-link">RSS</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </header>
        <div class="clear"></div>