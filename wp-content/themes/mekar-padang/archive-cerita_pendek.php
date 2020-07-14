<?php
    /**
     * Template Name: Cerita Pendek
     */
    get_header();
    $categoryID =  isset($_GET['cat']) ? $_GET['cat'] : '0';
    $URL = $_SERVER['REQUEST_URI'];
    $basename = basename($URL);
?>

<div class="container-fluid">
    <div class="row">
        <?php include 'left-column.php'; ?>
        <div class="col-xs-12 col-sm-6 center-column">
            <?php while ( have_posts() ) :the_post();?>
            <?php endwhile ?>
            <div class="col-xs-12 col-sm-12 post-column">
                <?php
                $args = array(
                    'post_type' => 'cerita_pendek',
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
                                <?php echo get_excerpt(100);?>
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
                            if($basename == $tempNumb || ($tempNumb == 1 && $basename == 'cerita-pendek')){
                                ?>
                                <li class="page-item active"><a class="page-link" href="<?php echo get_site_url() . '/cerita-pendek/page/' . $tempNumb ?>"><?php echo $i + 1 ?></a></li>
                                <?php
                            } else {
                                ?>
                                <li class="page-item"><a class="page-link" href="<?php echo get_site_url() . '/cerita-pendek/page/' . $tempNumb ?>"><?php echo $i + 1 ?></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </nav>
        </div>
    </div>
        <?php include 'right-column.php'; ?>
    </div>
</div>
<?php get_footer(); ?>