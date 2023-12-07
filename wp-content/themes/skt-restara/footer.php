<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Restara
 */
$footer_text = get_theme_mod('footer_text');
?>
<div id="footer">
<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1-phy' ) || is_active_sidebar( 'fc-2-phy' ) || is_active_sidebar( 'fc-3-phy' ) || is_active_sidebar( 'fc-4-phy' ) ) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1-phy' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1-phy' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2-phy' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2-phy' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3-phy' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3-phy' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 	
			<?php if ( is_active_sidebar( 'fc-4-phy' ) ) : ?>    
            <div class="cols-3 widget-column-4">  
            <?php dynamic_sidebar( 'fc-4-phy' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?>             	         
            <div class="clear"></div>
            </div>
        </div><!--end .container--> 
</div>
<?php endif; ?>          
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt">
     	<?php if (!empty($footer_text)) { ?>
	 		<?php echo esc_html($footer_text); ?>
		<?php } ?>
        <?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','skt-restara');?><a href="<?php echo esc_url('https://www.sktthemes.org/');?>" rel="nofollow" target="_blank"><?php esc_html_e('SKT Themes','skt-restara'); ?></a>
        </div>
     <div class="clear"></div>
</div>           
</div>
</div><!--end #copyright-area-->
</div>
<?php wp_footer(); ?>
</body>
</html>