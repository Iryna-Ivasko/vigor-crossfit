<?php global $product;
$product_id = $product['plans_item'];
$product_object = wc_get_product($product_id);
$product_title = $product_object->name;
$product_description = $product_object->short_description;
$product_price = $product_object->price; ?>
<div class="plan" data-equalizer-watch>
    <?php if ($product_title): ?>
        <h3 class="plan__title"><?= $product_title ?></h3>
    <?php endif; ?>
    <?php if ($product_description): ?>
        <div class="plan__text"><?= $product_description ?></div>
    <?php endif; ?>
    <?php if ($product_price): ?>

        <?php if ($product_id === 62): ?>
            <a href="#" class="button skew">
                <span><?= __('CONTACT US', 'foundationpress'); ?></span>
            </a>
        <?php else: ?>
            <a href="<?= get_site_url() . '/checkout/?add-to-cart=' . $product_id ?>"
               class="button skew">
                <span><?= '$' . $product_price . __(' / Month', 'foundationpress'); ?></span>
            </a>
        <?php endif; ?>
    <?php endif; ?>
</div>