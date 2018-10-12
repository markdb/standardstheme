<?php
/**
 * Template Name: Business Architecture Models & Reports Page
 **/
get_header(businessdomain); ?>

<main id="main-content">
<!--<section style="background-color: #205493;height: 150px;">
&nbsp;
</section>-->

  <h1 class="page-title"><?php single_post_title(); ?></h1>
  <section class="usa-grid  usa-section">
         <div class="usa-width-one-whole">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?><!--DID YOU KNOW--> 
  <!--<div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><i class="fas fa-bullhorn fa-1x"></i> Did You Know?</h5>
        <p class="card-text">Use this space to promote something on the website. Provide supporting text below as a natural lead-in to additional content. </p>
        <a href="#" class="usa-button">Learn More</a>
      </div>
    </div>
  </div>-->
     
  
    </div>
     </section>

</main><!-- #main-content -->

<?php
get_footer();
