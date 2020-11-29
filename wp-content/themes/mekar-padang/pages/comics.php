<h2 class="segment-title">CERGAM</h2>
<div class="row comic-row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <?php
            $comic = get_comic(1,1);
            while($comic -> have_posts()){
                $comic->the_post();
        ?>
        <div class="card thumbnail-card small-thumbnail-card">
            <div class="card-header h-30-rem-forced" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
            <div class="card-body">
                <h5 class="text-center"><?php the_title() ?></h5>
                <p class="text-justify"><?php echo get_excerpt(150);?></p>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 d-flex align-content-stretch flex-wrap">
        <?php
            $comic = get_comic(2,2);
            while($comic -> have_posts()){
                $comic->the_post();
        ?>
        <div class="card thumbnail-card small-thumbnail-card w-100">
            <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
            <div class="card-body">
                <h5 class="text-center"><?php the_title() ?></h5>
                <p class="text-justify"><?php echo get_excerpt(150);?></p>
            </div>
        </div>
        <?php
        }
        wp_reset_postdata();
        ?>
    </div>
</div>