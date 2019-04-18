<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Automobile Lite
 * @subpackage vw-automobile-lite
 * @since VW Automobile Lite 1.0
 */
?>
<div class="col-lg-4 col-md-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
	    <div class="post-main-box">
		    <div class="box-image">
		        <?php 
		            if(has_post_thumbnail()) { 
		              the_post_thumbnail(); 
		            }
		        ?>  
	        </div>
	        <h3 class="section-title"><?php the_title();?></h3>      
	        <div class="new-text">
	          <?php the_excerpt();?>
	        </div>
	    	<div class="content-bttn">
	          	<a href="<?php the_permalink(); ?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read More', 'vw-automobile-lite' ); ?>"><?php esc_html_e('Read More','vw-automobile-lite'); ?></a>
        	</div>
	    </div>
	    <div class="clearfix"></div>
  	</div>
</div>