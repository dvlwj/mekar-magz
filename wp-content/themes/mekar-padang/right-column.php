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
