<?php
include_once('styles.php');

if(isset($_GET['new_item']))
{
?>
	<div class="content-wrapper" style="min-height: 1096px;">
	<section class="content-header">
	 <h1>
	 	Add New Item
	 </h1>
	</section>
	<br>
	<section>
	 <div class="box box-primary">
	  <form action="." id="new_item_form" autocomplete="off" class="form-horizontal">
	  	<div class="box-body">

	  		<div class="form-group">
	  			<label for="item_id_input" class="col-sm-2 control-label">ID Item</label>
	  			<div class="col-sm-10">
	  			 <input id="item_id_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="item_name_input" class="col-sm-2 control-label">Name</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Put item name here" id="item_name_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="item_buyprice_input" class="col-sm-2 control-label">Buy Price</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Item buy price" id="item_buyprice_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="item_sellprice_input" class="col-sm-2 control-label">Sell Price</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Item sell price" id="item_sellprice_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="item_profit_input" class="col-sm-2 control-label">Profit</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Profit item" id="item_profit_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="item_qty_input" class="col-sm-2 control-label">Qty</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Quantity item" id="item_qty_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">            
        	<label for="item_status_input" class="col-sm-2 control-label">Status </label>
        	 <div class="col-sm-2">
          	  <select id="status" class="form-control" name="status">
          	   <option></option>
               <option value="1">Available</option>
               <option value="0">Not-Available</option>         
          	  </select>
        	 </div>
      		</div>

	  	<div class="box-footer col-sm-offset-2">
		 <a class="btn btn-app" type="submit">
	  	  <i class="fa fa-save"> </i> Save
	  	 </a>
		</div>
		
	  </form>	
	 </div>
	</section>
</div>
<?php
}
else if(isset($_GET['sold_item']))
{
?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
			 Sold Item
			 <small> all outcoming items </small>
			</h1>
		</section>

		<section class="content">
		 <div class="row">
		  <div class="col-xs-12">
		   <div class="box">
		    <div class="box-body">
		     <table class="table table-bordered table-hover" id="list_outcoming_item">
		      <thead>
		       <tr>
		       	<th>#</th>
		       	<th>Transaction ID</th>
		       	<th>Date Out</th>
		       	<th>Item ID</th>
		       	<th>Name</th>
		       	<th>Qty</th>
		       	<th>Price/Item</th>
		       	<th>Sub Total</th>
		       	<th>Edit</th>
		       	<th>Delete</th>
		       </tr>
		      </thead>
		      <tbody>
		       <tr>
		        <td>1</td>
		        <td>TR19032017001</td>
		        <td>19 Maret 2017</td>
		        <td>OK245</td>
		        <td>Pethidin</td>
		        <td>30</td>
		        <td>30000</td>
		        <td>900000</td>
		        <td> <a href="#list_outcoming_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
				<td><a href="#list_outcoming_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		       </tr>
		       <tr>
		        <td>2</td>
		        <td>TR19012017002</td>
		        <td>19 Januari 2017</td>
		        <td>KM901</td>
		        <td>Parasetamol</td>
		        <td>20</td>
		        <td>12000</td>
		        <td>240000</td>
		        <td> <a href="#list_outcoming_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
				<td><a href="#list_outcoming_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		       </tr>
		      </tbody>
		      <tfoot>
		       <tr>
		       	<th>#</th>
		       	<th>Transaction ID</th>
		       	<th>Date Out</th>
		       	<th>Item ID</th>
		       	<th>Name</th>
		       	<th>Qty</th>
		       	<th>Price/Item</th>
		       	<th>Sub Total</th>
		       	<th>Edit</th>
		       	<th>Delete</th>
		       </tr>
		      </tfoot>
		     </table>
		   </div>
		  </div>
		 </div>	
		</section>
<?php
}
else if(isset($_GET['purchased_item']))
{
?>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
			 Purchased Item
			 <small> all incoming items </small>
			</h1>
		</section>

		<section class="content">
		 <div class="row">
		  <div class="col-xs-12">
		   <div class="box">
		    <div class="box-body">
		     <table class="table table-bordered table-hover" id="list_incoming_item">
		      <thead>
		       <tr>
		       	<th>#</th>
		       	<th>Transaction ID</th>
		       	<th>Date In</th>
		       	<th>Item ID</th>
		       	<th>Name</th>
		       	<th>Qty</th>
		       	<th>Price/Item</th>
		       	<th>Sub Total</th>
		       	<th>Edit</th>
		       	<th>Delete</th>
		       </tr>
		      </thead>
		      <tbody>
		       <tr>
		        <td>1</td>
		        <td>TR19032017001</td>
		        <td>19 Maret 2017</td>
		        <td>OK245</td>
		        <td>Pethidin</td>
		        <td>30</td>
		        <td>30000</td>
		        <td>900000</td>
		        <td> <a href="#list_incoming_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
				<td><a href="#list_incoming_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		       </tr>
		       <tr>
		        <td>2</td>
		        <td>TR19012017002</td>
		        <td>19 Januari 2017</td>
		        <td>KM901</td>
		        <td>Parasetamol</td>
		        <td>20</td>
		        <td>12000</td>
		        <td>240000</td>
		        <td> <a href="#list_incoming_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
				<td><a href="#list_incoming_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		       </tr>
		      </tbody>
		      <tfoot>
		       <tr>
		       	<th>#</th>
		       	<th>Transaction ID</th>
		       	<th>Date In</th>
		       	<th>Item ID</th>
		       	<th>Name</th>
		       	<th>Qty</th>
		       	<th>Price/Item</th>
		       	<th>Sub Total</th>
		       	<th>Edit</th>
		       	<th>Delete</th>
		       </tr>
		      </tfoot>
		     </table>
		   </div>
		  </div>
		 </div>	
		</section>
<?php
}
else
{
?>
	<div class="content-wrapper" >
		<section class="content-header">
			<h1>
				List of Item
			</h1>
		</section>

		<section class="content">
		  <div class="row">
		    <div class="col-xs-12">
		      <div class="box">
				<div class="box-body">                  
					<table class="table table-bordered table-hover" id="list_item">
					<thead>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Name</th>              
							<th>Buy Price</th>              
							<th>Sell Price</th>
							<th>Profit</th>
							<th>Qty</th>
							<th>Status</th>
							<th>Edit</th>					
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>KM901</td>
							<td>Parasetamol</td>
							<td>12000</td>
							<td>15000</td>
							<td>3000</td>
							<td>20</td>
							<td>Available</td>
							<td> <a href="#list_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>OK245</td>
							<td>Pethidin</td>
							<td>30000</td>
							<td>35000</td>
							<td>5000</td>
							<td>0</td>
							<td>Not Available</td>
							<td> <a href="#list_item" class="edit_item" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_item" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Name</th>              
							<th>Buy Price</th>              
							<th>Sell Price</th>
							<th>Profit</th>
							<th>Qty</th>
							<th>Status</th>
							<th>Edit</th>					
							<th>Delete</th>
						</tr>
					</tfoot>
					</table>
		        </div><!-- /.box-body -->
		      </div><!-- /.box -->
		    </div>
		  </div>
		</section>
	</div>
<?php
}
?>

<script>
	$(function(){
		$("#list_item").DataTable();
		$("#list_incoming_item").DataTable();
		$("#list_outcoming_item").DataTable();
	});
</script>