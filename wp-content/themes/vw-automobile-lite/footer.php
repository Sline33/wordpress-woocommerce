<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package VW Automobile Lite
 */
?>
<div class="copyright-wrapper footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-1');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-2');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-3');?>
            </div>
            <div class="col-lg-3 col-md-3">
                <?php dynamic_sidebar('footer-4');?>
            </div>
        </div>
    </div>
</div>

<div class="footer-2">
  <p><?php echo esc_html(get_theme_mod('vw_automobile_lite_footer_copy',__('Copyright 2017-','vw-automobile-lite'))); ?> <?php vw_automobile_lite_credit(); ?></p>
</div>

<?php wp_footer(); ?>
</body>
</html>