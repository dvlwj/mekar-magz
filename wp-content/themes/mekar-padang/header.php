<!doctype html>
<html lang=<?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?></title>
    <link rel="icon" href="<?php echo theme_icon('favicon.ico')?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Nunito+Sans:300,400,700,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo get_home_url() ?>">
      <img src="<?php echo theme_image('mekar.gif')?>" loading="lazy"/>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mekarNavbar" aria-controls="mekarNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-end" id="mekarNavbar">
      <ul class="navbar-nav">
      </ul>
    </div>
  </div>
</nav>