<?php
include('main.php');
?>

<!-- Morris charts -->
<link rel="stylesheet" href="plugins/morris/morris.css">
<!-- Morris.js charts -->
<script src="plugins/morris/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
  <div class="callout callout-info">
      You can proceed to <a href="#reserve"><b><u>here</u></b></a> for first hall reservation or you can use <a href="#reserve_second"><b><u>this link</u></b></a> to reserve for second hall. 
  </div>
  <?php if($_SESSION['user_is_admin'] == '1')
  { ?>    
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Revenue Statistic for Hall 1</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="line-chart-1" style="height: 300px;"></div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Revenue Statistic for Hall 2</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body chart-responsive">
        <div class="chart" id="line-chart-2" style="height: 300px;"></div>
      </div>
  </div>
  <?php }?>
  </section>
    <!-- /.content -->
</div><!-- /.content-wrapper -->
<!-- page script -->

<?php if($_SESSION['user_is_admin'] == '1')
  { ?>    
<script>
    $(function() {
    // "use strict";

    // LINE CHART
    var line_chart_1 = new Morris.Line({
      element: 'line-chart-1',
      resize: true,
      data: <?php echo get_statistic(1); ?>,
      xkey: 'date',
      ykeys: ['hall1'],
      labels: ['Hall 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto',
      xLabels: 'month',
      postUnits: ' RM',
      redraw: true
    });

    // window.m = line_chart_1;

    // LINE CHART 2
    var line_chart_2 = new Morris.Line({
      element: 'line-chart-2',
      resize: true,
      data: <?php echo get_statistic(2); ?>,
      xkey: 'date',
      ykeys: ['hall2'],
      labels: ['Hall 2'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto',
      xLabels: 'month',
      postUnits: ' RM',
      redraw: true
    });

    $('#line_chart_1').resize(function () { line_chart_1.redraw(); });
    
  });

</script>
<?php }?>