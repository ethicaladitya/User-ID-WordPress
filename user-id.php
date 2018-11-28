<?php
 /**
* @package USER_ID
* @version 1.0
/*
Plugin Name: USER ID
Plugin URI: https://wordpress.org/
 Description: This Plugin shows your user ID.
Author: Aditya Shah
Version: 1.0
Author URI: https://iaditya.me
Text Domain: user-id
*/
function user_id() {
$chosen = get_current_user_id();
echo "<p id='UID'>$chosen</p>";
}
add_shortcode( 'user-id' , 'USER_ID' );