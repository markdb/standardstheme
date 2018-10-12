<?php
/**
 * The header for The Standards theme
 *
 * This is template displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Standards
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta http-equiv="x-ua-compatible" content="IE=edge" >
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<a class="usa-skipnav" href="#main-content"><?php esc_html_e( 'Skip to main content', 'the_standards' ); ?></a>
<header class="usa-header usa-header-extended" role="banner">
  <?php if ( get_theme_mod( 'the_standards_gov_check' ) == 1 ) {
    get_template_part( 'inc/components/usa', 'banner' );
  } ?>
  <div class="usa-navbar">
    <button class="usa-menu-btn"><?php esc_html_e( 'Menu', 'the_standards' ); ?></button>
    <div class="usa-logo" id="logo">
      <?php if ( has_custom_logo() ) { ?>
        <a href="/" accesskey="1" title="Home" aria-label="<?php bloginfo( 'name' ); ?>"><?php the_custom_logo(); ?></a>
      <?php } else { ?>
        <em class="usa-logo-text">
          <a href="/" accesskey="1" title="Home" aria-label="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?><h4 class="usa-logo-subtext"><?php single_post_title(); ?></h4></a>
        </em>
      <?php } ?>
    </div>
  </div>
  <nav role="navigation" class="usa-nav">
    <div class="usa-nav-inner">
      <button class="usa-nav-close">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/close.svg'; ?>" alt="close">
      </button>
    
    <?php
     wp_nav_menu( array( 
     'theme_location' => 'systems-and-applications-domain',
     'container'      => false,
     'menu_class'     => 'main-nav',
     'items_wrap'     => '<ul class="usa-nav-primary usa-accordion">%3$s</ul>',
     'fallback_cb'    => 'the_standards_default_main',
     'walker'         => new The_Standards_Walker_Nav_Menu()
      ) );
     ?>


      <div class="usa-nav-secondary">
        <?php get_template_part( 'inc/components/usa', 'search' ); ?>
        
        <?php
          wp_nav_menu( array(
            'theme_location' => 'Secondary',
            'container'      => false,
            'menu_class'     => 'secondary-nav',
            'items_wrap'     => '<ul class="usa-unstyled-list usa-nav-secondary-links">%3$s</ul>',
            'fallback_cb'    => 'the_standards_default_secondary',
          ) );
        ?>
      </div>
    </div>
  </nav>

</header>
