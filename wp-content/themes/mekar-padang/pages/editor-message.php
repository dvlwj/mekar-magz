<?php

$right_ads_1x1 = get_field('right_ads_1x1', 21);
$right_ads_1x1_2nd = get_field('right_ads_1x1_2nd', 21);
$gema = get_field('gema', 21);
$et_terra = get_field('et_terra', 21);
$radio_boos = get_field('radio_boos', 21);
?>
<div class="row editor-message-row">
    <div class="col-xs-12 col-sm-12 col-md-6 align-self-center">
        <h3 class="font-italic font-weight-bold"><?php the_title() ?></h3>
        <p>
            <?php echo get_excerpt(300);?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 offset-lg-1">
        <div class="card thumbnail-card">
            <div class="card-body thumbnail-area" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>
