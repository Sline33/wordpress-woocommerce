<?php
/**
 * The template part for displaying video post
 *
 * @package VW Automobile Lite 
 * @subpackage vw_automobile_lite
 * @since VW Automobile Lite 1.0
 */
?>

<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-main-box">
    <div class="box-image">
      <?php
  			if ( ! is_single() ) {

  				// If not a single post, highlight the video file.
  				if ( ! empty( $video ) ) {
  					foreach ( $video as $video_html ) {
  						echo '<div class="entry-video">';
  							echo $video_html;
  						echo '</div>';
  					}
  				};

  			}; 
  		?> 
    </div>
    <div class="row">
      <div class="col-lg-2 col-md-2 ">
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