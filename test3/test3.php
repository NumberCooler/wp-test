<?php
/**
 * @package Test3
 * @version 1.0
 */
/*
Plugin Name: Block1
Version: 1.0
*/
function test3_enqueue() {
    //admin_enqueue_scripts for admin
    //login_enqueue_scripts
    $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

    wp_enqueue_script(
        'test3',
        plugins_url( 'build/index.js', __FILE__ ),
        $asset_file['dependencies'],
        $asset_file['version']
    );
}

//add_action( 'enqueue_block_assets', 'test3_enqueue' );

add_action( 'enqueue_block_assets', 'test3_enqueue' );