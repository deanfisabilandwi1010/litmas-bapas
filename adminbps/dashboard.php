<!DOCTYPE html>
<?php include '../config.php'; ?>

<html lang="en">

<head>
  <?php
  session_start();
  if ($_SESSION['status'] == 'login') { ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Bapas Pekanbaru</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/bapas.png" rel="icon">
    <link href="../assets/img/bapas.png" rel="Logoo">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="../adminbps/dashboard.php" class="logo d-flex align-items-center">
        <img src="../assets/img/bapas.png" alt="">
        <img src="../assets/img/pemasyarakatan.png" alt="">
        <span class="d-none d-lg-block">Bapas Pekanbaru</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">


        <a class="btn btn-outline-light" style="margin-right: 10px" href="../loginbps.php">Logout</a>
  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
      <li class="nav-heading">Main Menu</li>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link " href="../adminbps/dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>BKA</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
              <a href="../adminbps/bka-diversi.php">
                <i class="bi bi-circle"></i><span>Diversi</span>
              </a>
            </li>
            <li>
              <a href="../adminbps/bka-sidang.php">
                <i class="bi bi-circle"></i><span>Sidang</span>
              </a>
            </li>
          <li>
            <a href="../adminbps/bka-asimilasi rumah.php">
              <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-cuti bersyarat.php">
              <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-cuti menjelang bebas.php">
              <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bka-pembebasan bersyarat.php">
              <i class="bi bi-circle"></i><span>Pembebasan Bersyarat</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>BKD</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../adminbps/bkd-asimilasi rumah.php">
              <i class="bi bi-circle"></i><span>Asimilasi Rumah</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-cuti bersyarat.php">
              <i class="bi bi-circle"></i><span>Cuti Bersyarat</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-cuti menjelang bebas.php">
              <i class="bi bi-circle"></i><span>Cuti Menjelang Bebas</span>
            </a>
          </li>
          <li>
            <a href="../adminbps/bkd-pembebasan bersyarat.php">
              <i class="bi bi-circle"></i><span>Pembebasan Bersyarat</span>
            </a>
          </li>
        </ul>
      </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/Lapas.php">
          <i class="bi bi-file-code-fill"></i>
          <span>Lapas</span>
        </a>

        <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/kasus.php">
          <i class="bi bi-book-half"></i>
          <span>Kasus</span>
        </a>

      <li class="nav-item">
        <a class="nav-link collapsed" href="../adminbps/userbapas.php">
          <i class="bi bi-people"></i>
          <span>Pegawai</span>
        </a>
      </li><!-- End Forms Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

  <?php
  $resultbka_diversi = pg_query(
      $conn,
      'SELECT count(*) as diversi FROM litmas  WHERE id_jenis_litmas = 5 AND id_jenis_klien= 1'
  );

  $resultbka_sidang = pg_query(
      $conn,
      'SELECT count(*) as sidang FROM litmas  WHERE id_jenis_litmas = 6 AND id_jenis_klien= 1'
  );

  $resultbka_asirum = pg_query(
      $conn,
      'SELECT count(*) as asirum FROM litmas  WHERE id_jenis_litmas = 4 AND id_jenis_klien= 1'
  );

  $resultbka_cb = pg_query(
      $conn,
      'SELECT count(*) as cb FROM litmas  WHERE id_jenis_litmas = 1 AND id_jenis_klien= 1'
  );

  $resultbka_cmb = pg_query(
      $conn,
      'SELECT count(*) as cmb FROM litmas  WHERE id_jenis_litmas = 2 AND id_jenis_klien= 1'
  );

  $resultbka_pb = pg_query(
      $conn,
      'SELECT count(*) as pb FROM litmas  WHERE id_jenis_litmas = 3 AND id_jenis_klien= 1'
  );

  $resultbkd_asirum = pg_query(
      $conn,
      'SELECT count(*) as asirum FROM litmas  WHERE id_jenis_litmas = 4 AND id_jenis_klien= 2'
  );

  $resultbkd_cb = pg_query(
      $conn,
      'SELECT count(*) as cb FROM litmas  WHERE id_jenis_litmas = 1 AND id_jenis_klien= 2'
  );

  $resultbkd_cmb = pg_query(
      $conn,
      'SELECT count(*) as cmb FROM litmas  WHERE id_jenis_litmas = 3 AND id_jenis_klien= 2'
  );

  $resultbkd_pb = pg_query(
      $conn,
      'SELECT count(*) as pb FROM litmas  WHERE id_jenis_litmas = 2 AND id_jenis_klien= 2'
  );

  $jumlahbka_diversi = pg_fetch_array($resultbka_diversi);
  $jumlahbka_sidang = pg_fetch_array($resultbka_sidang);
  $jumlahbka_asirum = pg_fetch_array($resultbka_asirum);
  $jumlahbka_cb = pg_fetch_array($resultbka_cb);
  $jumlahbka_cmb = pg_fetch_array($resultbka_cmb);
  $jumlahbka_pb = pg_fetch_array($resultbka_pb);
  $jumlahbkd_asirum = pg_fetch_array($resultbkd_asirum);
  $jumlahbkd_cb = pg_fetch_array($resultbkd_cb);
  $jumlahbkd_cmb = pg_fetch_array($resultbkd_cmb);
  $jumlahbkd_pb = pg_fetch_array($resultbkd_pb);
  ?>

    <div class="pagetitle">
      <h1>Beranda</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="../adminbps/dashboard.php">Beranda</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bagian Klien Anak</h5>
              <p class="card-text">bagian (unit) dari Bapas yang memiliki tugas-tugas Bapas yang berkenaan dengan klien pemasyarakatan yang berusia anak yakni belum genap berusia 18 (delapan belas) Tahun di wilayah Pekanbaru
            </div>
              <br>
            <div class="card"  style="margin: auto;">
          <span style="float: right; padding-top: 20px;">
          <p class="text-center" style="color: navy;"><b>Total Litmas Klien Anak</b></p>
            <div class="card" style="width: 18rem; ">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Diversi<span style="float: right;"><?= $jumlahbka_diversi[
                      'diversi'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Sidang<span style="float: right;"><?= $jumlahbka_sidang[
                      'sidang'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Asimilasi Rumah<span style="float: right;"><?= $jumlahbka_asirum[
                      'asirum'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Cuti Bersyarat<span style="float: right;"><?= $jumlahbka_cb[
                      'cb'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Cuti Menjelang Bebas<span style="float: right;"><?= $jumlahbka_cmb[
                      'cmb'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Pembebasan Bersyarat<span style="float: right;"><?= $jumlahbka_pb[
                      'pb'
                  ] ?> Kasus</span></li>
                  </ul>
                </div>
              </span>
            </div>
        </div>
      </div>
      <br>
      <div class="card">
            <div class="card-body">
          <h5 class="card-title">Bagian Klien Dewasa</h5>
          <p class="card-text">Memberikan bimbingan kemasyarakatan dan pengentasan klien dewasa sesuai dengan peraturan perundang-undangan yang berlaku dari Pekanbaru. 
        </div>
        <br>
        <div class="card"  style="margin: auto;">
          <span style="float: right; padding-top: 20px;">
          <p class="text-center" style="color: navy;"><b>Total Litmas Klien Dewasa</b></p>
            <div class="card" style="width: 18rem; ">
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">Asimilasi Rumah<span style="float: right;"><?= $jumlahbkd_asirum[
                      'asirum'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Cuti Bersyarat<span style="float: right;"><?= $jumlahbkd_cb[
                      'cb'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Cuti Menjelang Bebas<span style="float: right;"><?= $jumlahbkd_cmb[
                      'cmb'
                  ] ?> Kasus</span></li>
                  <li class="list-group-item">Pembebasan Bersyarat<span style="float: right;"><?= $jumlahbkd_pb[
                      'pb'
                  ] ?> Kasus</span></li>
              </ul>
            </div>
          </span>
        </div>
       </div>
       </div>
    </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bapas Pekanbaru</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bapaspekanbaru.kemenkumham.go.id/">Bapas Pekanbaru</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="..//vendor/quill/quill.min.js"></script>
  <script src="..//vendor/simple-datatables/simple-datatables.js"></script>
  <script src="..//vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>
<?php } else {echo 'maaf Anda belum login.';}
  ?>

</html>