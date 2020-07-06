<?php
    /**
     * Template Name: Meja_Redaksi
     */
    get_header();
    $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
    $URL = $_SERVER['REQUEST_URI'];
    $basename = basename($URL);
?>

<div class="container-fluid">
    <div class="row">
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
            <?php while ( have_posts() ) :the_post();?>
            <?php endwhile ?>
            <div class="col-xs-12 col-sm-12 post-column">
                <?php
                $args = array(
                    'post_type' => 'meja_redaksi',
                    'post_status' => 'publish',
                    'cat' => $categoryID,
                    'order_by' => 'publish_date',
                    'order' => 'desc',
                );

                ?>
                <?php
                $new_query = new WP_Query ($args);
                $foundPostsCount = $new_query->found_posts;
                if ($new_query->have_posts()) {
                    while($new_query->have_posts()){
                        $new_query->the_post();
                        $date = get_the_date('j F Y');
                        ?>
                        <div class="row flex-center row-feed">
                            <div class="col-4">
                                <img class="img-fluid post-thumbnail" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo the_post_thumbnail_url() ?>"/>
                            </div>
                            <div class="col">
                                <h5 class="text-left"><?php the_title() ?></h5>
                                <p class="text-left"><?php echo $date; ?></p>
                                <?php echo get_excerpt();?>
                            </div>
                        </div>
                        <hr/>
                        <?php
                    }
                }
                wp_reset_postdata();
                ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <?php
                        for($i=0;$i<($foundPostsCount/10);$i++) {
                            $tempNumb = $i + 1;
                            if($basename == $tempNumb || ($tempNumb == 1 && $basename == 'meja_redaksi')){
                                ?>
                                <li class="page-item active"><a class="page-link" href="<?php echo get_site_url() . '/meja_redaksi/page/' . $tempNumb ?>"><?php echo $i + 1 ?></a></li>
                                <?php
                            } else {
                                ?>
                                <li class="page-item"><a class="page-link" href="<?php echo get_site_url() . '/meja_redaksi/page/' . $tempNumb ?>"><?php echo $i + 1 ?></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
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