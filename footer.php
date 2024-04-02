<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 6.0.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>


<footer>

  <div class="<?= apply_filters('bootscore/class/footer', 'bg-body-tertiary pt-5 pb-3'); ?> bootscore-footer">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer'); ?>">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="col-6 col-lg-3">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="col-6 col-lg-3">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="col-6 col-lg-3">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <div class="col-6 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div>

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php get_template_part('template-parts/footer/footer-menu'); ?>

    </div>
  </div>

  <div class="<?= apply_filters('bootscore/class/footer_info', 'bg-body-tertiary text-body-secondary border-top py-2 text-center'); ?> bootscore-info">
    <div class="<?= apply_filters('bootscore/class/container', 'container', 'footer-info'); ?>">
      <?php if (is_active_sidebar('footer-info')) : ?>
        <?php dynamic_sidebar('footer-info'); ?>
      <?php endif; ?>
      <div class="small bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> <?php bloginfo('name'); ?></div>
    </div>
  </div>

</footer>

<!-- To top button -->
<a href="#" class="<?= apply_filters('bootscore/class/to_top_button', 'btn btn-primary shadow'); ?> position-fixed z-1 top-button"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
