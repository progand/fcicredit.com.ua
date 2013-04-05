<?php get_header(); ?>
	<div id="featured">
		<div class="f-wrap container_12 clearfix">
			<div class="slogan left">
				<h1>
					<?php if(get_option('obscorp_slogantext') <> "") : echo get_option('obscorp_slogantext'); ?>
					<?php else : ?>
					Слоган Вашей компании!
					<?php endif; ?>
				</h1>
				<div class="introparag">
					<p>
						<?php if(get_option('obscorp_slogandesc') <> "") : echo get_option('obscorp_slogandesc'); ?>
						<?php else : ?>
						Введение к сайту или приветствие посетителям! Не нужно лезть в код или копать файлы - все настройки из контрольной панели!
						<?php endif; ?>
					</p>
				</div>
				<div class="buttons clearfix">
					<a href="<?php if(get_option('obscorp_btn1_link') <> "") { echo get_option('obscorp_btn1_link'); } else { echo "#"; } ?>" class="btn">
						<?php if(get_option('obscorp_btn1_text') <> "") : echo get_option('obscorp_btn1_text'); ?>
						<?php else : ?>
							Портфолио
						<?php endif; ?>
					</a>
						<span class="spanblock"> или </span>
					<a href="<?php if(get_option('obscorp_btn2_link') <> "") { echo get_option('obscorp_btn2_link'); } else { echo "#"; } ?>" class="btn">
						<?php if(get_option('obscorp_btn2_text') <> "") : echo get_option('obscorp_btn2_text'); ?>
						<?php else : ?>
							Блог
						<?php endif; ?>
					</a>
				</div>
			</div>
			<div class="featured right">
				<div class="featuredbox">
			
					
					<?php $embed = get_option('obscorp_embed'); echo stripslashes($embed); ?>
				</div>
				<div class="featuredboxshadow"><!-- must be empty --></div>
			</div>
		</div>
	</div>
	<div id="main" class="container_12 clearfix">
		<div id="leftcol" class="grid_8">
			<div id="welcomenote" class="post">
				<h1 class="post-title">
					<?php if(get_option('obscorp_welcomehead') <> "") : echo get_option('obscorp_welcomehead'); ?>
					<?php else : ?>
						О компании
					<?php endif; ?>
				</h1>
				<div class="post-excerpt">
					<?php if(get_option('obscorp_welcometext') <> "") : echo get_option('obscorp_welcometext'); ?>
					<?php else : ?>
						<p>We provide Lorem Ipsum, the dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
						<p>The company is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
						<p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div id="rightcol" class="grid_4">
			<div class="subscription clearfix">
				<div class="left">Подписка</div>
				<div class="right">
					<a href="<?php if ( get_option('obscorp_syndication') <> "" ) { echo stripslashes(get_option('obscorp_syndication')); } ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss_32.png" border="0" /></a>
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/email_32.png" border="0" /></a>
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/twitter_32.png" border="0" /></a>
				</div>
			</div>
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
		</div>
	</div>
	<div style="display:none;">Скачать <a href="http://www.inwp.ru">Темы для WP</a> бесплатно.</div>
	<!-- include 3 column panel container -->
	<?php include('panels.php'); ?>
	<!-- end panels -->
<?php get_footer(); ?>