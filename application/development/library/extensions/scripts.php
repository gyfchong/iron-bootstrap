<?php
/**
 * Scripts
 * ========================================================================
 * scripts.php
 * @version      2.1 | June 6th 2013
 * @package      WordPress
 * @subpackage   lt3
 * @author       Beau Charman | @beaucharman | http://www.beaucharman.me
 * @link         https://github.com/beaucharman/lt3
 * @license      MIT license
 *
 * To include scripts correctly, use the wp_register_script, and wp_enqueue_script functions:
 * http://codex.wordpress.org/Function_Reference/wp_register_script
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 *
 * Use wp_deregister_script to unregister an unneeded or troublesome script:
 * http://codex.wordpress.org/Function_Reference/wp_deregister_script
 */

/* Register and Enqeue local scripts
   ======================================================================== */
add_action('wp_enqueue_scripts', 'lt3_load_scripts');
function lt3_load_scripts()
{

  /**
   * Register scripts here
   */
  wp_register_script('lt3_modernizr', LT3_FULL_SCRIPTS_PATH . '/vendor/modernizr.min.js', array(), '0.1', false);
  wp_register_script('lt3_jquery', LT3_FULL_SCRIPTS_PATH . '/vendor/jquery.min.js', array(), '0.1', true);
  wp_register_script('lt3_plugins', LT3_FULL_SCRIPTS_PATH . '/plugins.js', array(), LT3_SCRIPTS_CACHE_BREAK, true);
  wp_register_script('lt3_main', LT3_FULL_SCRIPTS_PATH . '/main.js', array(), LT3_SCRIPTS_CACHE_BREAK, true);
  
  /* Modernizr */
  wp_enqueue_script('lt3_modernizr');

  /* jQuery */
  wp_enqueue_script('lt3_jquery');

  /* Plugins */
  wp_enqueue_script('lt3_plugins');
  
  if (is_singular() && get_option('thread_comments') && LT3_ENABLE_COMMENTS)
  {
    wp_enqueue_script('comment-reply');
  }

  /* Main project JavaScript */
  wp_enqueue_script('lt3_main');
}
