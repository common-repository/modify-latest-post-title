<?php
/**
 * Plugin Name: Modify Latest Post Title 
 * Description: A plugin to modify post titles to H3 in the latest posts block.
 * Version: 1.1
 * Author: Techopolis Online Solutions, LLC
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

function modify_latest_post_title_enqueue_script() {
    wp_enqueue_script(
        'modify-latest-post-title',
        plugin_dir_url(__FILE__) . 'js/modify-latest-post-title.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'modify_latest_post_title_enqueue_script');
