<?php
/**
 * Template Name: Blog Page
 *
 */
?>
<?php get_header(); ?>
	<div id="breadcrumb">
		<div class="bcwrap container_12 clearfix"><?php include (TEMPLATEPATH . '/breadcrumb.php'); ?> </div>
	</div>
	<div id="main" class="container_12 clearfix">
		<div id="leftcol" class="grid_8">
			<?php
				$wp_query = new WP_Query();
				$wp_query->query('showposts=5&cat='.get_blogcat_options().'&paged='.$paged);
			?>
			<?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			<div class="post">
				<h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>&quot;"><?php the_title(); ?></a></h1>
				<div class="post-meta"><?php the_time('jS F Y') ?> / <?php the_author('') ?></div>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
				<div class="post-category">Опубликовано в: <?php the_category(', ') ?></div>
			</div>
			<?php endwhile; else: ?>
			<div class="post">
				<h1 class="post-title">НЕ НАЙДЕНО!</h1>
				<div class="post-content"><p>Нет результатов.</p></div>
			</div>
			<?php endif; ?>
			<?php if(function_exists('wp_pagenavi')) : ?>
			<div id="post-navigation clearfix">
				<?php wp_pagenavi(); ?>
			</div>
			<?php endif; ?>
		</div>
		<div id="rightcol" class="grid_4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>