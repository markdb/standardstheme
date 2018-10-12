<?php
/**
 * Template Name: No Sidebar (global header)
 **/
get_header(); ?>

<main id="main-content">

  <h1 class="page-title"><?php single_post_title(); ?></h1>
  <section class="usa-grid  usa-section">
         <div class="usa-width-one-whole">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
     
  
    </div>
     </section>

</main><!-- #main-content -->

<?php
get_footer();
