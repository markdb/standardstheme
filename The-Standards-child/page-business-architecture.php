
<?php
/**
 * Template Name: Business Architecture Page
 **/

get_header(businessdomain); ?>

<main id="main-content">

  <div class="usa-overlay"></div>
  <!--<?php get_template_part( 'inc/components/usa', 'hero2' ); ?>-->
  <?php if ( has_post_thumbnail() ) { ?>
  <section class="usa-hero" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;">
    <div class="usa-grid">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('business-domain-callout') ) : 
 
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

   
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('business-box-section') ) : 
 
endif; ?>


  <h1 class="page-title"><?php single_post_title(); ?></h1>
  <section class="usa-grid  usa-section">
         <div class="usa-width-two-thirds">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?><!--DID YOU KNOW--> 
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-bullhorn fa-1x"></i> Did You Know?</h5>
        <p class="card-text">Use this space to promote something on the website. Provide supporting text below as a natural lead-in to additional content. </p>
        <a href="#" class="usa-button">Learn More</a>
      </div>
    </div>
  </div>
     
  
    </div>
     <div class="usa-width-one-third">
      <?php get_sidebar(); ?> 
    </div>
  </section>

</main><!-- #main-content -->

<?php
get_footer();
