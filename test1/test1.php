<?php
/**
 * @package Test1
 * @version 1.0
 */
/*
Plugin Name: Test1
Plugin URI: 
Description: Test1
Author: 
Version: 1.0
Author URI: 
*/
function test1_enqueue() {
    //admin_enqueue_scripts for admin
    //login_enqueue_scripts
    wp_enqueue_script(
        'test1',
        plugins_url( 'test1.js', __FILE__ ),
        array('jquery')
    );
}
add_action( 'enqueue_block_assets', 'test1_enqueue' );
//enqueue_block_editor_assets
//enqueue_block_assets
//admin_enqueue_scripts

//https://developer.wordpress.org/reference/functions/wp_register_script/