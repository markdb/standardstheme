
<?php
/**
 * Template Name: Business Architecture Page
 **/

get_header(businessdomain); ?>


  <h1 class="page-title"><?php single_post_title(); ?></h1>
  <section class="usa-grid  usa-section">
         <div class="usa-width-two-thirds">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
     
  
     </section>

</main><!-- #main-content -->

<?php
get_footer();
