<div class="acf-map">
    <?php if (have_rows('locations')):
        while (have_rows('locations')) : the_row();
            $location = get_sub_field('location');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            $schedule = get_sub_field('schedule');
            $marker_icon_id = get_sub_field('icon_for_marker');
            $marker_icon = wp_get_attachment_image_src($marker_icon_id, 'marker');
            $marker_icon_url = $marker_icon[0]; ?>
            <div class="marker " data-lat="<?= esc_attr($location['lat']); ?>"
                 data-lng="<?= esc_attr($location['lng']); ?>"
                 data-icon="<?= $marker_icon_url ?>">
                <div class="location-info">
                    <?php if ($title): ?>
                        <div class="location-info__title"><?= $title ?></div>
                    <?php endif; ?>
                    <?php if ($description): ?>
                        <div class="location-info__description"><?= $description ?></div>
                    <?php endif; ?>
                    <?php if ($schedule): ?>
                        <div class="location-info__schedule"><?= $schedule ?></div>
                    <?php endif; ?>
                    <?php
                    $images = get_sub_field('gallery');
                    if ($images): ?>
                        <div class="location-info__gallery">
                            <?php $i = 1;
                            foreach ($images as $image):
                                $image_id = $image['ID'];
                                if ($image_id && $i <= 4):?>
                                    <div class="img-wrapper">
                                        <?= wp_get_attachment_image($image_id, 'small-square'); ?>
                                        <?php if ($i === 4): ?>
                                            <div class="show-more">
                                                <span><?= count($images) . __('More', 'foundationpress') ?></span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endif;
                                $i++;
                            endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile;
    endif; ?>
</div>
