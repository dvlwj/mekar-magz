<?php /* Template Name: Page - Homepage */ ?>

<?php get_header(); ?>
<?php
$editor_desk = get_field('editor_desk');
$bible_message = get_field('bible_message');
$gambar_ujud_doa = get_field('gambar_ujud_doa');
$short_story = get_field('short_story');
$image_story_block = get_field('image_story_block');
$image_story_block_large = get_field('image_story_block_large');
?>

    <div class="container-fluid">
        <div class="row main-row">
            <?php include 'left-column.php'; ?>
            <div class="col-xs-12 col-sm-6 center-column">
                <div class="card">
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
                <div class="card">
                    <div class="card-header">
                        Orang Kudus
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
                                    <div class="col">
                                        <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <p class="text-center"><?php echo $date; ?></p>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt(300);?>
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
            <?php include 'right-column.php'; ?>
        </div>
    </div>

<?php get_footer(); ?>