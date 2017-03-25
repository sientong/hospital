<?php
include_once('main.php');
include_once('styles.php');

if(isset($_GET['show_patient']))
{
  $id = $_POST['id_patient'];
?>
<div class='content-wrapper'>
	<section class='content-header'>
		<h1>
			Patient Payment - <?php echo $id ?>
		</h1> 
    <br>
    <p align="left" >
      <font size="4">
      No. Regis -- 123456 &emsp;
      No. Bukti -- 654321
      </font>
    </p>
	</section>
	<section classs='content'>
    <div class="col-xs-12">
          <div class="box">
          <div class="box-body">                  
          <table class="table table-hover" id="list_tr">
          <thead>
          <tr>
            <th>#</th>
            <th>Kode</th>
            <th>Pengeluaran</th>
            <th>Kategori Pengeluaran</th>
            <th>Tanggal</th>
            <th>Sub Total</th>
          </tr>
          </thead>
          <tbody>
            <tr>
            <td>1</td>
            <td>21001</td>
            <td>Alloris Tablet</td>
            <td>Obat alkes</td>
            <td>21/3/2017</td>
            <td>5000</td>
            </tr>
            <tr>
            <td>2</td>
            <td>21021</td>
            <td>PSIDII 500 mg Caps</td>
            <td>Obat alkes</td>
            <td>21/3/2017</td>
            <td>15000</td>
            </tr>
            <tr>
            <td>3</td>
            <td>24321</td>
            <td>Spuit 3 cc Terumo</td>
            <td>Obat alkes</td>
            <td>21/3/2017</td>
            <td>5000</td>
            </tr>
            <tr>
            <td>4</td>
            <td>21534</td>
            <td>Surflo DM</td>
            <td>Obat alkes</td>
            <td>21/3/2017</td>
            <td>40000</td>
            </tr>
            <tr>
            <td>5</td>
            <td>29190</td>
            <td>Santagesik Injeksi</td>
            <td>Obat alkes</td>
            <td>21/3/2017</td>
            <td>10000</td>
            </tr>
            <tr>
            <td>6</td>
            <td>-</td>
            <td>Pemeriksaan gigi</td>
            <td>Biaya Pemeriksaan</td>
            <td>21/3/2017</td>
            <td>20000</td>
          </tbody>
          <tfoot>
            <th>Total<th><th><th></th></th></th></th>
            <th>95000</th>
          </tfoot>
          </table>
          </div><!-- /.box-body -->
        </div><!-- /.box -->

        <form action="." method="POST" id="patient_payment_form">
          <div class='box box-body'>
            <div class="box-footer col-sm-0">
              <button class="btn btn-default" type="submit" style=""><i class="fa fa-edit"></i><br>Change</button>
              <button class="btn btn-default" type="sub"><i class="fa fa-trash"></i><br>Delete</button>
            </div>  
          </div>
        </form>
    </div>
  </section>

<?php
}
else{
?>

<div class='content-wrapper'>
	<section class='content-header'>
		<h1>
			Patient Payment
		</h1>
	</section>

	<section classs='content'>
		<br><br><br>

		<form action="." method="POST" id="patient_payment_form">
		<div class='box box-body'>
		<div class='form-group'>
			<label for="user_name_input" class="col-sm-1 control-label">Name </label>
			<div class="col-sm-10">
				<input placeholder="Put your patient name here" id = "id_patient" class="form-control" type="text">
			</div>
		</div>
		<div class="box-footer col-sm-2">
			<button class="btn btn-default" type="submit"><i class="fa fa-plus-square"></i>&ensp;submit</button>
		</div>	
		</div>
		</form>
 </section>
</div>
<?php } ?>

<script>
  $(function(){
    $("#list_tr").DataTable();
  });
</script>