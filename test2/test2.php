<?php
/**
 * @package Test2
 * @version 1.0
 */
/*
Plugin Name: Tomato Style on Blocks
Version: 1.0
*/
function test2_enqueue() {
    //admin_enqueue_scripts for admin
    //login_enqueue_scripts
    wp_enqueue_script(
        'test2',
        plugins_url( 'test2.js', __FILE__ ),
        array('wp-blocks', 'wp-dom-ready', 'wp-edit-post')
    );
}
add_action( 'enqueue_block_editor_assets', 'test2_enqueue' );


function myguten_stylesheet() {
    wp_enqueue_style( 'myguten-style', plugins_url( 'style21.css', __FILE__ ) );
}
add_action( 'enqueue_block_assets', 'myguten_stylesheet' );