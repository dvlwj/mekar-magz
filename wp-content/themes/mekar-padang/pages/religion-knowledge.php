<h2 class="segment-title">VARIA</h2>
<div class="row religion-knowledge-row">
    <?php
    $religion_knowledge = get_religion_knowledge(1);
    $religion_knowledge->the_post();
    ?>
    <div class="col-12 p-0">
        <div class="card thumbnail-card small-thumbnail-card">
            <div class="card-header" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
            <div class="card-body">
                <h3 class="text-center"><?php the_title() ?></h3>
                <p class="text-justify"><?php echo get_excerpt(300);?></p>
            </div>
        </div>
    </div>
    <?php
    wp_reset_postdata();
    ?>
</div>