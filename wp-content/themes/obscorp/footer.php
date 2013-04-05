<div id="footer">
		<div id="inner">
			<div class="widgets container_12 clearfix">
								<div class="widget grid_3">
					<h3>СТРАНИЦЫ</h3>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/">Главная</a></li>
				<?php wp_list_pages('title_li=') ?>
					</ul>
				</div>
				
				<div class="widget grid_3">
					<h3>РУБРИКИ</h3>
					<ul>
							<?php wp_list_categories('hide_empty=1&exclude=1&title_li=&depth=1'); ?>
</li>
					</ul>
				</div>
				
				<div class="widget grid_3">
					<h3>АРХИВЫ</h3>
					<ul>
					<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</div>
				
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar') ) : ?>
				<div class="widget grid_3">
					<h3>Блок для виджета</h3>
					Sed et odio libero. Vestibulum aliquet aliquet blandit. Sed non orci ut enim mattis placerat. Aenean ultrices massa id magna scelerisque quis accumsan lorem interdum.
				</div>
				
				<?php endif; ?>
							</div>
		</div>
		<div id="credits" class="container_12 clearfix">
			
			<p class="right">Спасибо: <a href="http://www.wpfree.ru/" title="Шаблоны Wordpress">Темы WP</a> и <a href="http://www.cmex2.ru/" title="Цитатник">Cmex2.ru</a> </p>
		</div>
	</div>
</div>
</body>
</html>