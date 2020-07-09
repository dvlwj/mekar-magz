<!doctype html>
<html lang=<?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=12.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="icon" href="<?php echo theme_icon('favicon.ico')?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Nunito+Sans:300,400,700,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="fixed-nav">
  <div class="container-fluid">
    <div class="row text-center header-logo">
      <a class="navbar-brand" href="<?php echo get_home_url() ?>">
          <?php
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $imageLogo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-3"></div>
              <div class="col-xs-12 col-sm-12 col-md-6">
                  <img class="image-full" src="<?php echo $imageLogo[0];?>"/>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3">
                  <div class="col">
                      <img class="image-full" src="<?php echo theme_image('redaksi.jpg') ?>"/>
                  </div>
              </div>
          </div>
      </a>
    </div>
  </div>
</div>