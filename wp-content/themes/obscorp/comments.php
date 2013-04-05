<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>

				<h2>Защищено паролем. Введите пароль для просмотра.</h2>

				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$alt = false;
?>
<h2 class="comment-head"><?php if(comments_open()) { comments_number('Пока нет комментариев к записи ', '1 комментарий к записи ', '% коммент. к записи ' ); the_title(); } else { echo 'КОММЕНТИРОВАНИЕ ЗАКРЫТО'; } ?></h2>
<?php if ( have_comments() ) : ?>
<ol class="comment-list">
	<?php wp_list_comments('type=comment&callback=wp_threaded_comments'); ?>
</ol>
<?php else: ?>
<p style="padding-top:10px; ">Пока без комментариев.</p>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<div id="respond">
	<h2 class="comment-head"><?php comment_form_title( 'Прокомментировать', 'Прокомментировать %s' ); ?></h2>
	<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link(); ?></small>
	</div>
	<div class="respond-form clearfix">
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
			Пожалуйста,  <a href="<?php echo wp_login_url( get_permalink() ); ?>">зарегистрируйтесь </a> для комментирования.
		<?php else : ?>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
			<?php if ( is_user_logged_in() ) : ?>
			<p style="text-transform:uppercase; ">Здравствуйте,  <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Выход">Выйти &raquo;</a></p>
			<?php else : ?>
			<p><input class="author" onFocus="this.style.backgroundColor='#f5f5f5'" onBlur="this.style.backgroundColor='#fff'" type="text" name="author" id="author" value="" size="22" tabindex="1" /></p>
			<p><input class="email" onFocus="this.style.backgroundColor='#f5f5f5'" onBlur="this.style.backgroundColor='#fff'" type="text" name="email" id="email" value="" size="22" tabindex="2" /></p>
			<p><input class="url" onFocus="this.style.backgroundColor='#f5f5f5'" onBlur="this.style.backgroundColor='#fff'" type="text" name="url" id="url" value="" size="22" tabindex="3" /></p>
			<?php endif; ?>
			<p><textarea onFocus="this.style.backgroundColor='#f5f5f5'" onBlur="this.style.backgroundColor='#fff'" name="comment" id="comment" tabindex="4"></textarea></p>
			<input name="submit" type="submit" class="btn blue submit-btn" tabindex="5" value="Отправить" /><input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>
			</form>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>

















