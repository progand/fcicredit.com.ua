<?php

	/*	MAIN SIDEBARS
	---------------------------
	*/
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Main Sidebar',
        'before_widget' => '<div class="widget"><div class="widget-body">',
        'after_widget' => '</div><div class="widget-foot"></div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	
	/*	FOOTER SIDEBAR
	---------------------------
	*/
	if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Footer Sidebar',
        'before_widget' => '<div class="widget grid_3">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
	
	/*	REVAMP PAGE LIST
	---------------------------
	*/
	function wp_revamp_pages() {
		$page = wp_list_pages('depth=4&title_li=&exclude=1&hide_empty=0&echo=0');  
		$page = preg_replace('/title=\"(.*?)\"/','',$page);  
		echo $page;
	}
	
	/*	REVAMP CATEGORY LIST
	---------------------------
	*/
	function wp_revamp_categories() {
		$category = wp_list_categories('depth=4&title_li=&exclude=1&hide_empty=0&echo=0');  
		$category = preg_replace('/title=\"(.*?)\"/','',$category);  
		echo $category;
	}
	
	/* Display Correct Comment Count
	/* ----------------------------------------------*/
	
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} 
		else {
			return $count;
		}
	}
	
	/*	POST EXCERPT
	---------------------------
	*/
	function wp_limit_post($max_char, $more_link_text = '[...]',$notagp = false, $stripteaser = 0, $more_file = '') {
		$content = get_the_content($more_link_text, $stripteaser, $more_file);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		$content = strip_tags($content);
	
	   if (strlen($_GET['p']) > 0) {
	   	  if($notagp) {
		  echo substr($content,0,$max_char);
		  }
		  else {
		  echo '<p>';
		  echo substr($content,0,$max_char);
		  echo "</p>";
		  }
	   }
	   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
			$content = substr($content, 0, $espacio);
			$content = $content;
			if($notagp) {
		    echo substr($content,0,$max_char);
			echo $more_link_text;
		    }
		    else {
			echo '<p>';
			echo substr($content,0,$max_char);
			echo $more_link_text;
			echo "</p>";
			}
	   }
	   else {
	      if($notagp) {
		  echo substr($content,0,$max_char);
		  }
		  else {
		  echo '<p>';
		  echo substr($content,0,$max_char);
		  echo "</p>";
		  }
	   }
	}
	
	/*	POST IMAGE GRABBER
	---------------------------
	*/
	function wp_catch_first_image($image_size = '') {  
		global $post, $posts;  
		$first_img = '';  
		ob_start();  
		ob_end_clean();  
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);  
		$first_img = $matches [1] [0];
	  	if(empty($first_img) && $image_size != ''){ //Defines a default image
			if($image_size == 's') {
				$first_img = bloginfo('template_directory')."/images/no-image-small.jpg";
			}
			else if($image_size == 'm') {
				$first_img = bloginfo('template_directory')."/images/no-image-medium.jpg";
			}
			else if($image_size == 'l') {
				$first_img = bloginfo('template_directory')."/images/no-image-large.jpg";
			}
			else {
				$first_img = '';
			}
		}  
		
		return $first_img;  
  	}
	
	/*	THREADED COMMENTS
	---------------------------
	*/
	function wp_threaded_comments($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
	?>
		<li <?php comment_class(); ?>>
			<div class="comment">
				<div class="comment-meta-box clearfix">
					<div class="gravatar left"><?php echo get_avatar( $comment, 48 ); ?></div>
					<div class="comment-meta left">
						<span class="author"><?php if(get_comment_author_url()) : ?><a href="<?php echo get_comment_author_url(); ?>"><?php comment_author(); ?></a><?php else : ?><?php comment_author(); ?><?php endif; ?></span>
						<span class="date-link-reply"><?php printf(__('%1$s - %2$s',''), get_comment_date(), get_comment_time()); ?> | <a href="#comment-<?php comment_id(); ?>">Ссылка</a> | <?php if (function_exists('comment_reply_link')) { comment_reply_link(array_merge( $args, array('add_below' => 'comment-reply', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'ответ'))); } ?></span>
					</div>
				</div>
				<?php if ($comment->comment_approved == '0'): ?><p class="warning">Ваш комментарий ожидает одобрения администратора.</p><?php endif; ?>
				<?php comment_text(); ?>
				<a id="comment-reply-<?php comment_ID() ?>"></a>
			</div>
	<?php
	}
	
	/*	POST IMAGE OPTION wp2.9
	---------------------------
	*/
	
	if ( function_exists('add_theme_support') ) {
		add_theme_support( 'post-thumbnails', array( 'post' ) );
		set_post_thumbnail_size( 150, 288, true );
		add_image_size('featured-post-thumbnail', 608, 608);
	}
	
	/*	SIDEBAR ADS WIDGET
	---------------------------
	*/
	function ads_widget() {
		$settings = get_option( 'ads_sidebar_widget' );  
		$code_one = $settings['codex_one'];
		$code_two = $settings['codex_two'];
		$code_three = $settings['codex_three'];
		$code_four = $settings['codex_four'];
	?>
		<div class="widget ads">
			<div class="clearfix">
				<div class="ads125box"><?php if($code_one != '') { echo $code_one; } else { echo '<a href="mailto:'.get_bloginfo('admin_email').'" title="Advertise here"><img src="'.get_bloginfo('template_directory').'/images/125x125x_blank1.jpg" border="0" alt="125x125" /></a>'; } ?></div>
				<div class="ads125box"><?php if($code_two != '') { echo $code_two; } else { echo '<a href="mailto:'.get_bloginfo('admin_email').'" title="Advertise here"><img src="'.get_bloginfo('template_directory').'/images/125x125x_blank1.jpg" border="0" alt="125x125" /></a>'; } ?></div>
				<div class="ads125box"><?php if($code_three != '') { echo $code_three; } else { echo '<a href="mailto:'.get_bloginfo('admin_email').'" title="Advertise here"><img src="'.get_bloginfo('template_directory').'/images/125x125x_blank1.jpg" border="0" alt="125x125" /></a>'; } ?></div>
				<div class="ads125box"><?php if($code_four != '') { echo $code_four; } else { echo '<a href="mailto:'.get_bloginfo('admin_email').'" title="Advertise here"><img src="'.get_bloginfo('template_directory').'/images/125x125x_blank1.jpg" border="0" alt="125x125" /></a>'; } ?></div>
				<div class="clear"></div>
			</div>
		</div>
	<?php
	}
	
	function ads_widget_admin() {
		$settings = get_option( 'ads_sidebar_widget' );
	
		if( isset( $_POST[ 'ads_sidebar_widget' ] ) ) {
			$settings[ 'codex_one' ] = stripslashes( $_POST[ 'input_codex_one' ] );
			$settings[ 'codex_two' ] = stripslashes( $_POST[ 'input_codex_two' ] );
			$settings[ 'codex_three' ] = stripslashes( $_POST[ 'input_codex_three' ] );
			$settings[ 'codex_four' ] = stripslashes( $_POST[ 'input_codex_four' ] );
			update_option( 'ads_sidebar_widget', $settings );
		}
		
		$settings = get_option( 'ads_sidebar_widget' );  
		$code_one = $settings['codex_one'];
		$code_two = $settings['codex_two'];
		$code_three = $settings['codex_three'];
		$code_four = $settings['codex_four'];
	?>
		<p>
			<label for="input_codex_one">Баннер 1:</label><br />
			<textarea name="input_codex_one" id="input_codex_one" cols="" rows="6" style="width:290px;"><?php echo $code_one; ?></textarea><br/>
			
			<label for="input_codex_two">Баннер 2:</label><br />
			<textarea name="input_codex_two" id="input_codex_two" cols="" rows="6" style="width:290px;"><?php echo $code_two; ?></textarea><br/>
			
			<label for="input_codex_three">Баннер 3:</label><br />
			<textarea name="input_codex_three" id="input_codex_three" cols="" rows="6" style="width:290px;"><?php echo $code_three; ?></textarea><br/>
			
			<label for="input_codex_four">Баннер 4:</label><br />
			<textarea name="input_codex_four" id="input_codex_four" cols="" rows="6" style="width:290px;"><?php echo $code_four; ?></textarea><br/>
		</p>
		<input type="hidden" id="ads_sidebar_widget" name="ads_sidebar_widget" value="1" />
	<?php
	}
	
	
	if ( function_exists('register_sidebar_widget') ) { register_sidebar_widget('Obscorp 125x125 Ad', 'ads_widget'); }	
	if ( function_exists('register_widget_control') ) { register_widget_control( 'Obscorp 125x125 Ad', 'ads_widget_admin', 300, 200 ); }
	
	
	/*	GET CATEGORY ID FOR BLOG PAGE
	---------------------------
	*/
	function get_blogcat_options() {
		$getcat= get_categories('hide_empty=0');
		$selected_caregory = array();
		foreach ($getcat as $cat) {
			if(get_option('obscorp_blogpagecat_'.$cat->cat_ID) == 'true') {
				$selected_caregory[] = $cat->cat_ID;
			}
		}
		$selected_caregory = implode(",", $selected_caregory);
		
		return $selected_caregory;
	}
	
	/*	THEME OPTION
	---------------------------
	*/
	$themename = "Obscorp";
	$pre = "obscorp";
	
	$options = array();
	
	$functions_path = TEMPLATEPATH . '/inc/functions/';
	
	define( OPTION_FILES, 'base.php' );
	
	function startit() {
		global $themename, $options, $pre, $functions_path;
			
		if (function_exists('add_menu_page')) {
			$basename = basename( OPTION_FILES );
			add_theme_page( $themename." - настройка", "$themename - настройка", 'edit_themes', 'base.php', 'build_options');
		}
	}
	
	function build_options() {
		global $themename, $pre, $functions_path, $options;
				
		$page = $_GET["page"];
		
		include( $functions_path . '/options/' . $page );
				
		if ( 'save' == $_REQUEST['action'] ) {
					
			foreach ($options as $value) {
				if ( is_array($value['type'])) {
					foreach($value['type'] as $meta => $type){
						if($type == 'text'){
					        update_option( $meta, $_REQUEST[ $meta ]);
						}
					}                 
				}
				elseif($value['type'] != 'multicheck'){
					if(isset( $_REQUEST[ $value['id'] ])){update_option( $value['id'], $_REQUEST[ $value['id'] ] );} else { delete_option( $value['id'] ); }
                }
				else { 
					foreach($value['options'] as $mc_key => $mc_value){
						$up_opt = $value['id'].'_'.$mc_key;
						update_option($up_opt, $_REQUEST[$up_opt] );
					}
				} 
			}
		} 
		
		
		include( $functions_path . '/build.php' );
	}
	
	function build_admin_head() {
		if ('themes.php' == basename($_SERVER['SCRIPT_FILENAME'])) {
			echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/inc/functions/build.css" media="screen" />';
			echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/inc/functions/build.css" media="screen" />';
			echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/js/jquery.min.js"></script>';
			echo '<script type="text/javascript" src="'.get_bloginfo('template_directory').'/inc/functions/build.js"></script>';
		} //end of theme accesibility mode
	}
	
	add_action('admin_menu', 'startit');
	add_action('admin_head', 'build_admin_head');
?>