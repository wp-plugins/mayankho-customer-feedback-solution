<div class="wrap">
	<h2>Mayankho Wordpress integration</h2>
	<div class="postbox-container" style="width:70%;">
		<div class="metabox-holder">
			<div class="meta-box-sortables ui-sortable">

					<form method="post" action="options.php">
						<div class="postbox">
						<div class="handlediv" title="Click to toggle"><br></div>
						<?php wp_nonce_field('update-options'); ?>
						<?php settings_fields('mayankho'); ?>
						<h3 class="hndle ui-sortable-handle"><span>Settings</span></h3>
							<div class="inside">
								<p></p>
								<table class="form-table">

								<tr valign="top">
								<th scope="row">Mayankho code:</th>
								<td><textarea name="mayankho_code" rows="10" cols="70" value="<?php echo htmlentities(get_option('mayankho_code')); ?>" style="width:450px;height:250px!important;resize:none;" /><?php echo htmlentities(get_option('mayankho_code')); ?></textarea></td>
								</tr>

								</tr>

								</table>
								<input type="hidden" name="action" value="update" />
								<p class="submit">
								<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
								</p>
							</div>
						</div>
						<div id="usageexplanation" class="postbox">
							<div class="handlediv" title="Click to toggle"><br></div>
							<h3 class="hndle ui-sortable-handle"><span>Explanation of usage</span></h3>

							<div class="inside">
								<p>Simply get your project code from <a href="http://www.mayankho.com">Mayanhko</a> and paste it into the box. The project will run on your website immediately once you press the save changes button. </p>				
							</div>
						</div>
					</form>
			</div>
		</div>
	</div>
	
	<div class="postbox-container" style="width:18%; margin-left: 10px;">
					<div class="metabox-holder">
						<div class="meta-box-sortables ui-sortable">
										<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br></div>
				<h3 class="hndle ui-sortable-handle"><span>Like this plugin?</span></h3>

				<div class="inside">
					<p>Why not do any or all of the following:</p><ul><li><a href="">Link to it so other folks can find out about it.</a></li><li><a href="http://wordpress.org/extend/plugins/slideshare/">Give it a good rating on WordPress.org.</a></li><li><a href="http://wordpress.org/extend/plugins/slideshare/">Let other people know that it works with your WordPress setup.</a></li></ul>				</div>
			</div>
									</div>
						<br><br><br>
					</div>
				</div>
</div>


