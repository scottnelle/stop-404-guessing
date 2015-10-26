<?php
/*
Plugin Name: Stop 404 Guessing
Plugin URI: http://github.com/scottnelle.com/stop-404-guessing
Description: Prevent WordPress from guessing what a user meant and just show a 404 page.
Author: Scott Nelle
Version: 1.0
Author URI: http://scottnelle.com/
*/

function s404g_stop_404_guessing( $url ) {
	return ( is_404() ) ? false : $url;
}
add_filter( 'redirect_canonical', 's404g_stop_404_guessing' );
