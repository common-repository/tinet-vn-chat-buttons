<?php
/*
Plugin Name: TINET.VN Chat Buttons
Plugin URI: https://tinet.vn/blog/wp-plugin/tinet-chat-buttons
Version: 1.2.0
Description: TINET.VN Chat Buttons is a free WordPress plugin for adding the live chat/call functionality of popular social media messaging apps.
Author: Hoàng Tiến (TINET . Digital Solution Services)
Author URI: https://tinet.vn
License: GPL2
Text Domain: tinetvn

TINET.VN Chat Buttons is a free WordPress plugin for adding the live chat/call functionality of popular social media messaging apps.
You should have received a copy of the GNU General Public License
along with TINET.VN Chat Buttons.
*/
if ( !defined( 'TINET_CHAT_BUTTONS' ) )
define( 'TINET_CHAT_BUTTONS', plugin_dir_url( __FILE__ ) );
if ( !defined( 'TINET_CHAT_BUTTONS_DIR' ) )
define( 'TINET_CHAT_BUTTONS_DIR', plugin_dir_path( __FILE__ ) );
include 'tinet-chat-buttons/tinet-chat-buttons.php';