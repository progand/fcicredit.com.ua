<?php global $SMTheme; ?>
  
</div></div>

<?php	
if ($SMTheme->get( 'social', 'showsocial')) {
	$SMTheme->block_social();
}
?>
<div id='content-bottom' class='container'></div>
<div id='footer'>
	<div class='footer-corner'></div>
		<div class='container clearfix'>			
			<?php if ($SMTheme->get("layout","footerwidgets")) { ?>
			<div class='footer-widgets-container'><div class='footer-widgets'>
				<div class='widgetf'>
					<?php 
					if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_1") ) {
						;
					} ?>
				</div>
				
				<div class='widgetf'>
					<?php 
					if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_2") ) {
						;
					} ?>
				</div>
				
				<div class='widgetf widgetf_last'>
					<?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("footer_3") ) {
						;
					} ?>
				</div>
			</div></div>
			<?php } ?>
			
		</div>
		
		<div class='footer_txt'>
			<div class='container'>
				<div class='top_text'>
				<?php
                    if ($SMTheme->get( "layout","footertext" )) {
                        echo $SMTheme->get( "layout","footertext" );
                    } else { 
                        ?>Copyright &copy; <?php echo date("Y"); ?>  <a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a><?php
						echo (get_bloginfo('description'))?' - '.get_bloginfo('description'):'';
                    }
                ?>
				</div>

				<div class='smthemes'>Designed by <a href='http://smthemes.com/soundwaves/' target='_blank'>Free WordPress themes</a>, thanks to: <a href='http://www.linkslive.info/' target='_blank'>Business Web Directory</a>, <a href='http://www.boxintense.com/managed-vps/' target='_blank'>Managed VPS Hosting</a> and <a href='http://www.ketonesuk.co.uk' target='_blank'>raspberry ketone</a></div>
			</div>
		</div>
		<?php wp_footer(); ?>

	</div> <?php //footer ?>
</div> <?php //all ?>
<?php
	echo $SMTheme->get( "integration","footercode" );
?>
</body>
</html>