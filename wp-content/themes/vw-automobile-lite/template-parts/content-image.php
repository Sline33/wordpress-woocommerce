<?php
/**
 * The template part for displaying image post
 *
 * @package VW Automobile Lite 
 * @subpackage vw_automobile_lite
 * @since VW Automobile Lite 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <div class="box-image">
      <?php 
        if(has_post_thumbnail()) { 
          the_post_thumbnail(); 
        }
      ?>  
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-2">
        <div class="datebox">
            <div class="date-monthwrap">
               <span class="date-month"><?php echo esc_html( get_the_date( 'M' ) ); ?></span>
               <span class="date-day"><?php echo esc_html( get_the_date( 'd') ); ?></span>
            </div>
            <div class="yearwrap">
                <span class="date-year"><?php echo esc_html( get_the_date( 'Y' ) ); ?></span>
            </div>
          </div>
      </div>
      <div class="col-lg-10 col-md-10">
        <h3 class="section-title"><?php the_title();?></h3>      
        <div class="new-text">
          <?php the_excerpt();?>
        </div>
         <div class="content-bttn">
          <a href="<?php the_permalink(); ?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'vw-automobile-lite' ); ?>"><?php esc_html_e('Read More','vw-automobile-lite'); ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>