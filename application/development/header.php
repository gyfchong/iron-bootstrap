<?php
/**
 * Header
 * ========================================================================
 * header.php
 * @version      2.1 | June 6th 2013
 * @package      WordPress
 * @subpackage   lt3
 * @author       Beau Charman | @beaucharman | http://www.beaucharman.me
 * @link         https://github.com/beaucharman/lt3
 * @license      MIT license
 */
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
      <?php lt3_title(); ?>
    </title>

    <meta name="description" content="<?php lt3_meta_description(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">

    <?php if (! LT3_DEVELOPMENT_MODE) : ?>
    <!-- Google Analytics Code -->
    <?php endif; ?>

    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?>>

    <div class="page-header">

      <?php /* Site title  */?>
      <?php if (is_home() || is_front_page()) : ?><h1 class="site-heading"><?php endif; ?>
      <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?> home page link" class="site-title">
        <?php bloginfo('name'); ?>
      </a>
      <?php if (is_home() || is_front_page()) : ?></h1><?php endif; ?>

      <?php /* Site description  */?>
      <?php if (get_bloginfo('description')) : ?>
      <div class="site-description"><?php bloginfo('description'); ?></div>
      <?php endif; ?>

      <?php /* Display the main navigation menu  */?>
      <?php lt3_main_navigation_menu(); ?>

    </div>

    <div class="page-content">
