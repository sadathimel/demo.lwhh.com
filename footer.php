<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if (is_active_sidebar('footer-left')) {
                	dynamic_sidebar( 'footer-left' );
                } ?>
            </div>
            	<?php if (is_active_sidebar('footer-right')) {
            		dynamic_sidebar('footer-right');
            	}?>

            	<div class="footermenu">
        		<?php
	        		wp_nav_menu( array(
	        			'theme_location'  => 'footermenu',
	        			'menu_class'      => 'footermenuitems',
	        			'menu_id'         => 'list-inline text-center',
	        		) );
        		?>
            	</div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>