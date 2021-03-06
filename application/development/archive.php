<?php
/**
 * Archive
 * ========================================================================
 * archive.php
 * @version      2.1 | June 6th 2013
 * @package      WordPress
 * @subpackage   lt3
 * @author       Beau Charman | @beaucharman | http://www.beaucharman.me
 * @link         https://github.com/beaucharman/lt3
 * @license      MIT license
 *
 * Custom post type? Save this template page as archive-{{slug}}.php
 */

get_header(); ?>

  <?php global $post; global $wp_query; $post = $posts[0]; ?>

  <h1 class="content-title"><?php lt3_get_archive_title(); ?></h1>

  <?php if (term_description()) : ?>
  <p class="term-description">
    <?php echo term_description(); ?>
  </p >
  <?php endif; ?>

  <?php if (have_posts()) : ?>

    <?php get_template_part(LT3_TEMPLATE_PARTS_PATH . '/loop-archive', get_post_type($post->ID)); ?>

    <?php lt3_include_archive_pagination(); ?>

  <?php else : ?>

    <?php lt3_get_message('no-posts'); ?>

  <?php endif; ?>

<?php get_footer(); ?>
