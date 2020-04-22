<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		#head {
			background: url(<?php echo base_url() ?>assets/img/background2.jpg);
			height: 500px;			
			background-size: cover;
		}
		body {
			background-color: gainsboro;
		}
		.btn1 {
			background-color:  peru;
			border-radius: 10px;
			border: none;
		    color: white;
		    padding: 15px 40px;
		    font-weight: bold;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;

		}
		#emailM {
			width: 300px;
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
	    #sel1 {
	    	width: 200px;
	    	margin-bottom: 25px;
	    }
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row" >
			<div class="col-sm-12" id="head">
				<div style="margin-top: 50px"><center><img src="<?php echo base_url() ?>assets/img/worker.png" width="200px">
					<h1 style="color:white; font-family: 'Arvo', serif; font-size: 60px; margin-top:20px;">PAPER COMPANY</h1>
					<text style="color: white; font-size: 20px">All Paper Company Element is on this website.</text></center></div>
			</div>			
		</div>
		<div class="row">
			<div class="col-sm-12" style="background-image: url('<?php echo base_url() ?>assets/img/steel.jpg'); background-size: cover; height: 250px">
				<div style="margin-top: 75px; margin-left: 30%">
					<table>
						<tr>
							<td><p style="color: white; font-size: 16px;">Already in this company? Go Login now</p></td>
							<td style="padding-left: 40px"><p style="color: white; font-size: 16px;">Don't Have Account yet? Register Now!</p></td>
						</tr>
						<tr>
							<td style="padding-left: 60px"><a href="" data-toggle="modal" data-target="#loginModal"><button class="btn1">LOGIN</button></a></td>
							<td style="padding-left: 100px"><a href="<?php echo site_url('Pages/SignUp'); ?>"><button class="btn1">REGISTER</button></a></td>
						</tr>
					</table>
					<div id="notifications"><?php echo $this->session->flashdata('message'); ?></div>
				</div>

			</div>
		</div>
	</div>
	<div class="modal fade" id="loginModal" role="dialog" style="margin-top: 10%;">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title" style="margin-left: 200px;">LOGIN</h4>
        	<button type="button" class="close" data-dismiss="modal">&times;</button>          	        
        </div>
        <div class="modal-body mx-3">
	        <center><form action="<?php echo base_url() ?>index.php/login/action_login" method="post">
	        	<div class="md-form mb-4">
	            <input type="text" name="username" id="userM" class="form-control validate" required placeholder="USERNAME">
	          </div>
	          <div class="md-form mb-4">
	            <input type="password" name="password" id="passM" class="form-control validate" required placeholder="PASSWORD">
	          </div>
	          <div class="modal-footer">
	            <button style="margin-right: 170px" class="btn btn-default">Login</button>
	          </div>
	        </form>   </center>       
        </div>
      </div>
    </div>     
   </div>

</body>
</html>