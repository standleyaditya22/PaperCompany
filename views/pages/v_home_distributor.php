<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
<div class="container">
	<center>
		<div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-secondary active" data-toggle="collapse" data-target="#buat_pesanan" aria-expanded="false" aria-controls="buat_pesanan">
		    <input type="radio" name="options" id="option1" autocomplete="off" checked> Buat Pesanan
		  </label>
		  <label class="btn btn-secondary" data-toggle="collapse" data-target="#lapor_penjualan" aria-expanded="false" aria-controls="lapor_penjualan">
		    <input type="radio" name="options" id="option2" autocomplete="off"> Laporan Penjualan
		  </label>
		  <label class="btn btn-secondary" data-toggle="collapse" data-target="#status_pemesanan" aria-expanded="false" aria-controls="status_pemesanan">
		    <input type="radio" name="options" id="option4" autocomplete="off"> Status Pemesanan
		  </label>
		</div>
		<form action="<?php echo base_url() ?>index.php/pages/insert" method="POST">
			<div class="collapse" id="buat_pesanan" style="width: 50%;">
			  <div class="card card-body">
			    <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">ID Transaksi</span>
				  </div><input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $token ?>" disabled>
				  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_pesanan" value="<?php echo $token ?>" hidden>
				</div>
				<div class="input-group mb-3">
					<select class="custom-select" name="pilihan" id="inputGroupSelect01" required>
						<option value="">Pilih</option>
						<option value="Buku ajar">Buku ajar</option>
						<option value="Cerita Gambar">Cerita Gambar</option>
						<option value="Ensiklopedi">Ensiklopedi</option>
						<option value="Komik">Komik</option>
						<option value="Novel">Novel</option>
					</select>
					<input type="text" class="form-control" name="jumlah" aria-label="Text input with dropdown button" placeholder="Masukkan Jumlah Pesanan (Lusin)"></div>
					<button type="submit" class="btn btn-success">Kirim Pesanan</button>
				</div>	
			  </div>
			</div>
		</form>
		<center>
			<form action="<?php echo base_url() ?>index.php/pages/laporan" method="post">
				<div class="collapse" id="lapor_penjualan" style="width: 41%;">
				  <div class="card card-body">
				  		<label>Tanggal :</label>
				    	<div><input type="date" name="tanggal" value ="<?php echo date('Y-m-d') ?>"></div>
				    	<div class="input-group mb-3">
						<select class="custom-select" name="pilihan" id="inputGroupSelect01" required>
							<option value="">Pilih</option>
							<option value="Buku ajar">Buku ajar</option>
							<option value="Cerita Gambar">Cerita Gambar</option>
							<option value="Ensiklopedi">Ensiklopedi</option>
							<option value="Komik">Komik</option>
							<option value="Novel">Novel</option>	
						</select>
						<input type="text" class="form-control" name="jumlah" aria-label="Text input with dropdown button" placeholder="Masukkan Jumlah Buku(Lusin)"></div>
						<button type="submit" class="btn btn-success">Kirim Laporan</button>
					</div>
				  </div>
				</div>
			</form>
		</center>
		<center>
				<div class="collapse" id="status_pemesanan" style="width: 41%;">
				  <table class="table table-bordered table-striped" id="mydata">
		            <thead>
		                  <tr>
		                  	<td>ID Pesanan</td>
		                    <td>Nama Buku</td>
		                    <td>Jumlah</td>
		                    <td>Status</td>
		                  </tr>
		            </thead>
		            <tbody>
		                <?php
		                    foreach($status->result_array() as $data_tabel):
		                    $id_pesanan=$data_tabel['id_pesanan'];
		                    $nama_buku=$data_tabel['nama_buku'];
		                    $jumlah=$data_tabel['jumlah'];
		                    $status=$data_tabel['status'];
		                  ?>
		                  <tr>
		                        <td><?php echo $id_pesanan;?> </td>
		                        <td><?php echo $nama_buku;?> </td>
		                        <td><?php echo $jumlah;?> </td>
		                        <td><?php echo $status;?> </td>
		                  </tr>
		                  <?php endforeach;?>
		            </tbody>
		      		</table>
			</form>
		</center>
	</center>
</div>
<div id="notifications"><?php echo $this->session->flashdata('message'); ?></div> 
<br>
<style type="text/css">
	.buat_pesanan{
		width: 50%;
		float: left;
	}
	.refund{
		width: 50%;
		float: right;
	}
	#notifications {
		    cursor: pointer;
		    position: fixed;
		    right: 0px;
		    z-index: 9999;
		    bottom: 0px;
		    margin-bottom: 22px;
		    margin-right: 15px;
		    min-width: 300px; 
		    max-width: 800px;  
	}
</style>