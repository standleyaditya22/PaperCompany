
<div class="container">
	<div class="row">
		<div class="col-md-12 mx-auto">

			<div class="card mt-4">
				<div class="card-body">
					<h4>Laporan Penjualan</h4>
					<hr>
					<a class="btn btn-primary mb-3 text-light" onclick="myFunction()">Cetak Laporan</a>

					<script>
						function myFunction() {
						    window.print();
						}
					</script>

					<table class="table table-bordered table-striped table-hover">
						<tr>
							<th>Nama Pengirim</th>
							<th>Nama Buku</th>
							<th>Tanggal</th>
							<th width="10%">Jumlah</th>
						</tr>

						<tbody>
		                <?php
		                    foreach($laporan->result_array() as $data_tabel):
		                    $nama_pengirim=$data_tabel['nama_pengirim'];
		                    $nama_buku=$data_tabel['nama_buku'];
		                    $tanggal=$data_tabel['tanggal'];
		                    $jumlah=$data_tabel['jumlah'];
		                  ?>
		                  <tr>
		                        <td><?php echo $nama_pengirim;?> </td>
		                        <td><?php echo $nama_buku;?> </td>
		                        <td><?php echo $tanggal;?> </td>
		                        <td><?php echo $jumlah;?> </td>
		                  </tr>
		                  <?php endforeach;?>
		            </tbody>
				</div>
			</div>

		</div>
	</div>
</div>
