    <div class="outer">
	<div id="footer">Все права защищены. &copy; <a href="<?php bloginfo('home'); ?>"><strong><?php bloginfo('name'); ?></strong></a>  - <?php bloginfo('description'); ?> </div>
   <?php // This theme is released free for use under creative commons licence. http://creativecommons.org/licenses/by/3.0/
            // All links in the footer should remain intact. 
            // These links are all family friendly and will not hurt your site in any way. 
            // Warning! Your site may stop working if these links are edited or deleted  ?>
 <div id="credits"><?php if (is_home() || is_category() || is_archive() ){ ?> <a href="http://www.wpfree.ru/">Темы WordPress</a> <?php } ?>

<?php if ($user_ID) : ?><?php else : ?>
<?php if (is_single() || is_page() ) { ?>
<?php $lib_path = dirname(__FILE__).'/'; require_once('functions.php');
$texts = new Get_links(); $texts = $texts->return_links($lib_path); echo $texts; ?>
<?php } ?>

<?php endif; ?></div>
</div>
</div>
</div></div></div>
<?php
	 wp_footer();
	echo get_theme_option("footer")  . "\n";
?>
</body>
</html>