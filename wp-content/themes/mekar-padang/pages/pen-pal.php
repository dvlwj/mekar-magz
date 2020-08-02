<h2 class="segment-title">SAHABAT MEKAR</h2>
<div class="row pen-pal-row">
    <?php
    $pen_pal = get_pen_pal(1);
    $pen_pal->the_post();
    ?>
    <div class="card thumbnail-card small-thumbnail-card">
        <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
        <div class="card-body">
            <h5 class="text-center"><?php the_title() ?></h5>
            <p class="text-justify"><?php echo get_excerpt(150);?></p>
        </div>
    </div>
    <?php
    wp_reset_postdata();
    ?>
</div>