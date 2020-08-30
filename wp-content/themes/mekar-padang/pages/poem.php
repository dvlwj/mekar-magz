<h2 class="segment-title">PUISI</h2>
<?php
$pray_message = get_poem(1);
$pray_message->the_post();
?>
<div class="row poem-row">
    <div class="col-xs-12">
        <div class="card thumbnail-card small-thumbnail-card">
            <div class="card-header">
                <img class="image-full shadow-on-hover" src="<?php echo the_post_thumbnail_url();?>" alt="Puisi - <?php the_title(); ?>"/>
            </div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>
