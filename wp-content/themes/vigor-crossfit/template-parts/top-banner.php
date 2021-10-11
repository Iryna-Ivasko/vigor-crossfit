<?php
$top_banner_title = get_field('top_banner_title');
$top_banner_text = get_field('top_banner_text');
$top_banner_background_image_url = '';
if ( has_post_thumbnail( $post->ID ) ) :
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'fp-xlarge' );
    $top_banner_background_image_url = $image[0];
endif;
if ($top_banner_title || $top_banner_text):?>
    <section class="section top-banner dark"
    <?php if ($top_banner_background_image_url): ?>
        style="background-image: url('<?= $top_banner_background_image_url ?>')"
    <?php endif; ?>>
        <div class="row column">
            <div class="top-banner__content">
                <?php if ($top_banner_title): ?>
                    <h1 class="section__title">
                        <?= $top_banner_title ?>
                    </h1>
                <?php endif; ?>
                <?php if ($top_banner_text): ?>
                    <div class="section__text">
                        <?= $top_banner_text ?>
                    </div>
                <?php endif; ?>
                <div class="top-banner__actions button-group">
                    <a href="#" class="button skew large"><span><?= __( 'Book a free class', 'foundationpress' )?></span></a>
                    <a href="#" class="button large button--light skew"><span><?= __( 'See our promotion', 'foundationpress' )?></span></a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>