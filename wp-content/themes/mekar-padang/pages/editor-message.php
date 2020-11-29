<?php
$editor_message = get_editor_message(1);
$editor_message->the_post();
?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h2 class="segment-title">DARI MEJA REDAKSI</h2>
    </div>
</div>
<div class="row editor-message-row">
    <div class="col-xs-12 col-sm-12 col-md-6 align-self-center">
        <h3 class="font-italic font-weight-bold"><?php the_title() ?></h3>
        <p>
            <?php echo get_excerpt(300);?>
        </p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 offset-lg-1">
        <div class="card thumbnail-card">
            <div class="card-body thumbnail-area" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>
