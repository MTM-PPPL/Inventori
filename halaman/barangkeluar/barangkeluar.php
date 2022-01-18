<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><b>Barang Keluar</b></h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Daftar Barang Keluar</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Id Transaksi</th>
							<th>Tanggal Keluar (YYYY-MM-DD)</th>
							<th>Kode Barang</th>
							<th>Nama Barang</th>
							<th>Jumlah Keluar</th>
							<th>Satuan Barang</th>
							<th>Tujuan</th>
							<th>Pengaturan</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$no = 1;
						$sql = $koneksi->query("select * from barang_keluar");
						while ($data = $sql->fetch_assoc()) {

						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['id_transaksi'] ?></td>
								<td><?php echo $data['tanggal'] ?></td>
								<td><?php echo $data['kode_barang'] ?></td>
								<td><?php echo $data['nama_barang'] ?></td>
								<td><?php echo $data['jumlah'] ?></td>
								<td><?php echo $data['satuan'] ?></td>
								<td><?php echo $data['tujuan'] ?></td>
								<td>
									<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?halaman=barangkeluar&aksi=hapusbarangkeluar&id_transaksi=<?php echo $data['id_transaksi'] ?>" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						<?php } ?>

					</tbody>
				</table>
				<a href="?halaman=barangkeluar&aksi=tambahbarangkeluar" class="btn btn-primary">Tambah</a>
				</tbody>
				</table>
			</div>
		</div>
	</div>

</div>