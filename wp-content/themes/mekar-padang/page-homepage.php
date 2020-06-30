<?php /* Template Name: Page - Homepage */ ?>

<?php get_header(); ?>
<?php
$editor_desk = get_field('editor_desk');
$bible_message = get_field('bible_message');
$gambar_ujud_doa = get_field('gambar_ujud_doa');
?>

    <div class="container-fluid">
        <div class="row" >
            <!-- <div class="col-xs-12 col-sm-3" style="padding:0">
              <div class="card">
                <div class="card-header">
                  Kategori
                </div>
                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Orang Kudus
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Katekese
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Moral
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Fabel
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    CHC
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Varia
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengetahuan Populer
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Sahabat Mekar
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cergam
                  </li>
                </ul>
              </div>
            </div> -->
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
                            ?>
                            <?php if( $bible_message_image ): ?>
                                <img class="image-full image-center" src="<?php echo $bible_message_image ?>" alt="Gambar Dari Meja Redaksi">
                            <?php endif ?>
                            <p class="card-text">
                                <?php echo $bible_message_text ?>
                            </p>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5em;">
                    <div class="col">
                        <h5 class="text-center w-100">Tema</h5>
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col">
                                            <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Pertama" alt="Cerita Pertama">
                                        </div>
                                        <div class="col">
                                            <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Kedua" alt="Cerita kedua">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col">
                                            <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Ketiga" alt="Cerita Ketiga">
                                        </div>
                                        <div class="col">
                                            <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Keempat" alt="Cerita Keempat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5em;">
                    <div class="col">
                        <h5 class="text-center w-100">Moral</h5>
                        <img class="d-block w-100" src="https://via.placeholder.com/300x300.png?text=Cerita+Moral" alt="Cerita Moral">
                        <p class="text-center w-100">Cerita Moral</p>
                    </div>
                    <div class="col">
                        <h5 class="text-center w-100">Varia</h5>
                        <img class="d-block w-100" src="https://via.placeholder.com/300x300.png?text=Cerita+Varia" alt="Cerita Varia">
                        <p class="text-center w-100">Cerita Varia</p>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 5em;">
                    <h4 class="w-100 text-center">Cergam</h4>
                    <div class="col">
                        <h5 class="text-center w-100">Sr. Beata</h5>
                        <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Sr.Beata" alt="Cerita Moral">
                        <p class="text-center w-100">Cerita Sr.Beata</p>
                    </div>
                    <div class="col">
                        <h5 class="text-center w-100">Friska</h5>
                        <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Varia">
                        <p class="text-center w-100">Cerita Friska</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3">
                <button class="btn btn-primary btn-menu">MENU</button>
                <div class="row" style="margin-bottom:1em">
                </div>
                <div class="row">
                    <img class="d-block w-100" src="<?php echo $gambar_ujud_doa ?>" alt="Gambar Ujud Doa">
                </div>
                <div class="row">
                    <h5 class="text-center w-100" style="margin-top: 1em;">Friska</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 1
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 2
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 3
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 4
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 5
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 6
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 7
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-5">
                                    <img class="d-block w-100" src="https://via.placeholder.com/300x200.png?text=Cerita+Friska" alt="Cerita Moral">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    Friska 8
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>