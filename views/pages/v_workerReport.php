	<div class="container" id="mainMenu">
		<center><h1 style="color:black">Make a Report</h1><br></center>
		<div><form action="<?php echo base_url() ?>index.php/workerHome/actionReport" method="post">
		  <center><div class="form-group">
		    <label for="exampleInputEmail1">Name :</label>
		    <input required type="text" class="" style="width: 300px" name="name" placeholder="Enter Name">
		  </div></center>
		  <center><h4>Item Produced</h4></center><br>
		  <center><div class="form-group">
		    <label for="exampleInputEmail1">Drawing Book  : </label>
		    <input required type="Number" class="" style="width: 100px" name="DB">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Sketch Book &nbsp : </label>
		    <input required type="Number" class="" style="width: 100px" name="SB">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Writing Book &nbsp: </label>
		    <input required type="Number" class="" style="width: 100px" name="WB">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Journal Book : </label>
		    <input required type="Number" class="" style="width: 100px" name="JB">
		  </div></center>
		  <center><button type="submit" class="btn btn-primary" style="font-family: 'Ranga', cursive; margin-top: 15px;">Submit</button></center>	
		</form></div>
	</div></center>
	<div class="container-fluid">
		<p style="color:ghostwhite">&#169; 2018 by PAPER COMPANY.</p>
	</div>
	<style type="text/css">
		body {
			background-image: url('<?php echo base_url() ?>assets/img/background6.jpg');
			background-size: cover;
			background-position: center;
		}
		#menuu {
			background-color: ghostwhite;
			height: 50px;
			margin-top: 20px;
			opacity: 0.9;
		}
		.navLink {
			font-family: 'Lobster', cursive;
			font-size: 20px;
			color: black
		}
		#mainMenu {
			height: 560px;
			width: 1100px;
			background: rgba(255, 255, 255, 0.8);
		}
	</style>
</body>
</html>