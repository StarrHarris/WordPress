<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
        <?php bloginfo('name');?> 
    </title>
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    
 <!-- scripts-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    
</head>
<!--<body <?php body_class();?>> this is my original html body start...-->
<header>
    
<!--logo--> 
    
<div class="logo">
<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/starrharrislogo.png" alt="Starr Harris Logo"></a>
</div>
    
<!--bar-->
<br>
<br>
<br>
<br>    
    
    
<img src="<?php echo get_template_directory_uri(); ?>/images/colorbars.png" alt="Image RGB CMYK Color Bar">    

    
<br>

    
<!--MAIN NAVIGATION-->    
<?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>    

<div id="cssmenu" class="align-right">
  <ul>
      <?php wp_nav_menu( array( 'menu' => 'Main Nav') ); ?>
  </ul>
</div>

</header>
