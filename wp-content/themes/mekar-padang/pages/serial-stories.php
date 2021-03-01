<h2 class="segment-title">CERITA BERGAMBAR BERSAMBUNG</h2>
<div class="row serial-story-row">
    <?php
    $serial_story = get_serial_story(2);
    $i = 0;
    while($serial_story->have_posts()){
        $i= $i+1;
        $padding = '';
        if($i==1) $padding = 'pl-0 pr-0 pl-md-0 pr-md-2';
        if($i==2) $padding = 'pl-0 pr-0 pr-md-0 pl-md-2';
        $serial_story->the_post();
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 <?php echo $padding ?>">
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
