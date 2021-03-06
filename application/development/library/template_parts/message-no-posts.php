<?php
/**
 * No Posts Message
 * ========================================================================
 * message-no-posts.php
 * @version      2.1 | June 6th 2013
 * @package      WordPress
 * @subpackage   lt3
 * @author       Beau Charman | @beaucharman | http://www.beaucharman.me
 * @link         https://github.com/beaucharman/lt3
 * @license      MIT license
 *
 * No posts via WordPress built in post type message.
 */
?>

<section class="message message--no-posts">

  <h3>Oops! Nothing Found Here :(</h3>
  <p>
    There are currently no posts associated with the <strong><?php single_cat_title(); ?></strong> category.
  </p>
  <?php if (LT3_ENABLE_SITE_SEARCH) : ?>
  <p>
    Try searching our site for what you are after.
  </p>
  <?php get_search_form(); ?>
  <?php endif; ?>

</section>
