<?php
if ( !defined( 'TINET_CHAT_BUTTONS' ) )
define( 'TINET_CHAT_BUTTONS', plugin_dir_url( __FILE__ ) );
if ( !defined( 'TINET_CHAT_BUTTONS_DIR' ) )
define( 'TINET_CHAT_BUTTONS_DIR', plugin_dir_path( __FILE__ ) );

if(!class_exists('tinet_chat_buttons_options')){

class tinet_chat_buttons_options {
	public $_version = '1.0.0';
	public $_optionName = 'tinet_chat_buttons_options';
	public $_optionGroup = 'tinet_chat_buttons-options-group';
	public $_defaultOptions = array(
	    'tinet_chat_buttons_is_active' 	=>	'1',
	    'main_btn_icon_url' 	        =>	TINET_CHAT_BUTTONS . 'tinet-chat-buttons/img/main_button.png',
		'btn1_url'         =>  'tel:1234567890',
		'btn1_icon'    =>  TINET_CHAT_BUTTONS.'tinet-chat-buttons/img/call.png',
		'btn1_label'			=>	'Gọi ngay',
		'btn1_label_color'			=>	'#1b9ca2',
		'btn2_url'		=>	'https://www.messenger.com/t/your-number-phone-or-page-id',
		'btn2_icon'		=>	TINET_CHAT_BUTTONS.'tinet-chat-buttons/img/messenger.png',
		'btn2_label'	=>	'Messenger',
		'btn2_label_color'	=>	'#1b9ca2',
		'btn3_url'			=>	'https://zalo.me/your-number-phone',
		'btn3_icon'			=>	TINET_CHAT_BUTTONS.'tinet-chat-buttons/img/zalo.png',
		'btn3_label'	=>	'Zalo',
		'btn3_label_color'			=>	'#1b9ca2',
		'tinet_chat_buttons_is_show_btn3'			=>	'1',
		'btns_background_color'		=>	'#ffffff',
		'btn_size_width'		=>	'60',
		'btn_size_height'	=>	'60',
		'btn_label_text_size'	=>	'17',
		'btn_position_margin_right'	=>	'20',
		'btn_position_margin_bottom'			=>	'20',
		'tinet_chat_buttons_is_enable_zalo_script'			=>	'1',
		'tinet_chat_buttons_is_enable_facebook_script'			=>	'1',
		'zalo_code'			=>	'',
		'facebook_code'			=>	'',
		'zalo_position_margin_right'	=>	'90',
		'zalo_position_margin_bottom'			=>	'9',
		'fb_position_margin_right'		=>	'12',
		'fb_position_margin_bottom'		=>	'20',
		'main_btn_border_size'			=>	'2',
		'main_btn_border_color'		=>	'#38a3fd',
		'tinet_chat_buttons_is_show_buttons'		=>	'0',
		'tinet_chat_buttons_is_mobile_responsive'		=>	'1',
	);
	
	function __construct() {
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
		add_action( 'admin_init', array( $this, 'register_mysettings') );
		add_action( 'wp_enqueue_scripts', array($this, 'tinet_chat_buttons_enqueue_style_and_script') );
		add_action( 'wp_footer', array($this, 'tinet_chat_buttons_social_script_footer') );
		add_action('wp_footer', array($this, 'tinet_chat_buttons_footer' ));
	}
	function admin_menu() {
		add_options_page(
			__('TINET.VN Chat Buttons','tinet_chat_buttons'), 
			__('TINET.VN Chat Buttons','tinet_chat_buttons'),
			'manage_options',
			'tinet_chat_buttons',
			array(
				$this,
				'svl_tinet_chat_buttons_setting'
			)
		);
	}
	
	function register_mysettings() {
		register_setting( $this->_optionGroup, $this->_optionName );
	}

	function  svl_tinet_chat_buttons_setting() {
		include 'options-page.php';
	}
	
	function tinet_chat_buttons_footer(){
		$tinet_chat_buttons_options = wp_parse_args(get_option($this->_optionName),$this->_defaultOptions);
		if($tinet_chat_buttons_options['tinet_chat_buttons_is_active'] == 1){
			$this->add_chat_buttons();
		}
	}
	
	function tinet_chat_buttons_enqueue_style_and_script(){
		wp_enqueue_style( 'tcb-custom-style', plugin_dir_url( __FILE__ ) . 'css/tcb_common_style.css', array(), '1.0.3', false );
		wp_enqueue_script( 'tcb-custom-script', plugin_dir_url( __FILE__ ) . 'js/tcb_toggle.js', array(), '1.0.2', true );
	}
	
	function tinet_chat_buttons_social_script_footer(){
		$tinet_chat_buttons_options = wp_parse_args(get_option($this->_optionName),$this->_defaultOptions);
		if($tinet_chat_buttons_options['tinet_chat_buttons_is_active'] == 1){
			?>
			<!-- [START] -- TINET_CHAT_BUTTONS -->
			<?php
			if($tinet_chat_buttons_options['tinet_chat_buttons_is_enable_zalo_script'] == 1){
			?>
				<!-- TINET_CHAT_BUTTONS - ZALO LIVE CHAT -->
				<?php echo  $tinet_chat_buttons_options['zalo_code']; ?>
				<!-- TINET_CHAT_BUTTONS - ZALO LIVE CHAT -->
			<?php
			}
			if($tinet_chat_buttons_options['tinet_chat_buttons_is_enable_facebook_script'] == 1){
			?>
				<!-- TINET_CHAT_BUTTONS - FACEBOOK LIVE CHAT -->
				<?php echo  $tinet_chat_buttons_options['facebook_code']; ?>
				<!-- TINET_CHAT_BUTTONS - FACEBOOK LIVE CHAT -->
			<?php
			}
		}
	}

	function add_chat_buttons(){
	$tinet_chat_buttons_options = wp_parse_args(get_option($this->_optionName),$this->_defaultOptions);
		
	$main_btn_icon_url = $tinet_chat_buttons_options['main_btn_icon_url'];
	
	$btn1_url = $tinet_chat_buttons_options['btn1_url'];
	$btn1_icon = $tinet_chat_buttons_options['btn1_icon'];
	$btn1_label = $tinet_chat_buttons_options['btn1_label'];
	$btn1_label_color = $tinet_chat_buttons_options['btn1_label_color'];
	
	$btn2_url = $tinet_chat_buttons_options['btn2_url'];
	$btn2_icon = $tinet_chat_buttons_options['btn2_icon'];
	$btn2_label = $tinet_chat_buttons_options['btn2_label'];
	$btn2_label_color = $tinet_chat_buttons_options['btn2_label_color'];
	
	$btn3_url = $tinet_chat_buttons_options['btn3_url'];
	$btn3_icon = $tinet_chat_buttons_options['btn3_icon'];
	$btn3_label = $tinet_chat_buttons_options['btn3_label'];
	$btn3_label_color = $tinet_chat_buttons_options['btn3_label_color'];
	$tinet_chat_buttons_is_show_btn3 = $tinet_chat_buttons_options['tinet_chat_buttons_is_show_btn3'];
	
	$btns_background_color = $tinet_chat_buttons_options['btns_background_color'];
	
	$btn_size_width = $tinet_chat_buttons_options['btn_size_width'];
	$btn_size_height = $tinet_chat_buttons_options['btn_size_height'];
	
	$btn_label_text_size = $tinet_chat_buttons_options['btn_label_text_size'];
	
	$btn_position_margin_right = $tinet_chat_buttons_options['btn_position_margin_right'];
	$btn_position_margin_bottom = $tinet_chat_buttons_options['btn_position_margin_bottom'];
	
	$zalo_code = $tinet_chat_buttons_options['zalo_code'];
	$zalo_position_margin_right = $tinet_chat_buttons_options['zalo_position_margin_right'];
	$zalo_position_margin_bottom = $tinet_chat_buttons_options['zalo_position_margin_bottom'];
	
	$facebook_code = $tinet_chat_buttons_options['facebook_code'];
	$fb_position_margin_right = $tinet_chat_buttons_options['fb_position_margin_right'];
	$fb_position_margin_bottom = $tinet_chat_buttons_options['fb_position_margin_bottom'];
	
	$fb_position_margin_bottom_of_dialog = (int)($tinet_chat_buttons_options['fb_position_margin_bottom']) + 55;
	
	$main_btn_border_size = $tinet_chat_buttons_options['main_btn_border_size'];
	$main_btn_border_color = $tinet_chat_buttons_options['main_btn_border_color'];
	$tinet_chat_buttons_is_show_buttons = $tinet_chat_buttons_options['tinet_chat_buttons_is_show_buttons'];
	$tinet_chat_buttons_is_mobile_responsive = $tinet_chat_buttons_options['tinet_chat_buttons_is_mobile_responsive'];
    ?>
	<div id="tinet-chat-buttons-id" class="tinet-chat-buttons-id <?php echo $tinet_chat_buttons_is_show_buttons == 1 ? 'is-show-chat-list' : ''; ?>">
		<a class="open-chat-list-btn">
				  <i class="btn-call tcb-icon tinet-chat-buttons-main-button btn-call__ico">
				  	  	<div class="btn-call__ico"></div>
				  </i>
		</a>
	   <div class="tinet-chat-buttons-contact-list">
		  <div class="tcb-button tcb-button-1">
			 <a href="<?php echo  $btn1_url; ?>">
				 <i class="tcb-icon tcb-icon-1"></i>
				 <span class="slide-label"><p><?php echo  $btn1_label; ?></p></span>
			 </a>
		  </div>
		  <div class="tcb-button tcb-button-2">
			 <a href="<?php echo  $btn2_url; ?>" target="_blank">
				 <i class="tcb-icon tcb-icon-2"></i>
				 <span class="slide-label"><p><?php echo  $btn2_label; ?></p></span>
			 </a>
		  </div>
		<?php
		  if($tinet_chat_buttons_is_show_btn3 == 1){
		?>
		  <div class="tcb-button tcb-button-3">
			 <a href="<?php echo  $btn3_url; ?>" target="_blank">
				 <i class="tcb-icon tcb-icon-3"></i>
				 <span class="slide-label"><p><?php echo  $btn3_label; ?></p></span>
			 </a>
		  </div>
		<?php
		  }
		?>
	   </div>
	</div>
    <style type="text/css">
	#tinet-chat-buttons-id {
			bottom: <?php echo  $btn_position_margin_bottom . 'px'; ?>;
			right: <?php echo  $btn_position_margin_right . 'px'; ?>;
        }
		
        #tinet-chat-buttons-id .slide-label {
			height: <?php echo  $btn_size_height . 'px'; ?>;
        }

        #tinet-chat-buttons-id .tcb-button,
		#tinet-chat-buttons-id .tcb-icon,
		#tinet-chat-buttons-id{
			width: <?php echo  $btn_size_width . 'px'; ?>;
			height: <?php echo  $btn_size_height . 'px'; ?>;
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button a .slide-label {
			font-size: <?php echo  $btn_label_text_size . 'px'; ?>;
        }
		
		#tinet-chat-buttons-id .tcb-icon,
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button .slide-label{
			background-color: <?php echo  $btns_background_color; ?>;
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-1 .slide-label {
			color: <?php echo  $btn1_label_color; ?>;
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-2 .slide-label {
			color: <?php echo  $btn2_label_color; ?>;
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-3 .slide-label {
			color: <?php echo  $btn3_label_color; ?>;
        }
		
		#tinet-chat-buttons-id .open-chat-list-btn .tinet-chat-buttons-main-button {
			background-image: url(<?php echo  $main_btn_icon_url; ?>);
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-1 a .tcb-icon-1 {
			background-image: url(<?php echo  $btn1_icon; ?>);
        }

        #tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-2 a .tcb-icon-2 {
			background-image: url(<?php echo  $btn2_icon; ?>);
        }
		
		#tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button-3 a .tcb-icon-3 {
			background-image: url(<?php echo  $btn3_icon; ?>);
        }
		
		.btn-call {
			border: <?php echo  $main_btn_border_size . 'px'; ?> solid <?php echo  $main_btn_border_color; ?>;
		}
		
		#fb-root .fb_dialog_content iframe{
			bottom: <?php echo  $fb_position_margin_bottom . 'px'; ?> !important;
			left: <?php echo  $fb_position_margin_right . 'px'; ?> !important;
		}
		
		#fb-root .fb-customerchat iframe{
			bottom: <?php echo  $fb_position_margin_bottom_of_dialog . 'px'; ?> !important;
			left: <?php echo  $fb_position_margin_right . 'px'; ?> !important;
		}
		
		.zalo-chat-widget{
			bottom: <?php echo  $zalo_position_margin_bottom . 'px'; ?> !important;
			right: <?php echo  $zalo_position_margin_right . 'px'; ?> !important;
		}
		
		#tinet-chat-buttons-id  .tinet-chat-buttons-contact-list .tcb-button a{
			background-color: <?php echo  $btns_background_color; ?>;
		}
    </style>
	
	
	<?php 
	if ( $tinet_chat_buttons_is_mobile_responsive == 1 ) { ?>
	<style>
				/* MOBILE STYLE */
		@media only screen and (max-width: 549px) {
			#tinet-chat-buttons-id {
				position: absolute;
				left: 0;
				position: fixed;
				bottom: 0px !important;
				display: block !important;
				width: 100% !important;
				box-shadow: 1px 1px 1px #fff, 0px -1px 15px #fff !important;
				}
			#tinet-chat-buttons-id .open-chat-list-btn{
				display: none;
				}
			#tinet-chat-buttons-id .tinet-chat-buttons-contact-list{
			bottom: 100% !important;
			opacity: 1 !important;
			pointer-events: auto;
			transform: scale(1);
				display: block;
				position: static !important;
				display: flex !important;
				width: 100% !important;
				}
			#tinet-chat-buttons-id .tinet-chat-buttons-contact-list div:first-child{
			border-right: 5px solid #d6d6d6;
				}
			#tinet-chat-buttons-id .tinet-chat-buttons-contact-list div:last-child{
			border-left: 5px solid #d6d6d6;
				}
			#tinet-chat-buttons-id  .tinet-chat-buttons-contact-list .tcb-button{
				display: inline-block !important;
				border-radius: 0;
				width: 33.33333333%;
				margin: 0px !important;
				padding: 0px !important;
				display: flex;
				}
			#tinet-chat-buttons-id  .tinet-chat-buttons-contact-list .tcb-button a{
				position: static !important;
				/* background-color: #fff; */
				}
			#tinet-chat-buttons-id  .tinet-chat-buttons-contact-list .tcb-button .tcb-icon{
				position: static !important;
				margin: 0 auto !important;
				}
			 #tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button a .slide-label {
				 display: none;
			  }
			 #tinet-chat-buttons-id .tinet-chat-buttons-contact-list .tcb-button a .tcb-icon {
				-webkit-box-shadow: none;
				-moz-box-shadow: none;
				box-shadow: none;
			}
		}
		/* MOBILE STYLE */
				
	</style>
	<?php } ?>
	
	
	
	
<!-- [END] -- TINET_CHAT_BUTTONS -->

<?php }
}
new tinet_chat_buttons_options;
}