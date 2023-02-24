<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?= base_url() ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url() ?>/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?= base_url() ?>/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->

    
       
 <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?=base_url() ?>/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?=base_url() ?>/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?=base_url() ?>/assets/vendor/js/bootstrap.js"></script>
    <script src="<?=base_url() ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?=base_url() ?>/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->


    <!-- Main JS -->
  <script src="<?=base_url() ?>/assets/js/main.js"></script>

<!-- <script>
$(function () {
  "use strict";
  //validasi Login
  var e = $(".auth-login-form"),
  i = $(".auth-registrasi-form");
  e.length &&
    e.validate({
      rules: {
        "login-username": { required: !0},
        "login-password": { required: !0},
      },
      messages: {
        "login-username": {
          required: "Username harus diisi",
        },
        "login-password" : { 
          required: "Password harus diisi"
        },
      },
    });

    //validasi registrasi 

    i.length &&
    i.validate({
      rules : {
        "register_nama": { required: !0},
        "register_username": { required: !0},
        "register_email": { required: !0},
        "register_password": { required: !0},
        "register_alamat": { required: !0},
        "register_nomor_telepon": { required: !0},
      },
      messages: {
        "register_nama": {
          required: "Nama harus diisi!",
        },
        "register_username": {
          required: "Format username tidak sesuai",
        },
        "register_password": {
          required: "Password harus diisi",
        },
        "register_alamat": {
          required: "Alamat harus diisi",
        },
        "register_nomor_telepon": {
          required: "NomorTelepon harus diisi",
        },
      },
    });
  });
  </script> -->
  </body>
</html>