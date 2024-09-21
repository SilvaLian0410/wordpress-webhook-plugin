<?php

/*
Plugin Name: Wordpress Webhook
Description: Add Webhook Funtionalities to Wordpress ( Save Post ) 
Version:     1.0 
Author:      Julian MyRehat
Author URI:  https://www.linkedin.com/in/julian-johari-b72720262/
License:     GPL2
text-domain : homey-webhook-plugin
*/

// Basic Security
defined('ABSPATH') or die('Unauthorized Access');

add_action( 'save_post', 'save_post_webhook', 10, 3); // post ID, Post Object, Boolean for saving Post

function save_post_webhook($post_id, $post) {

    $message = 'Post #' . $post_id . 'has been created';

    $url = 'Webhook Links';

    $args = array (
        'body' => array(
            'message' => $message

        )
        );

    wp_remote_post($url, $args);
}



