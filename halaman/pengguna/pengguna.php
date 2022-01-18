<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800"><b>Data Pengguna</b></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pengguna</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Telepon</th>
              <th>Username</th>
              <th>Password</th>
              <th>Level</th>
              <th>Foto</th>
              <th>Pengaturan</th>
            </tr>
          </thead>

          <tbody>
            <?php

            $no = 1;
            $sql = $koneksi->query("select * from users");
            while ($data = $sql->fetch_assoc()) {

            ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nik'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['telepon'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['level'] ?></td>
                <td><img src="img/<?php echo $data['foto'] ?>" width="50" height="50" alt=""> </td>
                <td>
                  <a href="?halaman=pengguna&aksi=ubahpengguna&id=<?php echo $data['id'] ?>" class="btn btn-success">Ubah</a>
                  <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?halaman=pengguna&aksi=hapuspengguna&id=<?php echo $data['id'] ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
        <a href="?halaman=pengguna&aksi=tambahpengguna" class="btn btn-primary">Tambah</a>
        </tbody>
        </table>
      </div>
    </div>
  </div>

</div>