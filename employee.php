<?php

include_once('styles.php');
if(isset($_GET['new_employee']))
{
?>
	<div class="content-wrapper" style="min-height: 1096px">
	<section class="content-header">
			<h1>
				Add New Employee
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
	  			<label for="employee_id_input" class=" control-label">ID</label>
	  			<div class="">
	  				<input placeholder="Put your employee id here" id=employee_id_input class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="employee_email_input" class="control-label">Email</label>
	  			<div class="" style="">
	  				<input placeholder="Put your employee email here" id="employee_email_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">            
        	<label for="employee_division" class="control-label">Division </label>
        	 <div class="" style="width: 25%">
          	  <select id="division" class="form-control" name="division">
          	   <option></option>
               <option value="gudang">Gudang</option>
               <option value="kasir">Kasir</option>   
               <option value="apotik">Apotik</option>
               <option value="admin">Admin</option>      
          	  </select>
        	 </div>
      		</div>

      		<div class="form-group">
	  			<label for="employee_salary_input" class=" control-label">Salary</label>
	  			<div class="">
	  				<input placeholder="salary" id="employee_salary_input" class="form-control" type="text">
	  			</div>
	  		</div>
	  	 </td>

	  	 <td>
	  	 	<div class="form-group">
	  			<label for="employee_name_input" class="control-label">Name</label>
	  			<div class="" >
	  				<input placeholder="Put your employee name here" id="employee_name_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="employee_password_input" class="control-label">Password</label>
	  			<div class="">
	  				<input placeholder="Default password" id="employee_password_input" class="form-control" type="text">
	  			</div>
	  		</div>

	  		<div class="form-group">
	  			<label for="employee_repassword_input" class="control-label">Confirm Password</label>
	  			<div class="">
	  				<input placeholder="Retype password" id="employee_password_input" class="form-control" type="text">
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
	<div class="content-wrapper" >
		<section class="content-header">
			<h1>
				List of Employee
				<small>including Admin</small>
			</h1>
		</section>

		<section class="content">
		  <div class="row">
		    <div class="col-xs-12">
		      <div class="box">
				<div class="box-body">                  
					<table class="table table-bordered table-hover" id="list_employee">
					<thead>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Name</th>              
							<th>Division</th>              
							<th>Salary</th>		
							<th>Edit</th>			
							<th>Delete</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Inv009</td>
							<td>Lukimanto</td>
							<td>Gudang</td>
							<td>400000</td>
							<td><a href="#list_employee" class="edit_employee" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_employee" class="delete_employee" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Cs1001</td>
							<td>Cyntha</td>
							<td>Kasir</td>
							<td>450000</td>
							<td><a href="#list_employee" class="edit_employee" id=""><span class="label label-primary">Edit</span></a></td>
							<td><a href="#list_employee" class="delete_employee" id=""><span class="label label-danger">Delete</span></a></td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th>#</th>
							<th>ID</th>
							<th>Name</th>              
							<th>Division</th>              
							<th>Salary</th>
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
		$('#list_employee').DataTable();
	});
</script>