<?php
/**
 * Template Name: Search Page
 **/

get_header(); ?>
<main id="main-content">

  <div class="usa-overlay"></div>
  <?php get_template_part( 'inc/components/usa', 'hero2' ); ?>

  <section class="usa-grid usa-section">
    <div class="usa-width-one-third">
      <?php get_sidebar(); ?>
    </div>
    <div class="usa-width-two-thirds">
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
