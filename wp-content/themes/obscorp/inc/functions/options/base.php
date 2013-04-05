<?php

	/*	DEFINE
	---------------------------
	*/
	$getcat= get_categories('hide_empty=0');
	$allcaregory = array();
	foreach ($getcat as $cat) {
		$allcaregory[$cat->cat_ID] = $cat->cat_name;
	}
		
	/*	GENERAL SETTINGS
	---------------------------
	*/
	$options[] = array(	"name" => "Общие настройки",
						"id" => "general",
						"type" => "section");
		$options[] = array(	"name" => "Свой логотип",
						"description" => "Впишите ссылку на свой логотип ( http://yoursite.com/logo.png )",
						"id" => $pre."_customlogo",
						"type" => "text");
		$options[] = array(	"name" => "Синдикация ( FEED )",
						"description" => "Если Вы используете сервис Feedburner для управления своим фидом, впишите полный (абсолютный) путь к Вашему фиду. Если Вы используете фид по умолчанию, оставьте поле пустым.",
						"id" => $pre."_syndication",
						"type" => "text");
	$options[] = array(	"type" => "sectionbreak");
	
	/*	SEO
	---------------------------
	*/
	$options[] = array(	"name" => "SEO опции",
						"id" => "seo",
						"type" => "section");
			$options[] = array(	"name" => "Описание сайта (Meta)",
						"description" => "Вы можете использовать описание сайта (meta descriptions) для вывода в head сайта (сео опция для ботов). Только для Главной страницы..",
						"id" => $pre."_meta_description",
						"type" => "textarea");
		$options[] = array(	"name" => "Ключевые слова (Meta Keywords) (разделяйте запятой)",
						"description" => "Функция Meta keywords позволяет Вам обеспечить поддержку сео путем добавления ключевых слов сайта в head. Только для Главной страницы..",
						"id" => $pre."_meta_keywords",
						"type" => "text");
		$options[] = array(	"name" => "Meta Author",
						"description" => "По желанию можно указать имя автора сайта для вывода в head.",
						"id" => $pre."_meta_author",
						"type" => "text");
	$options[] = array(	"type" => "sectionbreak");
	
	/*	HOME PAGE
	---------------------------
	*/
	$options[] = array(	"name" => "Главная страница",
						"id" => "homepage",
						"type" => "section");
		$options[] = array(	"name" => "Слоган сайта",
						"description" => "Впишите Ваш слоган.",
						"id" => $pre."_slogantext",
						"type" => "text");
		$options[] = array(	"name" => "Описание сайта под слоганом",
						"description" => "впишите текст описания, выводимый под слоганом. ",
						"id" => $pre."_slogandesc",
						"type" => "textarea");
		$options[] = array(	"name" => "Кнопка 1- текст",
						"description" => "Впишите текст поверх первой кнопки.",
						"id" => $pre."_btn1_text",
						"type" => "text");
		$options[] = array(	"name" => "Кнопка 2 - ссылка",
						"description" => "Впишите ссылку, куда ведет кнопка.",
						"id" => $pre."_btn1_link",
						"type" => "text");
		$options[] = array(	"name" => "Кнопка 2 - текст",
						"description" => "Впишите текст поверх второй кнопки.",
						"id" => $pre."_btn2_text",
						"type" => "text");
		$options[] = array(	"name" => "Button #2 URL",
						"description" => "Впишите ссылку, куда ведет кнопка.",
						"id" => $pre."_btn2_link",
						"type" => "text");
		$options[] = array(	"name" => "Ссылка на картинку или видео в шапке",
						"description" => "Впишите ссылку на картинку или видео в шапке. Размеры: 430x280 пикселов.",
						"id" => $pre."_embed",
						"type" => "textarea");
	$options[] = array(	"type" => "sectionbreak");
	
	/*	Welcome Note
	---------------------------
	*/
	$options[] = array(	"name" => "Добро пожаловать - текст на Главной",
						"id" => "welcomenote",
						"type" => "section");
		$options[] = array(	"name" => "Заголовок",
						"description" => "Впишите заголовок блока.",
						"id" => $pre."_welcomehead",
						"type" => "text");
		$options[] = array(	"name" => "Текст на Главной",
						"description" => "Впишите текст.",
						"id" => $pre."_welcometext",
						"type" => "textarea");
	$options[] = array(	"type" => "sectionbreak");
	
	/*	Blog Page
	---------------------------
	*/
	$options[] = array(	"name" => "Страница блога ",
						"id" => "blogpage",
						"type" => "section");
		$options[] = array(	"name" => "Рубрики для блога",
						"description" => "Выберите рубрику/рубрики для вывода на странице блога",
						"id" => $pre."_blogpagecat",
						"std" => "false",
						"options" => $allcaregory,
						"type" => "multicheck");
		$options[] = array(	"type" => "spacer");
	$options[] = array(	"type" => "sectionbreak");
	
	/*	SCRIPTS
	---------------------------
	*/
	$options[] = array(	"name" => "Статистика и скрипты",
						"id" => "statsnscripts",
						"type" => "section");
		$options[] = array(	"name" => "Скрипт в шапке",
						"description" => "Если хотите вставить трекинг код в header, например, Mint, разместите его здесь. ",
						"id" => $pre."_scripts_header",
						"type" => "textarea");
		$options[] = array(	"name" => "Скрипт в подвале",
						"description" => "Если хотите вставить трекинг код в footer. например, Google Analytics, разместите его здесь.",
						"id" => $pre."_scripts_footer",
						"type" => "textarea");
	$options[] = array(	"type" => "sectionbreak");
	
?>