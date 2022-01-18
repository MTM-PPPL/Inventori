<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><b>Satuan Barang</b></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Satuan Barang</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Satuan Barang</th>
              <th>Pengaturan</th>
            </tr>
          </thead>

          <tbody>
            <?php

            $no = 1;
            $sql = $koneksi->query("select * from satuan");
            while ($data = $sql->fetch_assoc()) {

            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['satuan'] ?></td>
                <td>
                  <a href="?halaman=satuanbarang&aksi=ubahsatuan&id=<?php echo $data['id'] ?>" class="btn btn-success">Ubah</a>
                  <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?halaman=satuanbarang&aksi=hapussatuan&id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a href="?halaman=satuanbarang&aksi=tambahsatuan" class="btn btn-primary">Tambah Satuan Barang</a>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>