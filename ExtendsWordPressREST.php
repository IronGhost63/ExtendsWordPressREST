<?php
/*
Plugin Name: My REST API Extension
Plugin URI:  https://github.com/IronGhost63/ExtendsWordPressREST
Description: Plugin skeleton. live with it.
Version:     0.1
Author:      Jirayu Yingthawornsuk
Author URI:  https://jirayu.in.th
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wc
*/


// Add hook
add_action( 'rest_api_init', 'register_endpoints');

// Function for new endpoints registration
function register_endpoints(){
	$route_base = 'wc/v1';

	register_rest_route($route_base, '/posts', array(
		'methods' => 'GET',
		'callback' => 'api_get_posts'
	));

	register_rest_route($route_base, '/posts/(?P<post_id>\d+)', array(
		'methods' => 'GET',
		'callback' => 'api_get_post'
	));
}

// Function to handle request on new endpoint
function api_get_posts(WP_REST_Request $request){
	/**
	* Call request parameter via $request['key']
	* Example: $request['role']
	*
	* Using $_GET or $_POST still doable
	* But why?
	*/

	$data = array(
		/** 
		* Whatever data to return.
		* Let's say we already have it.
		*/
	);

	/**
	* Return data as WP_REST_Response object
	* 
	* Object itself is decendant of WP_HTTP_Response
	* You can play with it
	*/
	$response = new WP_REST_Response($data);
	return $response;
}

function api_get_post(WP_REST_Request $request) {
	$post_id = $request['post_id'];

	$data = array(
		/* ....... */
	);

	$response = new WP_REST_Response($data);
	return $response;
}
?>