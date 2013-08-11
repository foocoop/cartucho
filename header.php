<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<script src="http://code.jquery.com/jquery-latest.js"></script>

<title><?php wp_title(); ?></title>


<?php wp_head(); ?>

</head>

<script src="<?php echo themeDir(); ?>/scripts/masonry.pkgd.min.js"></script>

<nav class="top-bar">
    <div class="title-area">

        <?php  echo foo_div("","img", foo_img( foo_thumb(
          foo_imgdir("cartucho.png"), 70, 50 ) ), site_url() );
        ?>

      <div class="name"><h1>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <?php echo foo_vcenter( get_bloginfo('name') ); ?>
        </a></h1>
      </div>
      
      <div class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></div>
    </div>

    
    <section class="top-bar-section">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class' => 'left', 'container' => '', 'fallback_cb' => 'foundation_page_menu', 'walker' => new foundation_navigation() ) ); ?>
		</section>
	</nav>


<!-- Begin Page -->
<div class="row">