<div id="wpc_themeoption">
	<div class="to-header clearfix">
		<div class="to-logo"><a href="http://wpcrunchy.com"><img src="<?php bloginfo('template_directory'); ?>/inc/functions/images/wpcrunchy.png" border="0" /></a></div>
		<div class="to-bigassbutton"><a id="buildsave" href="#">Сохранить настройки</a></div>
	</div>
	<div class="to-navbtn clearfix">
		<ul>
			<li class="docu"><a href="http://www.wpbot.ru/" target="_blank">ПЕРЕВОД ТЕМЫ: GOODWIN</a></li>
			<li class="forum"><a href="http://wpcrunchy.com/support/" target="_blank">ПОДДЕРЖКА (АНГЛ.)</a></li>
			<li class="gosite"><a href="http://wpcrunchy.com" target="_blank">САЙТ АВТОРА &rarr;</a></li>
		</ul>
	</div>
	<form id="buildform" name="buildform" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	<div class="to-body clearfix">
		<div class="to-navsections">
			<ul>
				<?php foreach ($options as $value) : if($value['type'] == "section") : ?>
				<li><a href="#totab-<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></li>
				<?php endif; endforeach; ?>
			</ul>
		</div>
		<div class="to-sections">
			<?php foreach ($options as $value) : ?>
			<?php
				switch($value['type']) {
					case 'spacer':
					settings_wrapper_header();
					?>
					<div style="height:150px; "><!-- spacer --></div>
					<?php
					settings_wrapper_footer();
					break;
					case 'section':
					?>
					<div id="totab-<?php if($value['type'] == "section") { echo $value['id']; } ?>" class="to-section clearfix">
					<?php
					break;
					case 'text':
					settings_wrapper_header();
					?>
					<h2><?php echo $value['name']; ?></h2>
					<div class="to-type"><input class="noround" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes( get_settings( $value['id'] ) ); } else { echo stripslashes( $value['std'] ); } ?>" size="<?php if($value['size'] == '') { echo '60%'; } else { echo $value['size']; } ?>" /></div>
					<span class="to-description"><?php echo $value['description']; ?></span>
					<?php
					settings_wrapper_footer();
					break;
					case 'textarea':
					settings_wrapper_header();
					?>
					<h2><?php echo $value['name']; ?></h2>
					<div class="to-type"><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="90" rows="4"><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes( get_settings( $value['id'] ) ); } else { echo stripslashes( $value['std'] ); } ?></textarea></div>
					<span class="to-description"><?php echo $value['description']; ?></span>
					<?php
					settings_wrapper_footer();
					break;
					case 'checkbox':
					settings_wrapper_header();
						if( get_settings($value['id'] ) ) { 
							$checked = " checked=\"checked\""; 
						} else { 
							$checked = ""; 
						}
					?>
					<h2><?php echo $value['name']; ?></h2>
					<div class="to-type"><input <?php echo $value['disabled']; ?> class="input_checkbox" type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />&nbsp;<label for="<?php echo $value['id']; ?>"><?php echo $value['label']; ?></label></div>
					<span class="to-description"><?php echo $value['description']; ?></span>
					<?php
					settings_wrapper_footer();
					break;
					case 'multicheck':
					settings_wrapper_header();
					echo '<h2>'.$value['name'].'</h2><div class="to-type clearfix"><ul class="multi">';
					//print_r($value['options']);
					foreach ($value['options'] as $key => $option) {
						$pn_key = $value['id'] . '_'. $key;
						$checkbox_setting = get_settings($pn_key);
						if($checkbox_setting != ''){
							if (get_settings($pn_key) ) {
								$checked = "checked=\"checked\"";
								} else {
									$checked = "";
								}
						}else{
							if($key == $value['std']){
								$checked = "checked=\"checked\"";
							}else{
								$checked = "";
							}
						}
					?>
					<li><input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> />&nbsp;<label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label></li>
					<?php
					}
					?>
					</ul></div>
					<span class="to-description"><?php echo $value['description']; ?></span>
					<?php
					settings_wrapper_footer();
					break;
					case 'select':
					settings_wrapper_header();
					?>
					<h2><?php echo $value['name']; ?></h2>
					<div class="to-type">
					<select name="<?php echo $value['id']; ?>">
					<?php foreach ($value['options'] as $option) { ?>
                		<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
                	<?php } ?>
					</select>
					</div>
					<span class="to-description"><?php echo $value['description']; ?></span>
					<?php
					settings_wrapper_footer();
					break;
					case 'sectionbreak':
					echo '</div>';
				}
			?>
			<?php endforeach; ?>
		</div>
			<input type="hidden" name="action" value="save" />
	</div>
	</form>
	<div class="to-footer clearfix">
		<div class="to-copyright">&copy; <?php echo date('Y'); ?> - <?php echo $themename; ?> BY WPCRUNCHY</div>
		<div class="to-connect clearfix">
					</div>
	</div>
</div>
<?php
	function settings_wrapper_header() {
		echo '<div class="settings-wrapper clearfix">';
	}
	
	function settings_wrapper_footer() {
		echo '</div>';
	}
	
?>




