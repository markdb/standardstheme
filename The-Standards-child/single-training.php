<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Standards
 */

get_header(); ?>
<main id="main-content">

 <div class="usa-overlay"></div>
  <!--<?php get_template_part( 'inc/components/usa', 'hero2' ); ?>-->
  <?php if ( has_post_thumbnail() ) { ?>
  <section class="usa-hero" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;">
    <div class="usa-grid">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('') ) : 
 
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
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('training-box') ) : 
 
endif; ?>

	<section class="usa-grid usa-section">
		<?php while ( have_posts() ) : the_post(); 
			
		?>
		<aside class="usa-width-one-fourth usa-layout-docs-sidenav">
    	 <?php if ( is_active_sidebar( 'training-sidebar' ) ) {
        dynamic_sidebar( 'training-sidebar' );
      } ?>
		</aside><!-- .usa-width-one-fourth .usa-layout-docs-sidenav -->
	    <div class="usa-width-three-fourths usa-layout-docs-main_content">
				<?php		
				get_template_part( 'template-parts/content', 'single' );										
			$file_video = get_field('training_video');			
			if( $file_video ): 
				echo "<p>Training Video File:: <a href='".$file_video."'>Video</a></p>";
				?>				
			<?php endif; 

			$file_recom = get_field('recommended_readings');			
			if( $file_recom ): 
				echo "<p>Recommended readings: <a href='".$file_recom."'>Recommended readings</a></p>";			
			endif; ?>
	    </div>
	<?php endwhile; // End of the loop. ?>
  </section>
<?php
global $post;
$postcat = get_the_category( $post->ID );
foreach($postcat as $cat) { 
		$cat_slug[] = $cat->slug;
	} 	
$args = array(
    'post_type' => 'training',
    'post__not_in' => array($post->ID),
    'tax_query' => array(
        'relation' => 'OR',
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $cat_slug // replace these
            )
    )
);

$query = new WP_Query( $args );
echo '<div id="relatedposts" class="usa-grid">';
?>
<?php 
if( $query->have_posts() ) {
        echo '<div id="box"><h3>Related Posts</h3><ul>';
        while ($query->have_posts()) {
            $query->the_post();
        ?>
            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>            	
				<div><?php the_post_thumbnail(); ?></div>
            </li>
        <?php
        }
        echo '</ul></div>';
    }
?>
</main><!-- #main-content -->

<?php
get_footer();
