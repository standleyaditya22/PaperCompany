	<center><div class="container" id="mainMenu">
		<h1 style="color:black">Welcome our beloved worker!</h1>
		<p>this page is made for you only</p>
		<table style="margin-top: 100px; margin-left: 70px">
			<tr>
				<td><a href="" data-toggle="modal" data-target="#newOrderModal"><img  style="margin-right: 50px" src="<?php echo base_url() ?>assets/img/contract.png" width="100px"></a></td>
				<td><a href="<?php echo site_url('workerHome/ReportPage'); ?>"><img  style="margin-right: 50px" src="<?php echo base_url() ?>assets/img/tasks.png" width="100px"></a></td>
				<td><a href="<?php echo site_url('workerHome/StockPage'); ?>"><img  style="margin-right: 50px" src="<?php echo base_url() ?>assets/img/update.png" width="100px"></a></td>
				<td><a onclick="myFunction()" href=""><img  style="margin-right: 50px" src="<?php echo base_url() ?>assets/img/marketing.png" width="100px"></a></td>
			</tr>
			<tr>
				<td><p>Place New Order</p></td>
				<td><p  style="margin-left: 10px">Write Report</p></td>
				<td><p  style="margin-left: 10px">Update Stock</p></td>
				<td><p  style="margin-left: 5px">Send Stock Info</p></td>
			</tr>
		</table>
	</div></center>
	<div class="container-fluid">
		<p style="color:ghostwhite">&#169; 2018 by PAPER COMPANY.</p>
	</div>
	<script type="text/javascript">
		function myFunction() {
		    if (confirm("You want to send Stock Information?")) {
		        alert("Stock Information has been sent");
		    } else {
		        alert("Canceled!");
		    }
		}
	</script>
	<div class="modal fade" id="newOrderModal" role="dialog" style="margin-top: 10%;">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">Place New Order</h4></center>
        </div>
        <div class="modal-body mx-3">
         <form action="<?php echo base_url() ?>index.php/workerHome/inputOrder" method="post">
          <div class="md-form mb-4">
            <center><select name="sel1" class="form-control" id="sel1">
			    <option>Wood</option>
			    <option>Sulfat Acid (L)</option>
			    <option>Glue (Box)</option>
			     <option>Coloring Agent (L)</option>
			 </select></center>
          </div>
          <div class="md-form mb-5">
            <center><input required type="number" name="amount" id="amountM" class="form-control validate" placeholder="0"></center>
          </div>
          <div class="modal-footer">
            <center><button type="submit" class="btn btn-default">Order</button></center>
          </div>
         </form>
        </div>
      </div>
    </div>     
   </div>
   <style type="text/css">
		body {
			background-image: url('<?php echo base_url() ?>assets/img/background3.jpg');
			background-size: cover;
		}
		#mainMenu {
			height: 560px;
			width: 1100px;
			background: rgba(255, 255, 255, 0.8);
			opacity: ;
		}
		#amountM {
	      width: 100px;
	      margin-top: 25px;
	      margin-bottom: 25px;
	    }
	    #sel1 {
	    	width: 200px;
	    	margin-bottom: 25px;
	    }
	</style>
</body>
</html>