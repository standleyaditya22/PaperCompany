	<center><div class="container" id="mainMenu">
		<h1 style="color:black">Warehouse Stock</h1>
		<div class="tab" style="float: left; margin-bottom: 25px">
		  <button class="tablinks" onclick="openMenu(event, 'BB')" id="defaultOpen">Bahan Baku</button>
		  <button class="tablinks" onclick="openMenu(event, 'Buku')">Buku</button>
		</div>
		<div id="BB" class="tabcontent">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Item</th>
			        <th>Stock</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php
			        foreach($stocks->result_array() as $data_tabel):
			        	$id=$data_tabel['id'];
			            $name=$data_tabel['name'];
			            $amount=$data_tabel['amount'];
			    	?>
			        <tr>
			            <td><?php echo $id;?> </td>
			            <td><?php echo $name;?> </td>
			            <td><?php echo $amount;?> </td>
			            <td><a href="" data-toggle="modal" data-target="#newOrderModal"><button class="btn btn-success">Order</button></a></td>
			        </tr>
			        <?php endforeach;?>
			    </tbody>
			</table>
		</div>
		<div id="Buku" class="tabcontent">
			<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
				    <th>Item</th>
				    <th>Amount</th>
				    <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
				    <?php
			        foreach($book->result_array() as $data_tabel):
			        	$id=$data_tabel['id'];
			            $name=$data_tabel['name'];
			            $amount=$data_tabel['amount'];
			    	?>
			        <tr>
			            <td><?php echo $id;?> </td>
			            <td><?php echo $name;?> </td>
			            <form action="<?php echo base_url() ?>index.php/workerHome/updateStock?user=<?php echo $id; ?>" method="post">
			            	<td><input required type="number" name="amount" placeholder="<?php echo $amount;?>"></td>
			            	<td><button type="submit" class="btn btn-success">Update Stock</button></td>
			            </form>			            
			        </tr>
			        <?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div></center>
	<div class="container-fluid">
		<p style="color:ghostwhite">&#169; 2018 by PAPER COMPANY.</p>
	</div>
	<script>
	function openMenu(evt, cityName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	</script>
	<div class="modal fade" id="newOrderModal" role="dialog">
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
            <center><input type="number" name="amount" id="amountM" class="form-control validate" placeholder="0"></center>
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
			background-image: url('<?php echo base_url() ?>assets/img/stock.jpg');
			background-size: cover;
		}
		#mainMenu {
			height: 560px;
			width: 1100px;
			background: rgba(255, 255, 255, 0.8);
			opacity: ;
		}
		.tab button {
		    background-color: #ccc;
		    color: black;
		    border: none;
		    cursor: pointer;
		    transition: 0.3s;
		    font-size: 17px;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		    background-color: #ddd;
		}

		/* Create an active/current "tab button" class */
		.tab button.active {
		    background-color: grey;
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