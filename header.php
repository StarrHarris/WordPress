<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!--Begin Meta-->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

    
<!--Begin Title-->    
<title><?php bloginfo('name');?> <?php wp_title();?></title>

<!--Begin Styles-->      
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">

<!--Start WP Head-->
<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    

	<header id="masthead" class="site-header" role="banner">
        
        <div id="logo"> <a href="http://www.starrharris.com"><img src="<?php bloginfo('template_directory'); ?>/images/starrharrislogo.png" alt="Starr Harris Logo"></a></div>
    
        <img id="colorbar" src="<?php bloginfo('template_directory'); ?>/images/colorbars.png" alt="RGBCMYK Color Bar">
		

		<nav id="main-menu" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lastchance' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

