<?php
/**
 * Template part for a single post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Standards
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">Course title:', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_standards_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">		
		<p><strong>Release Date: </strong> <?php echo get_field('release_date');?></p>
		<?php echo "<p><strong>Description: </strong>" . get_the_content()."</p>"; ?>
		<?php echo "<p><strong>Expected Outcomes: </strong>" . get_field('expected_outcome')."</p>"; ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_standards_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
