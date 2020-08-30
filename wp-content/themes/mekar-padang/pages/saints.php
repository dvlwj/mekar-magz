<h2 class="segment-title">ORANG KUDUS</h2>
<div class="row saint-row">
    <?php
    $saint_profile = get_saint_profile(1);
    $saint_profile->the_post();
    ?>
    <div class="col-xs-12">
        <div class="card thumbnail-card wide-thumbnail-card">
            <div class="card-body">
                <div class="row h-100">
                    <div class="col-xs-12 col-sm-12 col-md-6 thumbnail-area" style="background-image: url('<?php echo the_post_thumbnail_url();?>')"></div>
                    <div class="col-xs-12 col-sm-12 col-md-6 align-self-center">
                        <h3 class="font-italic font-weight-bold"><?php the_title() ?></h3>
                        <p><?php echo get_excerpt(300);?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    wp_reset_postdata();
    ?>
    <div class="col-xs-12">
        <div class="row">
            <?php
            $saint_profile = get_saint_profile(3, 1);
            $i = 0;
            while($saint_profile->have_posts()){
                $i= $i+1;
                $padding = '';
                if($i==1) $padding = 'pl-md-0 pr-md-2';
                if($i==2) $padding = 'pr-md-2 pl-md-2';
                if($i==3) $padding = 'pr-md-0 pl-md-2';
                $saint_profile->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-4 pl-0 pr-0 <?php echo $padding ?>">
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
    </div>
</div>