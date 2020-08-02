<h2 class="segment-title">KARYA PELAYANAN KOMSOS PADANG</h2>
<?php
$right_ads_1x1 = get_field('right_ads_1x1',21);
$right_ads_1x1_2nd = get_field('right_ads_1x1_2nd',21);
$gema = get_field('gema',21);
$et_terra = get_field('et_terra',21);
$radio_boos = get_field('radio_boos',21);
?>
<div class="row organization-relation-row">
    <div class="col-xs-12">
        <div class="card thumbnail-card small-thumbnail-card">
            <div class="card-body">
                <img class="image-full shadow-on-hover mt-3 mb-3" src="<?php echo $gema ?>" alt="Karya Pelayanan - Majalah Gema"/>
                <img class="image-full shadow-on-hover mb-3" src="<?php echo $radio_boos['image']; ?>" alt="Karya Pelayanan - Radio Boos"/>
                <a class="w-100 text-center d-block mb-3" href="<?php echo $radio_boos['url']?>" target="_blank" rel="noref noopener"><?php echo $radio_boos['title']; ?></a>
                <img class="image-full shadow-on-hover mb-3" src="<?php echo $et_terra['image']; ?>" alt="Karya Pelayanan - Et Terra"/>
                <a class="w-100 text-center d-block mb-3" href="<?php echo $et_terra['url']?>" target="_blank" rel="noref noopener"><?php echo $et_terra['title']; ?></a>
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>
