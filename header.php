<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>" />
    <title>
        <?php bloginfo('starrharris.com');?> <?php wp_title();?>
    </title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
    
    <?php wp_head();?>

</head>
  <body <?php body_class();?>>
    <div id="page">
        <div id="header">
            <h1><a href="<?php echo esc_url(home_url('/'));?>"
            title="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"
                   rel="home"> <?php bloginfo('name');?></a></h1>
            <h4><?php bloginfo('description');?></h4>
        </div>
        
        
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!--meta tags-->
    <meta charset="<?php bloginfo('charset');?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Starr Harris Print and Web Design Portfolio — Seattle, Rhode Island, Massachusetts">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
 <!-- title-->
    <title>
        <?php bloginfo('Starr Harris Print &amp; Web Design');?> <?php wp_title();?>
    </title>  
    
 <!-- styles-->
    <link rel="stylesheet" type="text/css" media="all" href="style.css<?php bloginfo('stylesheet_url'); ?>"/>


 <!-- scripts-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    
</head>
    
<body <?php body_class();?>>
    
<header>
    
<!--logo-->    
<div class="logo">
<a href="index.html"><img src="images/starrharrislogo.png" alt="Starr Harris Logo"></a>
</div>
    
<!--bar-->
<br>
<br>
<br>
<br>    
    
<img class="colorbar" src="images/colorbars.png" alt="Image RGB CMYK Color Bar"> 

<br>

    
<!--MAIN NAVIGATION-->    
<?php wp_nav_menu( array( 'theme_location' => 'header-menu')); ?>    

<div id="cssmenu" class="align-right">
  <ul>
     <li><a href="about.html"><span>ABOUT</span></a></li>
     <li class="has-sub"><a href="services.html"><span>SERVICES</span></a>
        <ul>
           <li><a href="web.html"><span>WEB DESIGN</span></a></li>
           <li><a href="print.html"><span>PRINT DESIGN</span></a></li>
           <li><a href="video.html"><span>VIDEO EDITING</span></a></li>
        </ul>
     </li>
     <li><a href="portfolio.html"><span>PORTFOLIO</span></a></li>
     <li><a href="blog.html"><span>BLOG</span></a></li>
     <li><a href="contact.html"><span>CONTACT</span></a></li>
  </ul>
</div>

</header>
