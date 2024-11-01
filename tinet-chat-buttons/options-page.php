<?php
if ( !defined( 'TINET_CHAT_BUTTONS' ) )
define( 'TINET_CHAT_BUTTONS', plugin_dir_url( __FILE__ ) );
if ( !defined( 'TINET_CHAT_BUTTONS_DIR' ) )
define( 'TINET_CHAT_BUTTONS_DIR', plugin_dir_path( __FILE__ ) );
?>
<div class="wrap">
	<h1>TINET.VN Chat Buttons</h1>

	<form method="post" action="options.php" novalidate="novalidate">
	<?php
	settings_fields( $this->_optionGroup );
	$tinet_chat_buttons_options = wp_parse_args(get_option($this->_optionName),$this->_defaultOptions);

	?>
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label for="activeplugin">Active plugin?</label></th>
					<td>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_active]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_active'])?> value="1" />Yes</label>
	                    <label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_active]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_active'])?> value="0" />No</label>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Main button</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[main_btn_icon_url]" id="main_btn_icon_url" value="<?php echo $tinet_chat_buttons_options['main_btn_icon_url']?>"/><br>
									<p class="description">Icon URL <small>(<a href="https://icons8.com/icons/set/social-networks" target="_blank">How to get?</a>)</small></p>
								</td>
							</tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[main_btn_border_size]" id="main_btn_border_size" value="<?php echo $tinet_chat_buttons_options['main_btn_border_size']?>"/>px<br>
									<p class="description">Border size</p>
								</td>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[main_btn_border_color]" id="main_btn_border_color" value="<?php echo $tinet_chat_buttons_options['main_btn_border_color']?>"/><br>
									<p class="description">Border color</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Contact button 1</label></th>
					<td>
						<table>
							<tr><hr></tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn1_url]" id="btn1_url" value="<?php echo $tinet_chat_buttons_options['btn1_url']?>"/><br>
									<p class="description">URL</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn1_label]" id="btn1_label" value="<?php echo $tinet_chat_buttons_options['btn1_label']?>"/><br>
									<p class="description">Label</p>
								</td>
							</tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn1_icon]" id="btn1_icon" value="<?php echo $tinet_chat_buttons_options['btn1_icon']?>"/><br>
									<p class="description">Icon URL <small>(<a href="https://icons8.com/icons/set/social-networks" target="_blank">How to get?</a>)</small></p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn1_label_color]" id="btn1_label_color" value="<?php echo $tinet_chat_buttons_options['btn1_label_color']?>"/><br>
									<p class="description">Label color</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>		
				<tr>
					<th scope="row"><label for="">Contact button 2</label></th>
					<td>
						<table>
							<tr><hr></tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn2_url]" id="btn2_url" value="<?php echo $tinet_chat_buttons_options['btn2_url']?>"/><br>
									<p class="description">URL</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn2_label]" id="btn2_label" value="<?php echo $tinet_chat_buttons_options['btn2_label']?>"/><br>
									<p class="description">Label</p>
								</td>
							</tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn2_icon]" id="btn2_icon" value="<?php echo $tinet_chat_buttons_options['btn2_icon']?>"/><br>
									<p class="description">Icon URL <small>(<a href="https://icons8.com/icons/set/social-networks" target="_blank">How to get?</a>)</small></p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn2_label_color]" id="btn2_label_color" value="<?php echo $tinet_chat_buttons_options['btn2_label_color']?>"/><br>
									<p class="description">Label color</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Contact button 3</label></th>
					<td>
						<table>
							<tr><hr></tr>
							<tr>
								<th scope="row"><label for="show-btn-3">Show this button?</label></th>
								<td>
									<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_show_btn3]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'])?> value="1" />Yes</label>
									<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_show_btn3]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'])?> value="0" />No</label>
									<p class="description">Tùy chọn này giúp bạn thiết lập chế độ ban đầu là hiển thị danh sách các nút ra hay ẩn đi.</p>
								</td>
							</tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn3_url]" id="btn3_url" value="<?php echo $tinet_chat_buttons_options['btn3_url']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'] == 0?'disabled':''; ?>/><br>
									<p class="description">URL</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn3_label]" id="btn3_label" value="<?php echo $tinet_chat_buttons_options['btn3_label']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'] == 0?'disabled':''; ?>/><br>
									<p class="description">Label</p>
								</td>
							</tr>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn3_icon]" id="btn3_icon" value="<?php echo $tinet_chat_buttons_options['btn3_icon']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'] == 0?'disabled':''; ?>/><br>
									<p class="description">Icon URL <small>(<a href="https://icons8.com/icons/set/social-networks" target="_blank">How to get?</a>)</small></p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn3_label_color]" id="btn3_label_color" value="<?php echo $tinet_chat_buttons_options['btn3_label_color']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'] == 0?'disabled':''; ?>/><br>
									<p class="description">Label color</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="show-btn-3">Show buttons first?</label></th>
					<td>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_show_buttons]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_show_buttons'])?> value="1" />Yes</label>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_show_buttons]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_show_buttons'])?> value="0" />No</label>
					</td>
				</tr>	
				<tr>
					<th scope="row"><label for="show-btn-3">Enable mobile responsive?</label></th>
					<td>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_mobile_responsive]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_mobile_responsive'])?> value="1" />Yes</label>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_mobile_responsive]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_mobile_responsive'])?> value="0" />No</label>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Buttons background color</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btns_background_color]" id="btns_background_color" value="<?php echo $tinet_chat_buttons_options['btns_background_color']?>"/>
								</td>
							</tr>
						</table>
					</td>
				</tr>	
				<tr>
					<th scope="row"><label for="">Label font size</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn_label_text_size]" id="btn_label_text_size" value="<?php echo $tinet_chat_buttons_options['btn_label_text_size']?>"/>px
								</td>
							</tr>
						</table>
					</td>
				</tr>	
				<tr>
					<th scope="row"><label for="">Button size</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn_size_width]" id="btn_size_width" value="<?php echo $tinet_chat_buttons_options['btn_size_width']?>"/>px<br>
									<p class="description">Width</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn_size_height]" id="btn_size_height" value="<?php echo $tinet_chat_buttons_options['btn_size_height']?>"/>px<br>
									<p class="description">Height</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>	
				<tr>
					<th scope="row"><label for="">Button position</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[btn_position_margin_right]" id="btn_position_margin_right" value="<?php echo $tinet_chat_buttons_options['btn_position_margin_right']?>"/>px<br>
									<p class="description">Margin right</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[btn_position_margin_bottom]" id="btn_position_margin_bottom" value="<?php echo $tinet_chat_buttons_options['btn_position_margin_bottom']?>"/>px<br>
									<p class="description">Margin Bottom</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="show-btn-3">Enable Zalo live chat?</label></th>
					<td>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_enable_zalo_script]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'])?> value="1" />Yes</label>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_enable_zalo_script]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'])?> value="0" />No</label>
					</td>
				</tr>				
				<tr>
					<th scope="row"><label for="html_code_l">Zalo Live Chat JavaScript<br><small><a href="#" target="_blank">How to get?</a></small></label></th>
					<td>
						<textarea rows="5" cols="50" name="<?php echo $this->_optionName?>[zalo_code]" id="zalo_code" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'] == 0?'disabled':''; ?>><?php echo esc_textarea($tinet_chat_buttons_options['zalo_code'])?></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Zalo button position</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[zalo_position_margin_right]" id="zalo_position_margin_right" value="<?php echo $tinet_chat_buttons_options['zalo_position_margin_right']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'] == 0?'disabled':''; ?>/>px<br>
									<p class="description">Margin right</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[zalo_position_margin_bottom]" id="zalo_position_margin_bottom" value="<?php echo $tinet_chat_buttons_options['zalo_position_margin_bottom']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'] == 0?'disabled':''; ?>/>px<br>
									<p class="description">Margin bottom</p>
								</td>
							</tr>
						</table>
					</td>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="show-btn-3">Enable Facebook live chat?</label></th>
					<td>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_enable_facebook_script]" <?php checked('1',$tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'])?> value="1" />Yes</label>
						<label><input type="radio" name="<?php echo $this->_optionName?>[tinet_chat_buttons_is_enable_facebook_script]" <?php checked('0',$tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'])?> value="0" />No</label>
					</td>
				</tr>					
				<tr>
					<th scope="row"><label for="html_code_r">Facebook Live Chat JavaScript<br><small><a href="#" target="_blank">How to get?</a></small></label></th>
					<td>
						<textarea rows="5" cols="50" name="<?php echo $this->_optionName?>[facebook_code]" id="facebook_code" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'] == 0?'disabled':''; ?>><?php echo esc_textarea($tinet_chat_buttons_options['facebook_code'])?></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="">Facebook button position</label></th>
					<td>
						<table>
							<tr>
								<td style="padding:0">
									<input type="text" name="<?php echo $this->_optionName?>[fb_position_margin_right]" id="fb_position_margin_right" value="<?php echo $tinet_chat_buttons_options['fb_position_margin_right']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'] == 0?'disabled':''; ?>/>px<br>
									<p class="description">Margin left</p>
								</td>
								<td style="padding:0 0 0 10px">
									<input type="text" name="<?php echo $this->_optionName?>[fb_position_margin_bottom]" id="fb_position_margin_bottom" value="<?php echo $tinet_chat_buttons_options['fb_position_margin_bottom']?>" <?php echo  $tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'] == 0?'disabled':''; ?>/>px<br>
									<p class="description">Margin bottom</p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<?php do_settings_fields('tinet_chat_buttons-options-group', 'default'); ?>
			</tbody>
		</table>
		<?php do_settings_sections('tinet_chat_buttons-options-group', 'default'); ?>
		<?php submit_button();?>
	</form>
</div>
