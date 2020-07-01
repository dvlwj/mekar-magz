<?php /* Template Name: Page - Homepage */ ?>

<?php get_header(); ?>
<?php
$editor_desk = get_field('editor_desk');
$bible_message = get_field('bible_message');
$gambar_ujud_doa = get_field('gambar_ujud_doa');
$short_story = get_field('short_story');
$image_story_block = get_field('image_story_block');
$image_story_block_large = get_field('image_story_block_large');
?>

    <div class="container-fluid">
        <div class="row main-row">
            <div class="col-xs-12 col-xs-12 col-sm-3" style="padding:0">
                <div class="card editor-desk">
                    <div class="card-header">
                        DARI MEJA REDAKSI
                    </div>
                    <div class="card-body">
                        <?php if ( $editor_desk ): the_row() ?>
                            <?php
                                $editor_desk_image = $editor_desk["image"];
                                $editor_desk_text = $editor_desk["text"];
                            ?>
                            <?php if( $editor_desk_image ): ?>
                                <img class="image-full image-center" src="<?php echo $editor_desk_image ?>" alt="Gambar Dari Meja Redaksi">
                            <?php endif ?>
                            <p class="card-text">
                                <?php echo $editor_desk_text ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="card editor-desk">
                    <div class="card-header">
                        PESAN KITAB SUCI
                    </div>
                    <div class="card-body">
                        <?php if ( $bible_message ): the_row() ?>
                            <?php
                            $bible_message_image = $bible_message["image"];
                            $bible_message_text = $bible_message["text"];
                            $bible_message_date = $bible_message["date"];
                            ?>
                            <?php if( $bible_message_image ): ?>
                                <img class="image-full image-center" src="<?php echo $bible_message_image ?>" alt="Gambar Dari Meja Redaksi">
                            <?php endif ?>
                            <p class="card-text">
                                <?php echo $bible_message_text ?>
                            </p>
                            <small class="text-right w-100 d-block">
                                <?php echo $bible_message_date ?>
                            </small>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row cerpen">
                    <h4 class="w-100 text-center">Cerpen</h4>
                    <?php if ( $short_story ): the_row() ?>
                        <?php for($x = 0; $x < count($short_story); $x++) {?>
                        <?php
                            $short_story_title = $short_story[$x]["title"];
                            $short_story_image = $short_story[$x]["image"];
                            $short_story_text = $short_story[$x]["text"];
                        ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <?php echo $short_story_title ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if( $short_story_image ): ?>
                                            <img class="d-block w-100" src="<?php echo $short_story_image ?>" alt="<?php echo $short_story_title ?>">
                                        <?php endif ?>
                                        <p class="card-text">
                                            <?php echo $short_story_text ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif ?>
                </div>
                <div class="row cergam">
                    <h4 class="w-100 text-center">Cergam</h4>
                    <?php if ( $image_story_block ): the_row() ?>
                        <?php for($x = 0; $x < count($image_story_block); $x++) {?>
                            <?php
                            $image_story_block_title = $image_story_block[$x]["title"];
                            $image_story_block_image = $image_story_block[$x]["image"];
                            $image_story_block_text = $image_story_block[$x]["text"];
                            ?>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <?php echo $image_story_block_title ?>
                                    </div>
                                    <div class="card-body">
                                        <?php if( $image_story_block_image ): ?>
                                            <img class="d-block w-100" src="<?php echo $image_story_block_image ?>" alt="<?php echo $image_story_block_title ?>>">
                                        <?php endif ?>
                                        <p class="card-text">
                                            <?php echo $image_story_block_text ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php endif ?>

                    <?php if ( $image_story_block_large ): the_row() ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                        <div class="card">
                            <?php
                                $image_story_block_large_title = $image_story_block_large[0]["title"];
                                $image_story_block_large_content = $image_story_block_large[0]["content"];
                            ?>
                            <div class="card-header">
                                <?php echo $image_story_block_large_title ?>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <?php for($x = 0; $x < count($image_story_block_large_content); $x++) { ?>
                                        <?php
                                        $image_story_block_large_content_image = $image_story_block_large_content[$x]["image"];
                                        $image_story_block_large_content_text = $image_story_block_large_content[$x]["text"];
                                        ?>
                                    <div class="col-xs-12 col-sm-6">
                                        <img class="d-block w-100" src="<?php echo $image_story_block_large_content_image ?>" alt="<?php echo $image_story_block_large_content_image ?>">
                                        <?php echo $image_story_block_large_content_text ?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3" style="padding:0">
<!--                <button class="btn btn-primary btn-menu">MENU</button>-->
                <img class="d-block w-100" src="<?php echo $gambar_ujud_doa ?>" alt="Gambar Ujud Doa">
            </div>
        </div>
    </div>

<?php get_footer(); ?>