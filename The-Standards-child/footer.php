<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Standards
 */

?>
<footer class="usa-footer usa-footer-medium" role="contentinfo">
  <div class="usa-grid usa-footer-return-to-top">
    <a href="#">Return to top</a>
  </div>
  <div class="usa-footer-primary-section">
    <div class="usa-grid-full">
      <nav class="usa-footer-nav">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'Footer',
	        	'container' 		 => false,
	        	'menu_class' 		 => 'footer-nav',
						'link_before'		 => '<span class="usa-footer-primary-link">',
						'link_after'		 => '</span>',
						'items_wrap' 		 => '<ul class="usa-unstyled-list"><li class="usa-width-one-fourth usa-footer-primary-content">%3$s</li></ul>',
						'fallback_cb'    => 'the_standards_default_footer',
					) );
				?>
      </nav>
    </div>
  </div>
<div class="usa-footer-secondary_section">
    <div class="usa-grid">
      <div class="usa-footer-logo usa-width-one-half">
        <img class="usa-footer-logo-img" src="<?php echo get_template_directory_uri();?>/assets/img/VA_DMD.png" alt="">
        <h3 class="usa-footer-logo-heading"></h3>
      </div>
      <div class="usa-footer-contact-links usa-width-one-half">
            <a class="usa-link-facebook" href="javascript:void(0);">
                <span>Facebook</span>
            </a>
            <a class="usa-link-twitter" href="javascript:void(0);">
                <span>Twitter</span>
            </a>
            <a class="usa-link-youtube" href="javascript:void(0);">
                <span>YouTube</span>
            </a>
            <a class="usa-link-rss" href="javascript:void(0);">
                <span>RSS</span>
            </a>
            <h3 class="usa-footer-contact-heading">Agency Contact Center</h3>
            <address>
             <div class="usa-footer-primary-content usa-footer-contact_info">           
                 <a href="tel:1-800-555-5555" class="padding-2rem">(800) CALL-GOVT</a>
                 <a href="info@agency.gov">info@agency.gov</a>
             </div>
            </address>
        </div>
    </div>
</div>
   <div class="usa-fill-black-light copyright">
            <div class="usa-grid"> Page content was last updated: <?php the_modified_date(); ?></div>
            </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
