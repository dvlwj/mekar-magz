<?php
    /**
    * Template Name: Berita Kegiatan
    */
    get_header();
    $postID = get_the_ID();
?>
<div class="container-fluid">
    <div class="row">
        <?php include 'left-column.php'; ?>
        <div class="col-xs-12 col-sm-6 center-column">
            <?php
            $currentPostArgs = array(
                'p' => $postID
            );
            $currentPostQuery = new WP_Query($currentPostArgs);
            $currentPost = $currentPostQuery -> post;
            $date = get_the_date('l, j F Y | H:i');
            ?>
            <h1 class="text-left text-bold"><?php the_title(); ?></h1>
            <p>Ditulis oleh: <span class="text-bold"><?php the_author() ?></span> - <?php echo $date ?> WIB</p>
            <span class="post-content">
                <?php the_content(); ?>
            </span>
        </div>
        <?php include 'right-column.php'; ?>
    </div>
</div>
<?php get_footer(); ?>