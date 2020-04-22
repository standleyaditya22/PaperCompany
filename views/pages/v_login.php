<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
	<div class="container-fluid">
	  <!-- Content here -->
	  <div class="row">
	    <div class="kiri">
	      <img src="<?php echo base_url() ?>assets/img/img_login.jpg" id="img_login">
	    </div>
	    <div class="kanan">
	    	<form action="<?php echo base_url() ?>index.php/login/action_login" method="post">
	    		<center><h2>Selamat datang di web sistem percetakan buku</h2></center>
	    		<div class="input-group mb-3" style="margin-top: 70px;">
	    			<div class="input-group-prepend">
	    				<span class="input-group-text" id="inputGroup-sizing-default">Username</span>
	    			</div>
	    			<input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Username" required>
	    		</div>
	    		<div class="input-group mb-3">
	    			<div class="input-group-prepend">
	    				<span class="input-group-text" id="inputGroup-sizing-default">Password</span>
	    			</div>
	    			<input type="Password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Password" required>
	    		</div>
	    		<div class="tombol">
	    			<div><button type="submit" class="btn btn-success" style="width: 100%">Login</button></div>
	    			<div><button type="button" class="btn btn-secondary" style="width: 100%; margin-top: 10px;" data-toggle="modal" data-target="#modalDaftar">Daftar</button></div>
	    		</div>
	    	</form>
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<form action="<?php echo base_url() ?>index.php/login/action_register" method="post">
		<div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Anggota Baru</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<form action="" method="post">
		      		<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <label class="input-group-text" for="inputGroupSelect01">Jabatan</label>
					  </div>
					  <select class="custom-select" name="pilihan" id="inputGroupSelect01" required>
					    <option value="">Pilih</option>
					    <option value="Staff">Staff</option>
					    <option value="Distributor">Distributor</option>
					    <option value="Pimpinan">Pimpinan</option>
					    <option value="Supplier">Supplier</option>
					  </select>
					</div>
			      	<div class="input-group mb-3">
			    		<div class="input-group-prepend">
			    				<span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
			    		</div>
			    		<input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Nama" required>
			    	</div>
			      	<div class="input-group mb-3">
			    		<div class="input-group-prepend">
			    				<span class="input-group-text" id="inputGroup-sizing-default">Username</span>
			    		</div>
			    		<input type="text" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Username" required>
			    	</div>
			    	<div class="input-group mb-3">
			    		<div class="input-group-prepend">
			    			<span class="input-group-text" id="inputGroup-sizing-default">Password</span>
			    		</div>
			    		<input type="Password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Masukkan Password" required>
			    	</div>
		      	</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
		        <button type="submit" class="btn btn-primary" >Kirim & Daftar</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div id="notifications"><?php echo $this->session->flashdata('message'); ?></div> 
		<br>
	</form>
	<style type="text/css">
		#img_login{
			width: 100%;
		}
		.kiri{
			width: 55%;
			float:left;
			margin-left: 4%;
		}
		.kanan{
			width: 35%;
			float: right;
			margin: 20px;
		}
		.input-group{
			width: 90%;
			margin-left: 20px;
		}
		.input-group-text{
			width: 100px;
		}
		.tombol{
			margin-left: 20px;
			width: 90%;
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