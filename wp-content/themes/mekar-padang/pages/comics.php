<h2 class="segment-title">CERGAM</h2>
<div class="row comic-row">
    <?php
    $comic = get_comic(3, 1);
    $i = 0;
    while($comic->have_posts()){
        $i= $i+1;
        $padding = '';
        if($i==1) $padding = 'pl-0';
        if($i==3) $padding = 'pr-0';
        $comic->the_post();
        ?>
        <div class="col-xs-12 col-sm-12 col-md-4 <?php echo $padding ?>">
            <div class="card thumbnail-card small-thumbnail-card">
                <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
                <div class="card-body">
                    <h5 class="text-center"><?php the_title() ?></h5>
                    <p class="text-justify"><?php echo get_excerpt(150);?></p>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>
</div>