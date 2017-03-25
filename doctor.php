<?php
include_once('styles.php');
if(isset($_GET['new_doctor']))
{
?>
	<div class="content-wrapper" style="min-height: 1096px;">
	<section class="content-header">
		<h1>
		Add New Doctor
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
	  			<label for="doctor_id_input" class=" control-label">Doctor ID</label>
	  			<div class="">
	  			 <input id="doctor_id_input" class="form-control" type="text">
	  			</div>
	  		  </div>

	  		  
	  		  <div class="form-group">
	  			<label for="doctor_address_input" class="control-label">Address</label>
	  			<div class="">
	  			 <input placeholder="Put address here" id="doctor_address_input" class="form-control" type="text">
	  			</div>
	  		  </div>

	  		  <div class="form-group">
	  			<label for="doctor_city_input" class="control-label">City</label>
	  			<div class="">
	  			 <input placeholder="Select city here" id="doctor_city_input" class="form-control" type="text">
	  			</div>
	  		  </div>

	  		  <div class="form-group">
	  			<label for="doctor_phone" class="control-label">Phone Number</label>
	  			<div class="">
	  			 <input placeholder="Put phone number here" id="phone" class="form-control" type="text">
	  			</div>
	  		  </div>

	  		  <div class="form-group">            
        	    <label for="doctor_gender_input" class=" control-label">Gender </label>
        	    <div class="">
          	    <select id="gender" class="form-control" name="gender" style="width: 15%">
          	     <option></option>
                 <option value="male">Male</option>
                 <option value="female">Female</option>         
          	    </select>
        	   </div>
      		  </div>

	  		 </td>

	  		 <td>

	  		 	<div class="form-group">
	  			<label for="doctor_name_input" class="control-label">Name</label>
	  			<div class="" style="width: 38%">
	  			 <input placeholder="Put your doctor name here" id="doctor_name_input" class="form-control" type="text">
	  			</div>
	  		  	</div>

               <div class="form-group">
	  			<label for="doctor_email" class="control-label">Email</label>
	  			<div class="" style="width: 38%">
	  			 <input placeholder="Put your doctor email here" id= "doctor_email" class="form_control" type="text">
	  			</div>
	  		   </div>

	  		   <div class="form-group">
	  			<label for="datepicker" class=" control-label">Work Date</label>
	  			<div class="input-group date" style="width: 38%">
				  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
				  </div>
				  <input type="text" class="form-control pull-right" id="datepicker" placeholder="select date here">
				</div>
	  		  </div>

	  		  <div class="form-group">
	  			<label for="doctor_specialist_input" class=" control-label">Hari Kerja</label>
	  			<div class="">
	  			 <select class="form-control select2" multiple="multiple" data-placeholder="Select a Day" style="width: 25%;">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
	  			</div>
	  		  </div>

	  		  <button type="button" class="btn btn-block btn-default" type="submit" style="width: 15%">
	  	       <i class="fa fa-save"></i><br>
	  	       save
	  	      </button>
	  		 </td>
	  		</tr>
	  	</table>
	  </div>
	 </div>

	</section>
</div>
<?php
}
else
{
?>
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				List of Doctor
			</h1>
		</section>

		<!-- Main content -->
		<section class="content">
		  <div class="row">
		    <div class="col-xs-12">
		      <div class="box">
				<div class="box-body">                  
					<table class="table table-bordered table-hover" id="list_doctor">
					<thead>
						<tr>
							<th>#</th>
							<th>Doctor ID</th>
							<th>Name</th>              
							<th>Specialist</th>
							<th>Phone Number</th>              
							<th>Available On</th>
							<th>Edit</th>					
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>JG201</td>
							<td>Nur Aisha</td>
							<td>Umum</td>
							<td>081290874312</td>
							<td>Senin | Kamis | Jumat</td>
							<td><a href="#list_doctor" class="edit_doctor" id=""><span class="label label-primary">Edit</span></a></td> 
							<td><a href="#list_doctor" class="delete_doctor" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>MK511</td>
							<td>Dinda Safitri</td>
							<td>Jantung</td>
							<td>083876541234</td>
							<td>Selasa | Rabu | Kamis</td>
							<td><a href="#list_doctor" class="edit_doctor" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_doctor" class="delete_doctor" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>Doctor ID</th>
							<th>Name</th>              
							<th>Specialist</th>
							<th>Phone Number</th>              
							<th>Available On</th>
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

<script>

	//Table script
	$(function(){
		$('#list_doctor').DataTable();
	});

	//Multiselect script
	$(".select2").select2();

	//Date picker script
	$('#datepicker').datepicker({
      autoclose: true
    });
</script>
