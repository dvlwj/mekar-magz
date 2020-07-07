<div class="col-xs-12 col-sm-3 left-column">
    <button class="btn btn-primary btn-menu" data-toggle="collapse" data-target="#menu">MENU</button>
    <div id="menu" class="collapse">
        <div class="list-group">
            <a href="<?php echo get_site_url().'/meja_redaksi' ?>" class="list-group-item list-group-item-action">Dari Meja Redaksi</a>
            <a href="<?php echo get_site_url().'/pesan_kitab_suci' ?>" class="list-group-item list-group-item-action">Pesan Kitab Suci</a>
            <a href="<?php echo get_site_url().'/ujud_doa' ?>" class="list-group-item list-group-item-action">Ujud Doa Bapa Suci</a>
            <a href="<?php echo get_site_url().'/cerita_pendek' ?>" class="list-group-item list-group-item-action">Cerita Pendek</a>
            <a href="<?php echo get_site_url().'/cerita_bergambar' ?>" class="list-group-item list-group-item-action">Cerita Bergambar</a>
            <a href="<?php echo get_site_url().'/orang_kudus' ?>" class="list-group-item list-group-item-action">Orang Kudus</a>
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