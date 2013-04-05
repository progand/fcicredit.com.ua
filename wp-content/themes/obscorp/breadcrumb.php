<?php
	$category = get_the_category();
	echo '<strong>Навигация: </strong>';
	echo '<a href="'.get_bloginfo('url').'">Главная</a> &raquo; ';
	if(is_single()) {
		echo get_category_parents($category[0]->cat_ID, TRUE, ' &raquo; ');
		echo get_the_title();
	}
	elseif(is_page()) {
		$parent_id = $post->post_parent;
		
		$pages = array();
		while ($parent_id) {
			$page = get_page($parent_id);
			$pages[] = '<a href="'.get_permalink($page->ID).'" title="">'.get_the_title($page->ID).'</a> &raquo; ';
			$parent_id  = $page->post_parent;
		}
		
		$pages = array_reverse($pages);
		foreach ($pages as $page) { 
			echo $page;
		}
		echo get_the_title();
	}
	elseif(is_category()) {
		echo 'Архив рубрики &quot;';
		single_cat_title();
		echo '&quot;';
	}
	elseif(is_tag()) {
		echo 'Записи с меткой &quot;';
		single_tag_title();
		echo '&quot;';
	}
	elseif(is_day()) {
		echo 'Архив за день &quot;';
		the_time('jS F Y');
		echo '&quot;';
	}
	elseif (is_month()) {
		echo 'Архив &quot;';
		the_time('F Y');
		echo '&quot;';
	}
	elseif (is_year()) {
		echo 'Архив &quot;';
		the_time('Y');
		echo '&quot;';
	}
	elseif(is_404()) {
		echo '404 - Страница не найдена';
	}
	elseif(is_search()) {
		echo 'Результаты поиска &quot;';
		the_search_query();
		echo '&quot;';
	}
?>