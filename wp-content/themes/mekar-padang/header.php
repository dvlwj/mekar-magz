<!doctype html>
<html lang=<?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=12.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?></title>
    <link rel="icon" href="<?php echo theme_icon('favicon.ico')?>" type="image/x-icon">
    <meta name="title" content="Majalah Mekar - Media Kreasi Anak-Anak Rohani">
    <meta name="description" content="Majalah Mekar adalah media kreasi anak-anak rohani dibawah naungan Komisi Sosial Keuskupan Padang. Situs berisikan informasi untuk memperluas wawasan serta pengetahuan rohani. Dilengkapi kanal interaktif dan kreatif.">
    <meta name="keywords" content="Mekar, Majalah, Majalah Mekar, Majalah Rohani, Rohani, Katolik, Padang, Mekar Padang, Mekar Katolik, Majalah Padang, Keuskupan Padang, Komisi Sosial Padang, Majalah Mekar Keuskupan Padang, Katolik Padang, Catholic Padang, Catholic, Mekar Magazine, Catholic Indonesia, Katolik Indonesia, Vatican, Vatikan, Vatikan Indonesia, Vatican Indonesia">
    <meta name="author" content="Komisi Sosial Keuskupan Padang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Majalah Mekar"/>
    <meta property="og:type" content="article"/>
    <meta property="og:description" content="<?php bloginfo('name') ?>, <?php bloginfo('description') ?>"/>
    <meta property="og:url" content="https://majalahmekar.komsospadang.com"/>
    <meta property="og:site_name" content="<?php bloginfo('name') ?>"/>
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
                  <img class="image-full" src="<?php echo $imageLogo[0];?>" alt="website-logo"/>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3">
                  <div class="col">
                      <img class="image-full" src="<?php echo theme_image('redaksi.jpg') ?>" alt="redaksi-image"/>
                  </div>
              </div>
          </div>
      </a>
    </div>
  </div>
</div>