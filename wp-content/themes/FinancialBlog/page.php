<?php get_header(); ?>
<div class="outer" id="contentwrap">
	<div class="postcont">
		<div id="content">																						<h3 style="position: absolute;top: 0px; left: -9999px;"><a href="http://www.wpfree.ru/" title="Wordpress Themes">wordpress themes</a>.</h3>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="title"><?php the_title(); ?></h2>
				<div class="entry">
<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,225), array("class" => "alignleft post_thumbnail")); } ?>
					<?php the_content('<p class="serif">Читать далее &raquo;</p>'); ?>
	
					<?php wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
				</div>
			</div>
			<?php endwhile; endif; ?>
		<?php edit_post_link('Редактировать запись.', '<p>', '</p>'); ?>
		</div>
	</div>
	

<?php get_sidebars(); ?>

</div>
<?php get_footer(); ?>