
<?php 
include_once('styles.php');
if(isset($_GET['new_patient']))
{
	?>

<div class="content-wrapper" style="min-height: 1096px;">
	<section class="content-header">
	 <h1>
	 	Add New Patient
	 </h1>
	</section>
	<br>

	<section>
	 <div class="box">
	  <div class="box-body table-responsive pad">
	   <table class="table table-bordered">
	  	<tr>
	  	 <th></th>
	  	 <th></th>
	  	</tr>

	  	<tr>
	  	 <td>
	  	 	<div class="form-group">
	  			<label for="patient_id_input" class=" control-label">ID Patient</label>
	  			<div class="" style="width: 38%">
	  			 <input id="patient_id_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="patient_name_input" class="control-label">Name</label>
	  			<div class="" style="width: 38%">
	  			 <input placeholder="Put your patient name here" id="patient_name_input" class="form-control" type="text">
	  			</div>
	  		</div>

      		<div class="form-group">            
        	<label for="patient_gender_input" class="control-label">Gender </label>
        	 <div class="">
          	  <select id="gender" class="form-control" name="gender" style="width: 	15%">
          	   <option></option>
               <option value="male">Male</option>
               <option value="femlae">Female</option>         
          	  </select>
        	 </div>
      		</div>

	  	 </td>
	  	 	
	  	 <td>
	  	 	<div class="form-group">            
        	<label for="patient_idcard_input" class=" control-label"">ID Card </label>
        	 <div class="">
          	  <select id="IDCard" class="form-control" name="IDCard" style="width: 	25%">
          	   <option></option>
               <option value="ktp">KTP</option>
               <option value="sim">SIM</option>   
               <option value="passport">Passport</option>      
          	  </select>
        	 </div>
      		</div>

      		<div class="form-group">
	  			<label for="patient_idcard_number_input" class="control-label">No ID Card</label>
	  			<div class="" style="width: 38%">
	  			 <input placeholder="Put ID Card Number here" id="patient_idcard_number_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="datepicker" class=" control-label">Birth Date</label>
	  			<div class="input-group date" style="width: 38%">
				  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
				  </div>
				  <input type="text" class="form-control pull-right" id="datepicker" placeholder="select date here">
				</div>
	  		</div>
	  	 </td>
	  	</tr>

	  	<tr>
	  	  <th>
	  	   <button type="button" class="btn btn-block btn-default" type="submit" style="width: 15%">
	  	   <i class="fa fa-save"></i><br>
	  	   save
	  	   </button>
	  	  </th>
	  	</tr>
	   </table>
	  </div>
	 </div>
	</section>

</div>

<?php
}
else{
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				List of Patient
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
		    <div class="col-xs-12">
		      <div class="box">
		       <div class="box-header">
				<div class="box-body">                  
					<table class="table table-bordered table-striped" id="list_patient">
					<thead>
						<tr>
							<th>#</th>
							<th>ID Patient</th>
							<th>Name</th>              
							<th>Phone Number</th>              
							<th>Gender</th>
							<th>Edit</th>					
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>JW001</td>
							<td>Firdaus Al Fidai</td>
							<td>083830122475</td>
							<td>Male</td>
							<td><a href="#list_patient" class="edit_patient" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_patient" class="delete_patient" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>MDR101</td>
							<td>Ahmad Subaidi</td>
							<td>085648481234</td>
							<td>Male</td>
							<td><a href="#list_patient" class="edit_patient" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_patient" class="delete_patient" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>ID Patient</th>
							<th>Name</th>              
							<th>Phone Number</th>              
							<th>Gender</th>	
							<th>Edit</th>				
							<th>Delete</th>
						</tr>
					</tfoot>
					</table>
		        </div><!-- /.box-body -->
		      </div><!-- /.box -->
		      
		    </div>
		  </div>
		</section><!-- /.content -->
	</div>
<?php	
}
?>

<script >

	//Table script
	$(function(){

		$("#list_patient").DataTable();
	});

	//Date picker script
	$('#datepicker').datepicker({
      autoclose: true
    });

</script>