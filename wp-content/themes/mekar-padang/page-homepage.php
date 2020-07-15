<?php /* Template Name: Page - Homepage */ ?>

<?php get_header(); ?>
<?php
    $center_ads_2x1_saint = get_field('center_ads_2x1_saint');
    $center_ads_1x1_saint = get_field('center_ads_1x1_saint');
    $center_ads_2x1_story_picture = get_field('center_ads_2x1_story_picture');
    $center_ads_1x1_story_picture = get_field('center_ads_1x1_story_picture');
    $center_ads_1x1_pen_pal = get_field('center_ads_1x1_pen_pal');
?>

    <div class="container-fluid">
        <div class="row main-row">
            <?php include 'left-column.php'; ?>
            <div class="col-xs-12 col-sm-6 center-column">
                <div class="card">
                    <div class="card-header">
                        ORANG KUDUS
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php
                            $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                            $args = array(
                                'post_type' => 'orang_kudus',
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
                </div>
                <div class="row ads-block">
                    <?php
                    if($center_ads_2x1_saint){
                        for ($i = 0; $i < sizeof($center_ads_2x1_saint); $i++){
                            ?>
                            <div class="col col-ads">
                                <img class="image-full" src="<?php echo $center_ads_2x1_saint[$i]['image']; ?>" alt="ads_center_2_<?php echo $i ?>_saint"/>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="row ads-block">
                    <?php
                    if($center_ads_1x1_saint){
                        for ($i = 0; $i < sizeof($center_ads_1x1_saint); $i++){
                            ?>
                            <div class="col col-ads">
                                <img class="image-full" src="<?php echo $center_ads_1x1_saint[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_saint"/>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        CERPEN
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <?php
                        $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                        $args = array(
                            'post_type' => 'cerita_pendek',
                            'post_status' => 'publish',
                            'cat' => $categoryID,
                            'order_by' => 'publish_date',
                            'posts_per_page' => 2,
                            'order' => 'desc',
                        );
                        $new_query = new WP_Query ($args);
                        $foundPostsCount = $new_query->found_posts;
                        if ($new_query->have_posts()) {
                            while($new_query->have_posts()){
                                $new_query->the_post();
                                $date = get_the_date('j F Y');
                                ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-cerpen">
                                        <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <p class="text-center"><?php echo $date; ?></p>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt(100);?>
                                    </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        CERITA BERGAMBAR BERSAMBUNG
                    </div>
                    <div class="card-body">
                        <div class="row flex-center row-feed">
                        <?php
                        $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                        $args = array(
                            'post_type' => 'cerita_bersambung',
                            'post_status' => 'publish',
                            'cat' => $categoryID,
                            'order_by' => 'publish_date',
                            'posts_per_page' => 2,
                            'order' => 'desc',
                        );
                        $new_query = new WP_Query ($args);
                        $foundPostsCount = $new_query->found_posts;
                        if ($new_query->have_posts()) {
                            while($new_query->have_posts()){
                                $new_query->the_post();
                                $date = get_the_date('j F Y');
                                ?>
                                    <div class="col">
                                        <p class="text-center"><?php echo $date; ?></p>
                                        <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt(100);?>
                                    </div>
                            <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        CERGAM
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <?php
                        $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                        $args = array(
                            'post_type' => 'cerita_bergambar',
                            'post_status' => 'publish',
                            'cat' => $categoryID,
                            'order_by' => 'publish_date',
                            'posts_per_page' => 2,
                            'order' => 'desc',
                        );
                        $new_query = new WP_Query ($args);
                        $foundPostsCount = $new_query->found_posts;
                        if ($new_query->have_posts()) {
                            while($new_query->have_posts()){
                                $new_query->the_post();
                                $date = get_the_date('j F Y');
                                ?>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-cergam">
                                        <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <p class="text-center"><?php echo $date; ?></p>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt(100);?>
                                    </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>
                <div class="row ads-block">
                    <?php
                    if($center_ads_2x1_story_picture){
                        for ($i = 0; $i < sizeof($center_ads_2x1_story_picture); $i++){
                            ?>
                            <div class="col col-ads">
                                <img class="image-full" src="<?php echo $center_ads_2x1_story_picture[$i]['image']; ?>" alt="ads_center_2_<?php echo $i ?>_story_picture"/>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="row ads-block">
                    <?php
                    if($center_ads_1x1_story_picture){
                        for ($i = 0; $i < sizeof($center_ads_1x1_story_picture); $i++){
                            ?>
                            <div class="col col-ads">
                                <img class="image-full" src="<?php echo $center_ads_1x1_story_picture[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_story_picture"/>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="card">
                    <div class="card-header">
                        PENGETAHUAN AGAMA KATOLIK
                    </div>
                    <div class="card-body">
                        <?php
                        $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                        $args = array(
                            'post_type' => 'pengetahuan_agama',
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
                                        <?php echo get_excerpt(100);?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                SEKILAS INFO
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <?php
                                $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                                $args = array(
                                    'post_type' => 'sekilas_info',
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
                                            <div class="col">
                                                <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                                <p class="text-center"><?php echo $date; ?></p>
                                                <h5 class="text-center"><?php the_title() ?></h5>
                                                <?php echo get_excerpt(100);?>
                                            </div>
                                        <?php
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                SAHABAT MEKAR
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <?php
                                $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
                                $args = array(
                                    'post_type' => 'sahabat_mekar',
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
                                            <div class="col">
                                                <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                                <p class="text-center"><?php echo $date; ?></p>
                                                <h5 class="text-center"><?php the_title() ?></h5>
                                                <?php echo get_excerpt(100);?>
                                            </div>
                                        <?php
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ads-block">
                    <?php
                    if($center_ads_1x1_pen_pal){
                        for ($i = 0; $i < sizeof($center_ads_1x1_pen_pal); $i++){
                            ?>
                            <div class="col col-ads">
                                <img class="image-full" src="<?php echo $center_ads_1x1_pen_pal[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_pen_pal"/>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <?php include 'right-column.php'; ?>
        </div>
    </div>

<?php get_footer(); ?>