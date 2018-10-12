<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package The_Standards
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tellus ut nisi scelerisque vestibulum. Sed nisl est, pellentesque ullamcorper cursus sed, mollis eu tortor. Etiam lacus nunc, tincidunt in molestie ac, fringilla sed leo. Integer consectetur orci sed augue pretium, id condimentum leo auctor. Maecenas sapien nisl, scelerisque vitae euismod ac, finibus nec nulla. Etiam ut dignissim erat. Maecenas egestas tempor diam, vel congue lorem facilisis et. Ut vitae lacus semper, mattis libero eget, aliquam nisi. Morbi bibendum lobortis neque sed vehicula. Aliquam lobortis risus vitae enim convallis hendrerit. Vestibulum a velit vitae elit rhoncus ornare. Nam eleifend magna massa, sit amet ornare lacus sodales a. Duis sit amet blandit lacus.</p>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the_standards' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'the_standards' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
