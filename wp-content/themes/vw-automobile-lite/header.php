<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Automobile Lite
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-automobile-lite' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-automobile-lite'); ?></a></div>
  
  <div id="header">
    <div class="row m-0">
      <div class="col-lg-4 col-md-3">
          <div class="logowrapper">
            <div class="logo">
              <?php if( has_custom_logo() ){ vw_automobile_lite_the_custom_logo();
              }else{ ?>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <p class="site-description"><?php echo esc_html($description); ?></p>
              <?php endif; } ?>
            </div>
          </div>
      </div>
      <div class="col-lg-8 col-md-9 padremove">
        <div class="con_details">       
          <div class="row marremove">
            <?php if(get_theme_mod('vw_automobile_lite_contact') != '') { ?>
            <div class="top-contact col-lg-4 col-md-4">
               <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html(get_theme_mod('vw_automobile_lite_contact','')); ?></span>
            </div>
            <?php } if(get_theme_mod('vw_automobile_lite_email') != '') { ?>  
            <div class="top-contact col-lg-4 col-md-4">   
               <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_attr( get_theme_mod( 'vw_automobile_lite_email','' ) ); ?></span>
            </div>
            <?php } if(get_theme_mod('vw_automobile_lite_headertimings') != '') { ?>  
            <div class="top-contact col-lg-4 col-md-4">   
               <span class="timings"><i class="far fa-clock"></i><?php echo esc_html(get_theme_mod('vw_automobile_lite_headertimings','')); ?></span>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="menubox">
          <div class="row m-0">
            <div class="col-lg-11 col-md-11">
              <div class="nav">
                <div class="container">
                  <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 p-0">
              <div class="search-box">
                <i class="fas fa-search"></i>
              </div>
            </div>
            <div class="serach_outer">
              <div class="closepop"><i class="far fa-window-close"></i></div>
              <div class="serach_inner">
                <?php get_search_form(); ?>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <?php if ( is_singular() && has_post_thumbnail() ) : ?>
    <?php
      $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'vw-automobile-lite-post-image-cover' );
      $post_image = $thumb['0'];
    ?>
    <div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">
      <?php the_post_thumbnail( 'vw-automobile-lite-post-image' ); ?>
    </div>

  <?php elseif ( get_header_image() ) : ?>
  <div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
    </a>
  </div>
  <?php endif; // End header image check. ?>