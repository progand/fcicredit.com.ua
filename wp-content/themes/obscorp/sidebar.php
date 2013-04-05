<div class="subscription clearfix">
	<div class="left">Подписка</div>
	<div class="right">
		<a href="<?php if ( get_option('obscorp_syndication') <> "" ) { echo stripslashes(get_option('obscorp_syndication')); } ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss_32.png" border="0" /></a>
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/email_32.png" border="0" /></a>
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_32.png" border="0" /></a>
	</div>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar') ) : ?>
<div class="widget">
	<div class="widget-body">
		<h3>Последние записи</h3>
		<ul>
			<?php $latest_post = new WP_Query('showposts=5'); ?>
			<?php if ($latest_post->have_posts()) : while ($latest_post->have_posts()) : $latest_post->the_post(); ?>
			<li class="recent"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>&quot;"><?php the_title(); ?></a></li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
	<div class="widget-foot"><!-- nothing goes here --></div>
</div>
<div class="widget">
	<div class="widget-body">
		<h3>Рубрики</h3>
		<ul>
			<?php wp_list_categories('title_li=&depth=1'); ?>
		</ul>
	</div>
	<div class="widget-foot"><!-- nothing goes here --></div>
</div>
<?php ads_widget(); ?>
<?php endif; ?>