<?php /* Template Name: Page - Left Column */ ?>

<?php
$left_ads_1x1_under_bible = get_field('left_ads_1x1_under_bible');
$left_ads_1x1_under_poem = get_field('left_ads_1x1_under_poem');
?>

<div class="col-xs-12 col-sm-3 left-column">
    <button class="btn btn-primary btn-menu" data-toggle="collapse" data-target="#menu">MENU</button>
    <div id="menu" class="collapse">
        <div class="list-group">
            <a href="<?php echo get_site_url().'/meja-redaksi' ?>" class="list-group-item list-group-item-action">Dari Meja Redaksi</a>
            <a href="<?php echo get_site_url().'/pesan-kitab-suci' ?>" class="list-group-item list-group-item-action">Pesan Kitab Suci</a>
            <a href="<?php echo get_site_url().'/ujud-doa' ?>" class="list-group-item list-group-item-action">Ujud Doa Bapa Suci</a>
            <a href="<?php echo get_site_url().'/cerita-pendek' ?>" class="list-group-item list-group-item-action">Cerita Pendek</a>
            <a href="<?php echo get_site_url().'/cerita-bergambar' ?>" class="list-group-item list-group-item-action">Cerita Bergambar</a>
            <a href="<?php echo get_site_url().'/cerita-bersambung' ?>" class="list-group-item list-group-item-action">Cerita Bergambar Bersambung</a>
            <a href="<?php echo get_site_url().'/orang-kudus' ?>" class="list-group-item list-group-item-action">Orang Kudus</a>
            <a href="<?php echo get_site_url().'/pengetahuan-agama' ?>" class="list-group-item list-group-item-action">Pengetahuan Agama Katolik</a>
            <a href="<?php echo get_site_url().'/puisi' ?>" class="list-group-item list-group-item-action">Puisi</a>
            <a href="<?php echo get_site_url().'/sekilas-info' ?>" class="list-group-item list-group-item-action">Sekilas Info</a>
            <a href="<?php echo get_site_url().'/sahabat-mekar' ?>" class="list-group-item list-group-item-action">Sahabat Mekar</a>
        </div>
    </div>
    <div class="card editor-desk d-none d-lg-block">
        <div class="card-header">
            DARI MEJA REDAKSI
        </div>
        <div class="card-body">
            <?php
            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
            $args = array(
                'post_type' => 'meja_redaksi',
                'post_status' => 'publish',
                'cat' => $categoryID,
                'order_by' => 'publish_date',
                'posts_per_page' => 1,
                'order' => 'desc',
            );
            ?>
            <?php
            $new_query = new WP_Query ($args);
            if ($new_query->have_posts()) {
                while($new_query->have_posts()){
                    $new_query->the_post();
                    ?>
                    <div class="row flex-center row-feed">
                        <div class="col">
                            <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                            <h5 class="text-center"><?php the_title() ?></h5>
                            <?php echo get_excerpt(300);?>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="card d-none d-lg-block">
        <div class="card-header">
            PESAN KITAB SUCI
        </div>
        <div class="card-body">
            <?php
            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
            $args = array(
                'post_type' => 'pesan_kitab_suci',
                'post_status' => 'publish',
                'cat' => $categoryID,
                'order_by' => 'publish_date',
                'posts_per_page' => 1,
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
                        <div class="col">
                            <p class="text-center"><?php echo $date; ?></p>
                            <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                            <h5 class="text-center"><?php the_title() ?></h5>
                            <?php echo get_excerpt(300);?>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="row ads-block d-none d-lg-block">
        <?php
        if($left_ads_1x1_under_bible){
            for ($i = 0; $i < sizeof($left_ads_1x1_under_bible); $i++){
                ?>
                <div class="col col-ads">
                    <img class="image-full" src="<?php echo $left_ads_1x1_under_bible[$i]['image']; ?>" alt="ads_left_1_<?php echo $i ?>_under_bible"/>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div class="card d-none d-lg-block">
        <div class="card-header">
            PUISI
        </div>
        <div class="card-body">
            <?php
            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
            $args = array(
                'post_type' => 'puisi',
                'post_status' => 'publish',
                'cat' => $categoryID,
                'order_by' => 'publish_date',
                'posts_per_page' => 1,
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
                        <div class="col">
                            <p class="text-center"><?php echo $date; ?></p>
                            <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                            <h5 class="text-center"><?php the_title() ?></h5>
                            <?php echo get_excerpt(300);?>
                        </div>
                    </div>
                    <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="row ads-block d-none d-lg-block">
        <?php
        if($left_ads_1x1_under_poem){
            for ($i = 0; $i < sizeof($left_ads_1x1_under_poem); $i++){
                ?>
                <div class="col col-ads">
                    <img class="image-full" src="<?php echo $left_ads_1x1_under_poem[$i]['image']; ?>" alt="ads_right_1_<?php echo $i ?>_under_poem"/>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>