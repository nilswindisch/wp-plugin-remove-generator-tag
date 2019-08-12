<?php
/**
 * @package Remove WordPress Generator Tag
 * @version 1.0
 */
/*
Plugin Name: Remove WordPress Generator Tag
Plugin URI: https://github.com/nilswindisch/wp-plugin-remove-generator-tag
Description: Remove WordPress Generator Tag
Author: Nils Windisch
Version: 1.0
Author URI: https://nilswindisch.de
*/

remove_action('wp_head', 'wp_generator');