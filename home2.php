<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- Awal Widget Hari/Tgl -->
  <?php
  $hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Ju'mat", "Sabtu");
  $bulan = array(
    1 => "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
    "September", "Oktober", "November", "Desember"
  );
  $tgl = date("d");
  $bln = date("n");
  $hr = date("w");
  $thn = date("Y");
  echo ("<b>$hari[$hr], $tgl $bulan[$bln] $thn</b>");
  ?>
  <!-- Akhir Widget Hari/Tgl -->
  
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Beranda</h1>

  </div>
  <marquee>
    <h3 class="font-weight-bold">Halo, Selamat Datang <?php echo $data['nama']; ?>! Selamat Bertugas & Selalu Jaga Kesehatan</h3>
  </marquee>
  <br></br>

  <!-- Content Row -->
  <div class="row">

    <!-- Card Data Gudang -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-success success h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?halaman=gudang">
                <div class="text-center font-weight-bold text-success text-uppercase mb-1">
                  <h4>Stok<br>Gudang</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Card Barang Masuk -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-success success h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?halaman=barangmasuk">
                <div class="text-center font-weight-bold text-success text-uppercase mb-1">
                  <h4>Barang<br>Masuk</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Card Barang Keluar -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-success success h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?halaman=barangkeluar">
                <div class="text-center font-weight-bold text-success text-uppercase mb-1">
                  <h4>Barang<br>Keluar</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Card Data Supplier -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-success success h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <a href="?halaman=supplier">
                <div class="text-center font-weight-bold text-success text-uppercase mb-1">
                  <h4>Data<br>Supplier</h4>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>