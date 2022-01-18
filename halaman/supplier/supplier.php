<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><b>Data Supplier</b></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Data Supplier</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Supplier</th>
              <th>Nama Supplier</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Pengaturan</th>
            </tr>
          </thead>

          <tbody>
            <?php

            $no = 1;
            $sql = $koneksi->query("select * from tb_supplier");
            while ($data = $sql->fetch_assoc()) {

            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['kode_supplier'] ?></td>
                <td><?php echo $data['nama_supplier'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['telepon'] ?></td>
                <td>
                  <a href="?halaman=supplier&aksi=ubahsupplier&kode_supplier=<?php echo $data['kode_supplier'] ?>" class="btn btn-success">Ubah</a>
                  <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?halaman=supplier&aksi=hapussupplier&id=<?php echo $data['kode_supplier'] ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
        <a href="?halaman=supplier&aksi=tambahsupplier" class="btn btn-primary">Tambah Data Supplier</a>
        </tbody>
        </table>
      </div>
    </div>
  </div>

</div>