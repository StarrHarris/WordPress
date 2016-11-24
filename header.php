<!doctype html>
<html>
<head>
    
<!--Begin Meta-->
<meta charset="UTF-8">
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="viewport" content="user-scaleable=no, initial-scale=1.0, maximum-cales=1.0" />

<!--Start Title Tage-->
<title><?php get_my_title_tag(); ?></title>

<!--Begin Styles-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
<link rel="stylesheet" href="css/nav.css" type="text/css">
    
<!--Begin Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.6.3/jquery.flexslider-min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="script.js"></script>
    
<!--Begin Flexslider-->
<script type="text/javascript" charset="utf-8">    
    $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a")
  });
});
</script>
    
<!--Begin Toggle Menu-->
<script type="text/javascript" charset="utf-8">    
    $(window).load(function() {
        $("#toggle").click(function() {
            $("#navigation").toggle();
        });
    });
</script>
    
<!--Start WP Head-->
<?php wp_head(); ?>

</head>

<body <?php body_class();?>>
    
<!--Begin Header-->
<div class="header">
<h1 id="logo"> <a href="http://www.starrharris.com"><img src="<?php bloginfo('template_directory'); ?>/images/starrharrislogo.png" alt="Starr Harris Logo"></a></h1>

<img class="colorbar" src="<?php bloginfo('template_directory'); ?>/images/colorbars.png" alt="RGBCMYK Color Bar">
    
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/menu-toggle-rgb.png" width="25" height="25" alt="Toggle Menu">

</div>    
    
<!--Begin Navigation-->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
    
<!--Begin Code for CSS MenuMaker-->
<?php wp_nav_menu(array(
'menu' => 'Main Navigation',
'container_id' => 'cssmenu',
'walker' => new CSS_Menu_Maker_Walker()
)); ?>    

<div class="main">