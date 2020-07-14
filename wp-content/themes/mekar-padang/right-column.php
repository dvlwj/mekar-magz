<?php /* Template Name: Page - Right Column */ ?>

<?php
    $right_ads_1x1 = get_field('right_ads_1x1');
    $right_ads_2x1 = get_field('right_ads_2x1');
    $gema = get_field('gema');
    $et_terra = get_field('et_terra');
?>

<div class="col-xs-12 col-sm-3 right-column">
    <?php
    $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
    $args = array(
        'post_type' => 'ujud_doa',
        'post_status' => 'publish',
        'cat' => $categoryID,
        'order_by' => 'publish_date',
        'posts_per_page' => 1,
        'order' => 'desc',
    );
    ?>
    <?php
    $new_query = new WP_Query ($args);
    $foundPostsCount = $new_query->found_posts;
    if ($new_query->have_posts()) {
        while($new_query->have_posts()){
            $new_query->the_post();
            ?>
            <div class="row flex-center row-feed">
                <div class="col">
                    <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                </div>
            </div>
            <?php
        }
    }
    wp_reset_postdata();
    ?>
    <div class="card">
        <div class="card-header">
            <?php echo do_shortcode('[apvc_embed type="customized" border_size="2" border_radius="5" background_color="" font_size="14" font_style="" font_color="" counter_label="Visits:" today_cnt_label="Today:" global_cnt_label="Jumlah Pengunjung:" border_color="" border_style="none" padding="5" width="200" global="true" today="false" current="false" icon_position="" widget_template="None" ]');?>
        </div>
    </div>
    <div class="card right-column-cerpen">
        <div class="card-header">
            KARYA PELAYANAN KOMSOS PADANG
        </div>
        <div class="card-body">
            <img class="image-full gema" src="<?php echo $gema; ?>" alt="gema-logo-ads"/>
            <div class="card">
                <div class="card-header">
                    <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
                    <script type="text/javascript">
                        MRP.insert({
                            'url':'http://live.boosfm.com:8154/;',
                            'codec':'mp3',
                            'volume':100,
                            'autoplay':true,
                            'buffering':5,
                            'title':'BOOS 104.2 FM',
                            'welcome':'Selamat Mendengarkan',
                            'bgcolor':'#FFFFFF',
                            'skin':'faredirfare',
                            'width':320,
                            'height':62
                        });
                    </script>
                </div>
            </div>
            <span class="et_terra">
                <?php echo $et_terra; ?>
            </span>
        </div>
    </div>
    <div class="card right-column-cerpen">
        <div class="card-header">
            CERPEN SEBELUMNYA
        </div>
        <div class="card-body">
            <?php
            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
            $args = array(
                'post_type' => 'cerita_pendek',
                'post_status' => 'publish',
                'cat' => $categoryID,
                'order_by' => 'publish_date',
                'posts_per_page' => 4,
                'offset' => 2,
                'order' => 'desc',
            );
            $new_query = new WP_Query ($args);
            $foundPostsCount = $new_query->found_posts;
            if ($new_query->have_posts()) {
                while($new_query->have_posts()){
                    $new_query->the_post();
                    $date = get_the_date('j F Y');
                    ?>
                    <div class="row flex-center row-feed">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p class="text-center"><?php echo $date; ?></p>
                            <h5 class="text-center"><?php the_title() ?></h5>
                            <?php echo get_excerpt(50);?>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php if($right_ads_1x1){ ?>
        <img class="image-full ads-block" src="<?php echo $right_ads_1x1[0]['image']; ?>" alt="ads_right_1"/>
    <?php } ?>
    <div class="card right-column-cergam">
        <div class="card-header">
            CERGAM SEBELUMNYA
        </div>
        <div class="card-body">
            <?php
            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
            $args = array(
                'post_type' => 'cerita_bergambar',
                'post_status' => 'publish',
                'cat' => $categoryID,
                'order_by' => 'publish_date',
                'posts_per_page' => 2,
                'offset' => 2,
                'order' => 'desc',
            );
            $new_query = new WP_Query ($args);
            $foundPostsCount = $new_query->found_posts;
            if ($new_query->have_posts()) {
                while($new_query->have_posts()){
                    $new_query->the_post();
                    $date = get_the_date('j F Y');
                    ?>
                    <div class="row flex-center row-feed">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                            <p class="text-center"><?php echo $date; ?></p>
                            <h5 class="text-center"><?php the_title() ?></h5>
                            <?php echo get_excerpt(50);?>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="row ads-block">
        <?php
            if ($right_ads_2x1){
                for ($i = 0; $i < sizeof($right_ads_2x1); $i++){
        ?>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-ads">
                        <img class="image-full" src="<?php echo $right_ads_2x1[$i]['image']; ?>" alt="ads_right_2_<?php echo $i ?>"/>
                    </div>
        <?php
                }
        }
        ?>
    </div>
</div>
