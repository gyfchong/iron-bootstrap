<?php
/**
 * Widgets
 * ========================================================================
 * widgets.php
 * @version      2.1 | 6th June 2013
 * @package      WordPress
 * @subpackage   lt3
 * @author       Beau Charman | @beaucharman | http://www.beaucharman.me
 * @link         https://github.com/beaucharman/lt3
 * @license      MIT license
 *
 * For more info, and variations:
 * http://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * To use in a theme template:
 *   dynamic_sidebar('sidebar-id');
 */

/* ========================================================================
   Widget Areas
   ======================================================================== */

if (LT3_ENABLE_WIDGETS)
{
  /**
   * Register Primary Sidebar
   * ========================================================================
   * lt3_register_primary_sidebar()
   */
  add_action('widgets_init', 'lt3_register_primary_sidebar');
  function lt3_register_primary_sidebar()
  {
    register_sidebar(array(
      'name'          => __('Primary Sidebar Widgets'),
      'id'            => 'primary-sidebar-widgets',
      'description'   => __('These are widgets for the site\'s Primary Sidebar.'),
      'before_widget' => '<div class="widget widget--primary-sidebar %2$s %1$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>'
    ));
  }

  // Register more sidebars here...

}
else
{
  /**
   * Disable widgets
   */
  add_action('admin_init', 'lt3_remove_theme_submenus');
  function lt3_remove_theme_submenus() {
    global $submenu;
    unset($submenu['themes.php'][7]);
  }
}
