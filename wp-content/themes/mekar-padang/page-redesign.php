<?php /* Template Name: Page - Redesign */ ?>

<?php include 'header-redesign.php'; ?>
<?php
    $center_ads_2x1_saint = get_field('center_ads_2x1_saint',21);
    $center_ads_1x1_saint = get_field('center_ads_1x1_saint',21);
    $center_ads_2x1_bible = get_field('center_ads_2x1_bible',21);
    $center_ads_1x1_bible = get_field('center_ads_1x1_bible',21);
    $right_ads_1x1_poem = get_field('right_ads_1x1_poem',21);
    $postID = get_the_ID();
?>
    <div class="container">
        <div class="col-xs-12">
            <?php include 'pages/last-posts.php' ?>
        </div>
        <div class="col-xs-12">
            <?php include 'pages/editor-message.php' ?>
        </div>
        <div class="col-xs-12">
            <?php include 'pages/bible-message.php' ?>
        </div>
        <div class="row">
            <div class="row custom-catalogue-block">
                <?php
                if($center_ads_2x1_bible){
                    $padding = '';
                    for ($i = 0; $i < sizeof($center_ads_2x1_bible); $i++){
                        if($i==0) $padding = 'pl-md-0 pr-md-2';
                        if($i==1) $padding = 'pr-md-0 pl-md-2';
                        ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-ads pl-0 pr-0 <?php echo $padding ?>">
                            <img class="image-full" src="<?php echo $center_ads_2x1_bible[$i]['image']; ?>" alt="ads_center_2_<?php echo $i ?>_saint"/>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div class="row custom-catalogue-block col-12 no-padding">
                <?php
                if($center_ads_1x1_bible){
                    for ($i = 0; $i < sizeof($center_ads_1x1_bible); $i++){
                        ?>
                        <div class="col col-ads p-0">
                            <img class="image-full width-100" src="<?php echo $center_ads_1x1_bible[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_saint"/>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="col-xs-12">
                    <?php include 'pages/short-stories.php' ?>
                </div>
                <div class="col-xs-12">
                    <?php include 'pages/serial-stories.php' ?>
                </div>
                <div class="row custom-catalogue-block">
                    <?php
                    if($center_ads_2x1_saint){
                        $padding = '';
                        for ($i = 0; $i < sizeof($center_ads_2x1_saint); $i++){
                            if($i==0) $padding = 'pl-md-0 pr-md-2';
                            if($i==1) $padding = 'pr-md-0 pl-md-2';
                    ?>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-ads pl-0 pr-0 <?php echo $padding ?>">
                        <img class="image-full" src="<?php echo $center_ads_2x1_saint[$i]['image']; ?>" alt="ads_center_2_<?php echo $i ?>_saint"/>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="row custom-catalogue-block">
                    <?php
                    if($center_ads_1x1_saint){
                        for ($i = 0; $i < sizeof($center_ads_1x1_saint); $i++){
                    ?>
                    <div class="col col-ads p-0">
                        <img class="image-full" src="<?php echo $center_ads_1x1_saint[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_saint"/>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="col-xs-12">
                    <?php include 'pages/saints.php' ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <?php include 'pages/pray-message.php' ?>
                <?php include 'pages/poem.php' ?>
                <div class="row custom-catalogue-block">
                    <?php
                    if($right_ads_1x1_poem){
                        for ($i = 0; $i < sizeof($right_ads_1x1_poem); $i++){
                    ?>
                            <div class="col col-ads p-0">
                                <img class="image-full" src="<?php echo $right_ads_1x1_poem[$i]['image']; ?>" alt="ads_center_1_<?php echo $i ?>_saint"/>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <?php include 'pages/organization-relation.php' ?>
                <?php include 'pages/editor.php' ?>
            </div>
        </div>
        <div class="col-xs-12">
            <?php include 'pages/religion-knowledge.php' ?>
        </div>
        <div class="col-xs-12">
            <?php include 'pages/comics.php' ?>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 pl-0 pr-0 pr-sm-2">
                    <?php include 'pages/short-info.php' ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 pl-0 pr-0 pl-sm-2">
                    <?php include 'pages/pen-pal.php' ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'pages/scroll-to-top.php' ?>
    <div class="seo-section container p-0">
        <div class="row">
            <div class="col">
                <div class="card">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>