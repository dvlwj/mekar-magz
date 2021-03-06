<h2 class="segment-title">SERBA SERBI</h2>
<div class="row information-row">
    <?php
    $information_notice = get_information_notice(1);
    $information_notice->the_post();
    ?>
    <div class="card thumbnail-card small-thumbnail-card w-100">
        <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
        <div class="card-body">
            <h3 class="text-center"><?php the_title() ?></h3>
            <p class="text-justify"><?php echo get_excerpt(150);?></p>
        </div>
    </div>
    <?php
    wp_reset_postdata();
    ?>
</div>