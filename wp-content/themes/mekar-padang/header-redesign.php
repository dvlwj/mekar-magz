<!doctype html>
<html lang=<?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=12.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo theme_icon('favicon.ico')?>" type="image/x-icon">
    <meta name="title" content="Majalah Mekar Padang - Media Kreasi Anak-Anak Rohani">
    <meta name="keywords" content="Majalah Mekar Padang">
    <meta name="author" content="Komisi Sosial Keuskupan Padang">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<!--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172471700-1"></script>-->
    <script>
      // window.dataLayer = window.dataLayer || [];
      // function gtag(){dataLayer.push(arguments);}
      // gtag('js', new Date());
      //
      // gtag('config', 'UA-172471700-1');
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo get_home_url() ?>">
        <img src="<?php echo theme_image('mekar-new.png');?>" class="d-inline-block align-top" alt="Logo Majalah Mekar Padang">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav pt-5 pb-5 pt-lg-0 pb-lg-0">
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/meja-redaksi' ?>" class="nav-link">Dari Meja Redaksi</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/pesan-kitab-suci' ?>" class="nav-link">Pesan Kitab Suci</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/ujud-doa' ?>" class="nav-link">Ujud Doa Bapa Suci</a>
            </li>
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cerita
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="<?php echo get_site_url().'/cerita-pendek' ?>"><i class="fa fas fa-chevron-right"></i> Cerita Pendek</a>
                    <a class="dropdown-item" href="<?php echo get_site_url().'/cerita-bergambar' ?>"><i class="fa fas fa-chevron-right"></i> Cerita Bergambar</a>
                    <a class="dropdown-item" href="<?php echo get_site_url().'/cerita-bersambung' ?>"><i class="fa fas fa-chevron-right"></i> Cerita Bergambar Bersambung</a>
                </div>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/orang-kudus' ?>" class="nav-link">Orang Kudus</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/pengetahuan-agama' ?>" class="nav-link">Varia</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/puisi' ?>" class="nav-link">Puisi</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/sekilas-info' ?>" class="nav-link">Serba Serbi</a>
            </li>
            <li class="nav-item mr-auto">
                <a href="<?php echo get_site_url().'/sahabat-mekar' ?>" class="nav-link">Sahabat Mekar</a>
            </li>
        </ul>
    </div>
</nav>