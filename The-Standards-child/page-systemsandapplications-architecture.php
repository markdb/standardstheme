
<?php
/**
 * Template Name: Systems & Applications Architecture Page
 **/

get_header(sadomain); ?>
<main id="main-content">

    <div class="usa-overlay"></div>
  <!--<?php get_template_part( 'inc/components/usa', 'hero2' ); ?>-->
  <?php if ( has_post_thumbnail() ) { ?>
  <section class="usa-hero" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;">
    <div class="usa-grid">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sa-domain-callout') ) : 
 
endif; ?>
    </div>
  </section>
<?php } else { ?>
  <section class="usa-hero">
    <div class="usa-grid">
      <?php if ( is_active_sidebar( 'domain-hero-widget' ) ) {
        dynamic_sidebar( 'domain-hero-widget' );
      } ?>
    </div>
  </section>
<?php } ?>
<!--<section style="background-color: #205493;height: 150px;">
&nbsp;
</section>-->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('systems-box-section') ) : 
 
endif; ?>
  <h1 class="page-title"><?php single_post_title(); ?></h1>
  <section class="usa-grid  usa-section">
         <div class="usa-width-two-thirds">
      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page' );

      endwhile; // End of the loop.
      ?>
    </div>
     <div class="usa-width-one-third">
      <?php get_sidebar(); ?> 
    </div>
  </section>

</main><!-- #main-content -->

<?php
get_footer();
