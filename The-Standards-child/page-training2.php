<?php
/**
 * Template Name: Trainings Listing 2
 *
 */
get_header(); ?>
<main id="main-content">
  <div class="usa-overlay"></div>
  <?php get_template_part( 'inc/components/usa', 'hero' ); ?>
 <div class="usa-grid usa-section">
  <form type="post">  
  <div class="usa-width-one-fourth">                
        <?php 
          $query = $_REQUEST['query'];
        ?>
        <div class="usa-width-full">
          <input type="text" name="query" placeholder="Search course" value="<?php echo $query; ?>" id="query" />                   
        </div>      
    </div>    
      <?php 
      $customPostTaxonomies = get_object_taxonomies('training');

      if(count($customPostTaxonomies) > 0)
      {
           foreach($customPostTaxonomies as $tax)
           {
             $args = array(
                  'orderby' => 'name',
                  'show_count' => 0,
                  'pad_counts' => 0,
                  'depth' => 1,
                  /*'hierarchical' => 1,
                  'taxonomy' => $tax,*/
                  'title_li' => '',
                  'hide_if_empty'      => false,
                  'show_option_all'    => $tax,
                  'exclude'            => '1',
                );
             if($tax == "category"){
              $tax_name = "Category";
             }
             else{
              $tax_name = "Tags";
             }
             echo '<div class="usa-width-one-fourth">';
              $my_tax_terms = get_terms( $tax, $args );
              echo '<select name="'.$tax.'" id="'.$tax.'" class="postform">';
                  echo "<option value=''>".$tax_name."</option>";
                  foreach ($my_tax_terms as $tax_term) {
                      $selected = ($tax_term->name == $_REQUEST[$tax]) ? ' selected="selected" ' : '';
                      echo '<option value="'. $tax_term->name .'" '. $selected .'>'. $tax_term->name .'</option>';
                  }
              echo '</select>';
             echo '</div>';             
            }
            echo '<div class="usa-width-one-fourth">';
             echo '<input type="submit" value="Search"/>';
             echo '</div>';
      }
    ?>
    </div>  
    </form>
  </div>
  <section class="usa-grid usa-section"> 
  <div class="usa-grid search-items">         
    <?php 
// the query
$wpb_all_query = new WP_Query(
                array(
                'post_type'=>'training', 
                'post_status'=>'publish', 
                's' => $query,
                'posts_per_page'=>-1,
                'tax_query' => array(
                  'relation' => 'OR',
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms' => (empty($_REQUEST['category'])?"uncategorized":$_REQUEST['category']),
                        'operator'  => (empty($_REQUEST['category'])?"NOT IN":"IN")                        
                    ),
                    array(
                        'taxonomy' => 'post_tag',
                        'field'    => 'slug',
                        'terms' => $_REQUEST['post_tag']                        
                    )
                  )
                )); 
    ?>
 
<?php if ( $wpb_all_query->have_posts() ) : 
$countRow = 1;
?>
 
<div>
  <div class="usa-grid">
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>      
        <div class="usa-width-one-half trainblock1">
          <div class="usa-width-one-half trainblock2">
            <div class="block-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div class="block-content">
              <?php echo get_the_excerpt();?>
            </div>
          </div>
          <div class="usa-width-one-half">
            <?php 
             $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
             <img src="<?php echo $image[0]; ?>"/>
          </div>
        </div>      
    <?php     
    if($countRow % 2 == 0 ) {
      echo "</div><div class='usa-grid'>";
    }
    $countRow++;    
    endwhile; ?>
    <!-- end of the loop -->
 </div>
</div>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>
  </section>

  <?php //get_template_part( 'inc/components/usa', 'graphic_list' ); ?>

</main><!-- #main-content -->

<?php
get_footer();