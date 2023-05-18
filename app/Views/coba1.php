<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Carousel - UI elements | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url() ?>/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>/assets/js/config.js"></script>
  </head>



<!-- Bootstrap carousel -->
<div class="col-md">
                  <!-- <h5 class="my-4">Bootstrap carousel</h5> -->

                  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url() ?>/assets/img/elements/13.jpg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>First slide</h3>
                          <p>Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url() ?>/assets/img/elements/2.jpg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Second slide</h3>
                          <p>In numquam omittam sea.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url() ?>/assets/img/elements/18.jpg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Third slide</h3>
                          <p>Lorem ipsum dolor sit amet, virtute consequat ea qui, minim graeco mel no.</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="<?= base_url() ?>#carouselExample" role="button" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="<?= base_url() ?>#carouselExample" role="button" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </a>
                  </div>
                </div>

                <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
