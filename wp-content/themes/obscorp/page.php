<?php get_header(); ?>
	<div id="breadcrumb">
		<div class="bcwrap container_12 clearfix"><?php include (TEMPLATEPATH . '/breadcrumb.php'); ?> </div>
	</div>
	<div id="main" class="container_12 clearfix">
		<div id="leftcol" class="grid_8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-content">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; else: ?>
			<div class="post">
				<h1 class="post-title">НЕ НАЙДЕНО!</h1>
				<div class="post-content"><p>Нет результатов.</p></div>
			</div>
			<?php endif; ?>
		</div>
		<div id="rightcol" class="grid_4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>