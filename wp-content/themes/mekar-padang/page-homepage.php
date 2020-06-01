<?php /* Template Name: Page - Homepage */ ?>

<?php
 $headBanner = get_field('head-banner');
 $headBanner_content_group = get_field('head-banner_content_group');
 $highlight_banner = get_field('highlight_banner');
 $quote_banner = get_field('quote_banner');
 $feature_banner = get_field('feature_banner');
 $function_list = get_field('function_list');
?>

<?php get_header(); ?>

<div class="container-fluid">
  <?php if( get_field('head-banner') ) : ?>
    <?php if ( have_rows('head-banner_content_group') ): ?>
      <?php while( have_rows('head-banner_content_group') ): the_row() ?>
        <div class="row head-banner_content_group">
          <?php if ( have_rows('left_head_banner') ) : ?>
            <?php while( have_rows('left_head_banner') ): the_row();
              $left_head_banner_background = get_sub_field('left_head_banner_background');
              $left_head_banner_text = get_sub_field('left_head_banner_text');
              $left_head_banner_image = get_sub_field('left_head_banner_image');
              $left_head_banner_background_color = get_sub_field('left_head_banner_background_color');
              $left_head_banner_background_image = get_sub_field('left_head_banner_background_image');
            ?>
              <?php if ($left_head_banner_background === 'Color') : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 left_head_banner d-flex align-items-center justify-content-center" style="background-color: <?php echo '#'.$left_head_banner_background_color ?> ;">
                  <?php if ($left_head_banner_image !== '(unknown)' && strlen($left_head_banner_image) > 0 ) : ?>
                    <img class="image-full lazy" src="<?php echo $left_head_banner_image ?>"/>
                  <?php endif ?>
                  <span> <?php echo $left_head_banner_text ?> </span>
                </div>
              <?php endif ?>
              <?php if ($left_head_banner_background === 'Image') : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 left_head_banner d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $left_head_banner_background_image ?>') ;">
                  <?php if ($left_head_banner_image !== '(unknown)' && strlen($left_head_banner_image) > 0 ) : ?>
                    <img class="image-full lazy" src="<?php echo $left_head_banner_image ?>"/>
                  <?php endif ?>
                  <span> <?php echo $left_head_banner_text ?> </span>
                </div>
              <?php endif ?>
            <?php endwhile ?>
          <?php endif; ?>
          <?php if ( have_rows('right_head_banner') ) : ?>
            <?php while( have_rows('right_head_banner') ): the_row();
              $right_head_banner_background = get_sub_field('right_head_banner_background');
              $right_head_banner_text = get_sub_field('right_head_banner_text');
              $right_head_banner_image = get_sub_field('right_head_banner_image');
              $right_head_banner_background_color = get_sub_field('right_head_banner_background_color');
              $right_head_banner_background_image = get_sub_field('right_head_banner_background_image');
            ?>
              <?php if ($right_head_banner_background === 'Color') : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 right_head_banner d-flex align-items-center justify-content-center" style="background-color: <?php echo '#'.$right_head_banner_background_color ?> ;">
                  <?php if ($right_head_banner_image !== '(unknown)' && strlen($right_head_banner_image) > 0 ) : ?>
                    <img class="image-full lazy" src="<?php echo $right_head_banner_image ?>"/>
                  <?php endif ?>
                  <span> <?php echo $right_head_banner_text ?> </span>
                </div>
              <?php endif ?>
              <?php if ($right_head_banner_background === 'Image') : ?>
                <div class="col-xs-12 col-sm-6 col-md-6 right_head_banner d-flex align-items-center justify-content-center" style="background-image: url('<?php echo $right_head_banner_background_image ?>') ;">
                  <?php if ($right_head_banner_image !== '(unknown)' && strlen($right_head_banner_image) > 0 ) : ?>
                    <img class="image-full lazy" src="<?php echo $right_head_banner_image ?>"/>
                  <?php endif ?>
                  <span> <?php echo $right_head_banner_text ?> </span>
                </div>
              <?php endif ?>
            <?php endwhile ?>
          <?php endif ?>
        </div>
      <?php endwhile ?>
    <?php endif ?>
  <?php endif ?>
  <?php if (get_field('highlight_banner') ) : ?>
    <?php while( have_rows('highlight_banner') ): the_row() ?>
      <div class="row hight_light_banner_group d-flex align-items-center justify-content-center text-center">
        <?php
          $hight_light_banner_image = get_sub_field('hight_light_banner_image');
          $hight_light_banner_text = get_sub_field('hight_light_banner_text');
        ?>
        <?php if ($hight_light_banner_image !== '(unknown)' && strlen($hight_light_banner_image) > 0 ) : ?>
          <img class="image-full lazy" src="<?php echo $hight_light_banner_image ?>"/>
        <?php endif ?>
        <span>
          <?php echo $hight_light_banner_text ?>
        </span>
      </div>
    <?php endwhile ?>
  <?php endif ?>
  <?php if (get_field('quote_banner') ) : ?>
    <?php while( have_rows('quote_banner') ): the_row() ?>
    <?php
      $quote_banner_background_image = get_sub_field('quote_banner_background_image');
      $quote_banner_text = get_sub_field('quote_banner_text');
    ?>
      <div
        class="row quote_banner_group d-flex align-items-center justify-content-end text-center"
        <?php if ($quote_banner_background_image !== '(unknown)' && strlen($quote_banner_background_image) > 0 ) { echo('style="background-image: url('.$quote_banner_background_image.')"'); } ?>
      >
        <span><?php echo $quote_banner_text ?></span>
      </div>
    <?php endwhile ?>
  <?php endif ?>
</div>

<!-- <pre style="background-color:yellow">
<code>
  <?php
    // echo var_dump($feature_banner);
    // echo '<hr/>';
    // echo var_dump($function_list);
  ?>
</code>
</pre> -->

<?php get_footer(); ?>