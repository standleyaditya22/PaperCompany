<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			background-image: url('<?php echo base_url() ?>assets/img/background5.png');
			background-size: cover;

		}
		#lf {
			width: 400px;
			height: 600px;
			background-image: url("<?php echo base_url() ?>assets/img/image1.png"); 
			background-size: cover;
			margin-left: 80px;
		}
		#rgt {
			height: 600px;
			width: 350px;
			background: rgba(255, 255, 255);
		}
		.inp {
			border: none;
			border-bottom: 3px;
			width: 200px;
			margin-left: 30px;
			border-bottom-style: solid;
			border-bottom-color: grey;
			text-align: left;
			margin-top: 25px;
			font-family: 'Ranga', cursive;
		}
		#name {
			margin-top: 40px;
		}
		#lft {
			height: 600px;
			width: 300px;
			background: ghostwhite;
		}
		#btnn {
			border: none;
			border-radius: 10px;
			background-color: cornflowerblue;
			margin-top: 110px;
			padding-bottom: 4px;
		}
		#userM {
	      width: 300px;
	      margin-top: 25px;
	      margin-bottom: 25px;
	    }
	    #passM {
	      width: 300px;
	      margin-top: 25px;
	      margin-bottom: 25px;
	    }
	</style>
</head>
<body>
	<div class="container" style="margin-top: 80px;">
		<div class="row">
			<div class="col-sm-4" id="lf">
				<img src="<?php echo base_url() ?>assets/img/logo2.png" width="130px" style="margin-top: 40px;margin-left: 32%">
			</div>
			<div class="col-sm-4" id="rgt">
				<h4 style="font-family: 'Ranga', cursive; font-weight: bold; text-align: left; margin-top: 40px;">SIGN UP</h4>
				<div style="font-family: 'Ranga', cursive; margin-top: 40px;">we will need your...</div>
				<form action="<?php echo base_url() ?>index.php/signup/action_signup" method="post">
				<div class="form-group">
				   <input required type="text" name="name" class="inp" id="name" placeholder="Your Name"><br>
				   <input required type="text" name="username" class="inp" id="user" placeholder="Your Username"><br>
				   <input required type="password" name="pass" class="inp" id="pass" placeholder="Your Password"><br>
				   <input required type="password" name="pass2" class="inp" id="pass2" placeholder="Confirm Password"><br>
				   <select class="custom-select" name="sel2" id="inputGroupSelect01" required style="font-family: 'Ranga', cursive; margin-left: 25px; margin-top: 25px; border: none;">
					    <option value="Staff">Staff</option>
					    <option value="Distributor">Distributor</option>
					    <option value="Pimpinan">Pimpinan</option>
					    <option value="Supplier">Supplier</option>
					  </select><br>
				   <button type="submit" class="btn btn-primary" style="font-family: 'Ranga', cursive; margin-top: 25px; margin-left: 95px;">Submit</button>
				</div>
				</form>
			</div>
			<div class="col-sm-4" id="lft">
				<div style="font-family: 'Ranga', cursive; margin-top: 105px;">Or you can...</div>
				<a href="" data-toggle="modal" data-target="#loginModal"><button  id="btnn" style="font-family: 'Ranga', cursive; color:white; width: 250px; text-align: left; padding-top: 4px;">LOGIN HERE<img src="<?php echo base_url() ?>assets/img/login.png" width="20px" style="float: right; margin-right: 7px;"></button></a>
			</div>
		</div>		
	</div>
	<div class="container-fluid" style="margin-top: 25px">
		<p style="color:ghostwhite">&#169; 2018 by PAPER COMPANY.</p>
	</div>

	<div class="modal fade" id="loginModal" role="dialog" style="margin-top: 10%;">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h4 class="modal-title" style="margin-left: 260px;">LOGIN</h4>        	          	        
        </div>
        <div class="modal-body mx-2">
	        <center><form action="<?php echo base_url() ?>index.php/login/action_login" method="post">
	        	<div class="md-form mb-4">
	            <input type="text" name="username" id="userM" class="form-control validate" required placeholder="USERNAME">
	          </div>
	          <div class="md-form mb-4">
	            <input type="password" name="password" id="passM" class="form-control validate" required placeholder="PASSWORD">
	          </div>
	          <div class="modal-footer">
	            <button style="margin-right: 240px" class="btn btn-default">Login</button>
	          </div>
	        </form>   </center>       
        </div>
      </div>
    </div>     
   </div>
</body>
</html>