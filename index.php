<?php get_header(); ?>

<!--MAIN-->
<div class="main">
   
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

  
        <img class="slider" src="images/placeimg_800_250_any.jpg" alt="placeholder">
 
      <div class="caption">
       
            <h1><?php the_title(); ?></h1>
            <p><b>Lorem ipsum dolor sit amet,</b> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea common.
            </p>

            <p> consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea common.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea common.

            </p>
        </div>
    
    
    
<!--body section 2-->

<div class="col">
    <section>
    <h2><a class="home" href="services.html"
           >Services</a></h2>
     <img class="section" src="images/placeimg_300_300_any%20(3).jpg" alt="placeholder">
    <p>Lorem ipsum dolor sit amet, invenire forensibus at vim, ei sit dicant numquam. Pri ut timeam erroribus, reque impetus dignissim cu pri, nam dico melius no.</p>
    </section>    
    

    <section>
    <h2><a class="home" href="blog.html"> Blog</a></h2>
    <img class="section" src="images/placeimg_300_300_any%20(3).jpg" alt="placeholder">
    <p>Lorem ipsum dolor sit amet, invenire forensibus at vim, ei sit dicant numquam. Pri ut timeam erroribus, reque impetus dignissim cu pri, nam dico melius no.</p>
    </section>

    <section1>
    <h2><a class="home" href="contact.html">Contact</a></h2>
     <img class="section" src="images/placeimg_300_300_any%20(3).jpg" alt="placeholder">
    <p>Lorem ipsum dolor sit amet, invenire forensibus at vim, ei sit dicant numquam. Pri ut timeam erroribus, reque impetus dignissim cu pri, nam dico melius no.</p>
    </section1>
</div>
<br>
<br>
<br>
</div>
   
<?php get_footer();?>
    