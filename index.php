<?php get_header(); ?>

<!--MAIN-->
<div class="main">
   
    <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<img class="slider" src="<?php echo get_template_directory_uri(); ?>/images/placeimg_800_250_any.jpg" alt="placeholder"> 
  
 
      <div class="caption">
       
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    
<!--body section 2-->

<div class="col">
    <section>
    <h2><a class="home" href="<?php the_permalink(); ?>" title="SERVICES <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/images/placeimg_300_300_any%20(3).jpg" alt="placeholder">  
    <?php the_content(); ?>
    </section>    
    
    <section>
    <h2><a class="home" href="<?php the_permalink(); ?>" title="BLOG <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/images/placeimg_300_300_any%20(3).jpg" alt="placeholder">
    <?php the_content(); ?>
    </section>

    <section1>
    <h2><a class="home" href="<?php the_permalink(); ?>" title="CONTACT <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/images/placeimg_300_300_any%20(3).jpg" alt="placeholder">
    <?php the_content(); ?>
    </section1>
</div>
<br>
<br>
<br>
</div>

<?php get_footer(); ?>