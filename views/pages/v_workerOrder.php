	<center><div class="container" id="mainMenu">
		<h1 style="color:black">Order List</h1><br>
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>Item</th>
		        <th>Amount</th>
		        <th>Date</th>
		        <th>Status</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		  	<tbody>
		        <?php
		        foreach($order->result_array() as $data_tabel):
		        	$id=$data_tabel['id'];
		            $name=$data_tabel['Name'];
		            $amount=$data_tabel['Amount'];
		            $date=$data_tabel['Date'];
		            $status=$data_tabel['Status'];
		        ?>
		        <tr>
		            <td><?php echo $id;?> </td>
		            <td><?php echo $name;?> </td>
		            <td><?php echo $amount;?> </td>
		            <td><?php echo $date;?> </td>
		            <td><?php echo $status;?> </td>
		            <td><a href="<?php echo base_url() ?>index.php/workerHome/cancelOrder?user=<?php echo $id; ?>"><button class="btn btn-primary">Cancel</button></a></td>
		        </tr>
		        <?php endforeach;?>
		    </tbody>
		  </table>
	</div></center>
	<div class="container-fluid">
		<p style="color:ghostwhite">&#169; 2018 by PAPER COMPANY.</p>
	</div>
	<script type="text/javascript">
		function myFunction() {
		    if (confirm("Are you sure want to cancel this order?")) {
		        alert("Order Canceled");
		    } else {
		        
		    }
		}
	</script>
	<style type="text/css">
		body {
			background-image: url('<?php echo base_url() ?>assets/img/Order.jpg');
			background-size: cover;

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
			opacity: ;
		}
	</style>
</body>
</html>