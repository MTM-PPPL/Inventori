<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();

$koneksi = new mysqli("localhost", "root", "", "inventori_dhk");
if (empty($_SESSION['admin'])) {
  header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logocompp.png" rel="shortcut icon">

  <title>Inventaris Barang PT. DHK</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Awal Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <img src="../inventori_dhk/img/logocompp.png" style="width:80px;height:45px;">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <?php
      if ($_SESSION['admin']) {
        $user = $_SESSION['admin'];
      }
      $sql = $koneksi->query("select * from users where id='$user'");
      $data = $sql->fetch_assoc();
      ?>

      <!--Mulai Sidebar-->
      <li class="d-flex align-items-center justify-content-center">
        <a class="nav-link">
          <img src="img/<?php echo $data['foto'] ?>" class="img-circle" width="80" alt="User" /></a>
      <li class="d-flex align-items-center justify-content-center">
      </li>
      </li>
      <li class="nav-item ">
        <a class="nav-link">
          <div class="d-flex align-items-center justify-content-center" class="name"> <?php echo  $data['nama']; ?></div>
          <div class="d-flex align-items-center justify-content-center" class="email"><strong><?php echo $data['level']; ?></strong></div>
        </a>
      </li>

      <!-- Nav Item - Beranda -->
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=home">
          <i class="fas fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Menu -->
      <!-- Sub Menu - Data Pengguna -->
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=pengguna">
          <i class="fas fa-fw fa-user"></i>
          <span>Data Pengguna</span></a>
      </li>

      <!-- Sub Menu - Data Supplier -->
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=supplier">
          <i class="fas fa-fw fa-home"></i>
          <span>Data Supplier</span></a>
      </li>

      <!-- Sub Menu - Stok Gudang -->
      <li class="nav-item active">
        <a class="nav-link" href="?halaman=gudang">
          <i class="fas fa-fw fa-home"></i>
          <span>Stok Gudang</span></a>
      </li>

      <!-- Sub Menu - Atur Data -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-cog"></i>
          <span>Atur Data</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Atur:</h6>
            <a class="collapse-item" href="?halaman=jenisbarang">Jenis Barang</a>
            <a class="collapse-item" href="?halaman=satuanbarang">Satuan Barang</a>
          </div>
        </div>
      </li>

      <!-- Sub Menu - Info Barang -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-info-circle"></i>
          <span>Informasi Barang</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Info:</h6>
            <a class="collapse-item" href="?halaman=barangmasuk">Barang Masuk</a>
            <a class="collapse-item" href="?halaman=barangkeluar">Barang Keluar</a>
          </div>
        </div>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>

      <!-- Nav Item - Laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
          <i class="fas fa-fw fa-file"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Laporan:</h6>
            <a class="collapse-item" href="?halaman=laporan_gudang">Laporan Stok Gudang</a>
            <a class="collapse-item" href="?halaman=laporan_barangmasuk">Laporan Barang Masuk</a>
            <a class="collapse-item" href="?halaman=laporan_barangkeluar">Laporan Barang Keluar</a>
            <a class="collapse-item" href="?halaman=laporan_supplier">Laporan Supplier</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      <li class="text-center"><a onclick="return confirm('Apakah anda yakin akan logout?')" class="btn btn-danger" class="logout" href="logout.php">LOGOUT</a></li>

    </ul>
    <!-- Akhir Sidebar -->

    <!-- Awal Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Awal Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Awal Widget Jam -->
          <div class="jam-digital">
            <div id="jam"></div>
            <div id="unit">
              <span>Jam</span>
              <span>Menit</span>
              <span>Detik</span>
              <br>
            </div>
          </div>

          <style>
            .jam-digital {
              width: 153px;
              margin: 0px;
              position: absolute;
              right: 31px;
              top: 1px;
            }

            #jam span {
              float: left;
              text-align: center;
              font-size: 16px;
              margin: 10px;
              padding: 3px;
              width: 30px;
              border-radius: 0.35rem;
              box-sizing: border-box;
              color: #ffffff;
            }

            #jam span:nth-child(1) {
              background: #298f19;
            }

            #jam span:nth-child(2) {
              background: #298f19;
            }

            #jam span:nth-child(3) {
              background: #298f19;
            }

            #jam::after {
              content: "";
              display: block;
              clear: both;
            }

            #unit span {
              float: left;
              width: 51px;
              text-align: center;
              text-transform: uppercase;
              letter-spacing: 0px;
              font-size: 9px;
              color: #298f19;
            }

            span.turn {
              animation: turn 0.7s ease;
            }

            @keyframes turn {
              0% {
                transform: rotateX(0deg)
              }

              100% {
                transform: rotateX(360deg)
              }
            }

            @media screen and (max-width: 980px) {
              #jam span {
                float: left;
                text-align: center;
                font-size: 17px;
                margin: 0px;
                padding: 0px;
                width: 30px;
              }

              .jam-digital {
                width: 100px;
                margin: 0px;
                position: absolute;
                left: 60px;
                top: 19px;
              }

              #unit span {
                width: 28px;
                font-size: 7px;
                letter-spacing: 0px;
              }
            }
          </style>

          <script>
            function animation(span) {
              span.className = "turn";
              setTimeout(function() {
                span.className = ""
              }, 700);
            }

            function jam() {
              setInterval(function() {

                var waktu = new Date();
                var jam = document.getElementById('jam');
                var hours = waktu.getHours();
                var minutes = waktu.getMinutes();
                var seconds = waktu.getSeconds();

                if (waktu.getHours() < 10) {
                  hours = '0' + waktu.getHours();
                }
                if (waktu.getMinutes() < 10) {
                  minutes = '0' + waktu.getMinutes();
                }
                if (waktu.getSeconds() < 10) {
                  seconds = '0' + waktu.getSeconds();
                }
                jam.innerHTML = '<span>' + hours + '</span>' +
                  '<span>' + minutes + '</span>' +
                  '<span>' + seconds + '</span>';

                var spans = jam.getElementsByTagName('span');
                animation(spans[2]);
                if (seconds == 0) animation(spans[1]);
                if (minutes == 0 && seconds == 0) animation(spans[0]);

              }, 1000);
            }

            jam();
          </script>
          <!-- Akhir Widget Jam -->

        </nav>
        <!-- Akhir Topbar -->

        <!-- Mulai Page Content -->
        <div class="container-fluid">
          <section class="content">

            <?php
            $halaman = $_GET['halaman'];
            $aksi = $_GET['aksi'];


            if ($halaman == "pengguna") {
              if ($aksi == "") {
                include "halaman/pengguna/pengguna2.php";
              }
              if ($aksi == "tambahpengguna2") {
                include "halaman/pengguna/tambahpengguna2.php";
              }
            }


            if ($halaman == "supplier") {
              if ($aksi == "") {
                include "halaman/supplier/supplier.php";
              }
              if ($aksi == "tambahsupplier") {
                include "halaman/supplier/tambahsupplier.php";
              }
              if ($aksi == "ubahsupplier") {
                include "halaman/supplier/ubahsupplier.php";
              }
              if ($aksi == "hapussupplier") {
                include "halaman/supplier/hapussupplier.php";
              }
            }


            if ($halaman == "jenisbarang") {
              if ($aksi == "") {
                include "halaman/jenisbarang/jenisbarang.php";
              }
              if ($aksi == "tambahjenis") {
                include "halaman/jenisbarang/tambahjenis.php";
              }
              if ($aksi == "ubahjenis") {
                include "halaman/jenisbarang/ubahjenis.php";
              }
              if ($aksi == "hapusjenis") {
                include "halaman/jenisbarang/hapusjenis.php";
              }
            }


            if ($halaman == "satuanbarang") {
              if ($aksi == "") {
                include "halaman/satuanbarang/satuan.php";
              }
              if ($aksi == "tambahsatuan") {
                include "halaman/satuanbarang/tambahsatuan.php";
              }
              if ($aksi == "ubahsatuan") {
                include "halaman/satuanbarang/ubahsatuan.php";
              }
              if ($aksi == "hapussatuan") {
                include "halaman/satuanbarang/hapussatuan.php";
              }
            }


            if ($halaman == "barangmasuk") {
              if ($aksi == "") {
                include "halaman/barangmasuk/barangmasuk.php";
              }
              if ($aksi == "tambahbarangmasuk") {
                include "halaman/barangmasuk/tambahbarangmasuk.php";
              }
              if ($aksi == "ubahbarangmasuk") {
                include "halaman/barangmasuk/ubahbarangmasuk.php";
              }
              if ($aksi == "hapusbarangmasuk") {
                include "halaman/barangmasuk/hapusbarangmasuk.php";
              }
            }


            if ($halaman == "gudang") {
              if ($aksi == "") {
                include "halaman/gudang/gudang.php";
              }
              if ($aksi == "tambahgudang") {
                include "halaman/gudang/tambahgudang.php";
              }
              if ($aksi == "ubahgudang") {
                include "halaman/gudang/ubahgudang.php";
              }

              if ($aksi == "hapusgudang") {
                include "halaman/gudang/hapusgudang.php";
              }
            }


            if ($halaman == "barangkeluar") {
              if ($aksi == "") {
                include "halaman/barangkeluar/barangkeluar.php";
              }
              if ($aksi == "tambahbarangkeluar") {
                include "halaman/barangkeluar/tambahbarangkeluar.php";
              }
              if ($aksi == "ubahbarangkeluar") {
                include "halaman/barangkeluar/ubahbarangkeluar.php";
              }
              if ($aksi == "hapusbarangkeluar") {
                include "halaman/barangkeluar/hapusbarangkeluar.php";
              }
            }


            if ($halaman == "laporan_supplier") {
              if ($aksi == "") {
                include "halaman/laporan/laporan_supplier.php";
              }
            }
            if ($halaman == "laporan_barangmasuk") {
              if ($aksi == "") {
                include "halaman/laporan/laporan_barangmasuk.php";
              }
            }
            if ($halaman == "laporan_gudang") {
              if ($aksi == "") {
                include "halaman/laporan/laporan_gudang.php";
              }
            }
            if ($halaman == "laporan_barangkeluar") {
              if ($aksi == "") {
                include "halaman/laporan/laporan_barangkeluar.php";
              }
            }


            if ($halaman == "") {
              include "home.php";
            }
            if ($halaman == "home") {
              include "home.php";
            }
            ?>

          </section>
        </div>
        <!-- Akhir Main Content -->

        <!-- Mulai Footer -->
        <br><br>
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>2021 | Inventaris Barang PT. DHK</span>
            </div>
          </div>
        </footer>
        <!-- Akhir Footer -->

      </div>
      <!-- Akhir Content Wrapper -->

    </div>
    <!-- Akhir Page Wrapper -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <!--script for this page-->
  <script>
    jQuery(document).ready(function($) {
      $('#cmb_barang').change(function() { // Jika Select Box id provinsi dipilih
        var tamp = $(this).val(); // Ciptakan variabel provinsi
        $.ajax({
          type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'halaman/barangmasuk/get_barang.php', // File yang akan memproses data
          data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
          success: function(data) { // Jika berhasil
            $('.tampung').html(data); // Berikan hasil ke id kota
          }
        });
      });
    });
  </script>

  <script>
    jQuery(document).ready(function($) {
      $('#cmb_barang').change(function() { // Jika Select Box id provinsi dipilih
        var tamp = $(this).val(); // Ciptakan variabel provinsi
        $.ajax({
          type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'halaman/barangmasuk/get_satuan.php', // File yang akan memproses data
          data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
          success: function(data) { // Jika berhasil
            $('.tampung1').html(data); // Berikan hasil ke id kota
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(function() {
        $('#Myform1').submit(function() {
          $.ajax({
            type: 'POST',
            url: 'halaman/laporan/export_laporan_barangmasuk_excel.php',
            data: $(this).serialize(),
            success: function(data) {
              $(".tampung1").html(data);
              $('.table').DataTable();
            }
          });

          return false;
          e.preventDefault();
        });
      });
    });
  </script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(function() {
        $('#Myform2').submit(function() {
          $.ajax({
            type: 'POST',
            url: 'halaman/laporan/export_laporan_barangkeluar_excel.php',
            data: $(this).serialize(),
            success: function(data) {
              $(".tampung2").html(data);
              $('.table').DataTable();
            }
          });

          return false;
          e.preventDefault();
        });
      });
    });
  </script>
</body>
</html>