<h2 class="segment-title">TERBARU</h2>
<div class="row comic-row">
    <?php
    $comic = get_last_posts(6);
    $i = 0;
    while($comic->have_posts()){
        $i= $i+1;
        $padding = '';
        if($i==1) $padding = 'pl-md-0';
        if($i==3) $padding = 'pr-md-0';
        if($i==4) $padding = 'pl-md-0';
        if($i==6) $padding = 'pr-md-0';
        $comic->the_post();
        ?>
        <div class="col-xs-12 col-sm-12 col-md-4 <?php echo $padding ?>">
            <div class="card thumbnail-card small-thumbnail-card">
                <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
                <div class="card-body">
                    <h5 class="text-center"><?php the_title() ?></h5>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>
</div>