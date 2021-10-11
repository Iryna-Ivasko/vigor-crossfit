<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<footer class="site-footer">
    <div class="row column">
        <div class="footer">
            <div class="footer__item footer__logo">
                <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php $footer_logo_id = attachment_url_to_postid(get_theme_mod('footer_logo'));
                    if ($footer_logo_id) :
                        $footer_logo = wp_get_attachment_image_src($footer_logo_id, 'footer-logo'); ?>
                        <img src="<?= $footer_logo[0] ?>" alt="<?php bloginfo('name'); ?>"/>
                    <?php else : ?>
                        <?php bloginfo('name'); ?>
                    <?php endif ?>
                </a>
            </div>
            <?php if ($footer_about = get_field('footer_about', 'option')): ?>
                <div class="footer__item footer__about">
                    <div class="footer-title"><?= __('About', 'foundationpress') ?></div>
                    <div><?= $footer_about; ?></div>
                </div>
            <?php endif; ?>

            <?php if (has_nav_menu('footer-menu-1')) : ?>
                <nav aria-label="First menu" class="footer__item footer__nav">
                    <?php $menu_1_title = wp_get_nav_menu_name("footer-menu-1");
                    if ($menu_1_title): ?>
                        <div class="footer-title"><?= $menu_1_title; ?></div>
                    <?php endif; ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-1',
                        'container' => false,
                        'menu_class' => 'footer__menu menu',
                    )); ?>
                </nav>
            <?php endif; ?>
            <?php if (has_nav_menu('footer-menu-2')) : ?>
                <nav aria-label="Second menu" class="footer__item footer__nav">
                    <?php $menu_2_title = wp_get_nav_menu_name("footer-menu-2");
                    if ($menu_2_title): ?>
                        <div class="footer-title"><?= $menu_2_title; ?></div>
                    <?php endif; ?>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu-2',
                        'container' => false,
                        'menu_class' => 'footer__menu menu',
                    )); ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php if (get_theme_mod('wpt_mobile_menu_layout') == 'offcanvas') : ?>
    </div><!-- Close off-canvas wrapper inner -->
    </div><!-- Close off-canvas wrapper -->
    </div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
