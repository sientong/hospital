<?php
include_once('styles.php');
if(isset($_GET['new_supplier']))

{
?>
	<div class="content-wrapper" style="min-height: 1096px;">
	<section class="content-header">
	 <h1>
	 	Add New Supplier
	 </h1>
	</section>
	<br>
	<section>
	 <div class="box box-primary">
	  <form action="." id="new_supplier_form" autocomplete="off" class="form-horizontal">
	  	<div class="box-body">

	  		<div class="form-group">
	  			<label for="supplier_id_input" class="col-sm-2 control-label">ID</label>
	  			<div class="col-sm-10">
	  			 <input id="supplier_id_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="supplier_name_input" class="col-sm-2 control-label">Name</label>
	  			<div class="col-sm-10">
	  			 <input placeholder="Put supplier name here" id="supplier_name_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">            
        	<label for="supplier_status_input" class="col-sm-2 control-label">Status </label>
        	 <div class="col-sm-2">
          	  <select id="status" class="form-control" name="status">
          	   <option></option>
               <option value="1">Active</option>
               <option value="0">Not-Active</option>         
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
else
{
?>
  <!-- Tell the browser to be responsive to screen width -->
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         List of Supplier
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Supplier</a></li>
        <li class="active">List of Supplier</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="list_supplier" class="table table-bordered table-striped">
                <thead>
                 <tr>
		       	  <th>#</th>
		       	  <th>ID</th>
		       	  <th>Name</th>
		       	  <th>Status</th>
		       	  <th>Delete</th>
		       	 </tr>
                </thead>
                <tbody>
		       	 <tr>
		          <td>1</td>
		          <td>S01</td>
		          <td>PT Farmasi Jaya</td>
		          <td>Active</td>
				  <td><a href="#list_supplier" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		         </tr>
		         <tr>
		          <td>2</td>
		          <td>S02</td>
		          <td>PT Paramitha</td>
		          <td>Non-Active</td>
				  <td><a href="#list_supplier" class="delete_item" id=""><span class="label label-danger">Delete</span></a></td>
		         </tr>
		        </tbody>
		        <tfoot>
		       	 <tr>
		       	  <th>#</th>
		       	  <th>ID</th>
		       	  <th>Name</th>
		       	  <th>Status</th>
		       	  <th>Delete</th>
		         </tr>
		        </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script>
  $(function () {
    $("#list_supplier").DataTable(); 
  });
</script>
<?php
}
?>