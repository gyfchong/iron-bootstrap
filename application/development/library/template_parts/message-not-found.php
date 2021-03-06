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
 * Page not found message, suitable for a 404 message.
 */
?>

<section class="message message--not-found">

  <h3>Oops! Nothing Found Here :(</h3>
  <p>
    The page you are looking for does not exist. (404)
  </p>
  <?php if (LT3_ENABLE_SITE_SEARCH) : ?>
  <p>
    Try searching our site for what you are after.
  </p>
    <?php get_search_form(); ?>
  <?php endif; ?>

</section>
