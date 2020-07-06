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
            <div class="col-xs-12 col-sm-3 left-column">
                <button class="btn btn-primary btn-menu" data-toggle="collapse" data-target="#menu">MENU</button>
                <div id="menu" class="collapse">
                    <div class="list-group">
                        <a href="<?php echo get_site_url().'/meja_redaksi' ?>" class="list-group-item list-group-item-action">Dari Meja Redaksi</a>
                        <a href="<?php echo get_site_url().'/pesan_kitab_suci' ?>" class="list-group-item list-group-item-action">Pesan Kitab Suci</a>
                        <a href="<?php echo get_site_url().'/ujud_doa' ?>" class="list-group-item list-group-item-action">Ujud Doa Bapa Suci</a>
                        <a href="<?php echo get_site_url().'/cerita_pendek' ?>" class="list-group-item list-group-item-action">Cerita Pendek</a>
                    </div>
                </div>
                <div class="card editor-desk">
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
                            $foundPostsCount = $new_query->found_posts;
                            if ($new_query->have_posts()) {
                                while($new_query->have_posts()){
                                    $new_query->the_post();
                        ?>
                                <div class="row flex-center row-feed">
                                    <div class="col">
                                        <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt();?>
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
                                        <?php echo get_excerpt();?>
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
                                    <div class="col">
                                        <img class="image-full image-center post-thumbnail image-cerpen" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                                        <p class="text-center"><?php echo $date; ?></p>
                                        <h5 class="text-center"><?php the_title() ?></h5>
                                        <?php echo get_excerpt();?>
                                    </div>
                                <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>
                        </div>
                    </div>
                </div>
                <div class="row cergam">
                    <h4 class="w-100 text-center">Cergam</h4>
                    <?php if ( $image_story_block ): the_row() ?>
                        <?php for($x = 0; $x < count($image_story_block); $x++) {?>
                            <?php
                            $image_story_block_title = $image_story_block[$x]["title"];
                            $image_story_block_image = $image_story_block[$x]["image"];
                            $image_story_block_text = $image_story_block[$x]["text"];
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <?php echo $image_story_block_title ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if( $image_story_block_image ): ?>
                                            <img class="d-block w-100" src="<?php echo $image_story_block_image ?>" alt="<?php echo $image_story_block_title ?>>">
                                        <?php endif ?>
                                        <p class="card-text">
                                            <?php echo $image_story_block_text ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif ?>

                    <?php if ( $image_story_block_large ): the_row() ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <div class="card">
                            <?php
                                $image_story_block_large_title = $image_story_block_large[0]["title"];
                                $image_story_block_large_content = $image_story_block_large[0]["content"];
                            ?>
                            <div class="card-header">
                                <?php echo $image_story_block_large_title ?>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php for($x = 0; $x < count($image_story_block_large_content); $x++) { ?>
                                        <?php
                                        $image_story_block_large_content_image = $image_story_block_large_content[$x]["image"];
                                        $image_story_block_large_content_text = $image_story_block_large_content[$x]["text"];
                                        ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="d-block w-100" src="<?php echo $image_story_block_large_content_image ?>" alt="<?php echo $image_story_block_large_content_image ?>">
                                        <?php echo $image_story_block_large_content_text ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
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
            </div>
        </div>
    </div>

<?php get_footer(); ?>