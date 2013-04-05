<?php get_header(); ?>
	<div id="breadcrumb">
		<div class="bcwrap container_12 clearfix"><?php include (TEMPLATEPATH . '/breadcrumb.php'); ?> </div>
	</div>
	<div id="main" class="container_12 clearfix">
		<div id="leftcol" class="grid_8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>&quot;"><?php the_title(); ?></a></h1>
				<div class="post-meta">Опубликовано <?php the_time('jS F Y') ?>  - <?php the_author('') ?></div>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<div class="post-category">Рубрика: <?php the_category(', ') ?></div>
			</div>
			<div id="comments"><?php comments_template(); ?></div>
			<?php endwhile; else: ?>
			<div class="post">
				<h1 class="post-title">Не найдено!</h1>
				<div class="post-content"><p>Того, что Вы ищете, здесь нет.</p></div>
			</div>
			<?php endif; ?>
		</div>
		<div id="rightcol" class="grid_4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>