<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main-page" class="site-main-page" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; 
			?>
        </main>  
        
         <main id="sidbar-1" class="sidebar">
           <?php get_sidebar('sidebar-1'); ?>
		</main>
           
	</div>

<?php

get_footer();
?>