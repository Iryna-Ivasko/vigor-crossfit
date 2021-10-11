<?php
/*
Template Name: Home
*/
get_header(); ?>

<main class="home-main">

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/top-banner'); ?>

        <?php $goal_section_title = get_field('goal_section_title');
        $goal_section_text = get_field('goal_section_text');
        if ($goal_section_title || $goal_section_text): ?>
            <section class="section section--goal">
                <div class="row align-center">
                    <?php if ($goal_section_title): ?>
                        <div class="column small-12 medium-10 large-5">
                            <h2 class="section__title"><?= $goal_section_title ?></h2>
                        </div>
                    <?php endif; ?>
                    <?php if ($goal_section_text): ?>
                        <div class="column small-12 medium-10 large-offset-2 large-5">
                            <div class="section__text"><?= $goal_section_text ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php $coaches_slider = get_field('coaches_slider');
        if ($coaches_slider && !empty($coaches_slider)):?>
            <section class="section section--coaches dark">
                <?php $coaches_section_title = get_field('coaches_section_title');
                $coaches_section_text = get_field('coaches_section_text');
                if ($coaches_section_title || $coaches_section_text): ?>
                    <div class="slider-caption">
                        <div class="row column">
                            <?php if ($coaches_section_title): ?>
                                <h2 class="section__title"><?= $coaches_section_title; ?></h2>
                            <?php endif; ?>
                            <?php if ($coaches_section_title): ?>
                                <div class="section__text"><?= $coaches_section_text; ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($coaches_slider) : ?>
                    <div class="js-coaches-slider slider">
                        <?php foreach ($coaches_slider as $slide) :
                            $title = $slide['coaches_slider_title'];
                            $text = $slide['coaches_slider_text'];
                            $image = $slide['coaches_slider_image'];
                            $image_id = $slide['coaches_slider_image']['ID'];
                            $image_title = $slide['coaches_slider_image']['title'];
                            ?>
                            <div class="slider__item">
                                <?= wp_get_attachment_image($image_id, 'full', "", ["class" => "img", "alt" => $image_title]) ?>
                                <?php if ($title || $text): ?>
                                    <div class="item-caption">
                                        <?php if ($title): ?>
                                            <div class="item-caption__title"><?= $title; ?></div>
                                        <?php endif; ?>
                                        <?php if ($text): ?>
                                            <div class="item-caption__text"><?= $text; ?></div>
                                        <?php endif; ?>
                                        <a href="#" class="item-caption__link">
                                            <?= __('Meet all our coaches', 'foundationpress') ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endif; ?>

        <?php $plans_section_title = get_field('plans_section_title');
        $plans = get_field('plans');
        if ($plans_section_title || ($plans && !empty($plans))): ?>
            <section class="section section--plans">
                <div class="row column">
                    <?php if ($plans_section_title): ?>
                        <h2 class="section__title"><?= $plans_section_title ?></h2>
                    <?php endif; ?>
                    <?php if ($plans && !empty($plans)): ?>
                        <div class="plans" data-equalizer>
                            <?php foreach ($plans as $product) :
                                include get_template_directory() . '/template-parts/plan-preview.php';
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if (have_rows('locations')):
            $map_section_title = get_field('map_section_title'); ?>
            <section class="section section--map">
                <?php if ($map_section_title): ?>
                    <h2 class="section__title"><?= $map_section_title; ?></h2>
                <?php endif; ?>
                <?php get_template_part('template-parts/acf-map'); ?>
            </section>
        <?php endif; ?>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
