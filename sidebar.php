<?php include_once('styles.php'); ?>

  <!-- sidebar js and css -->

  <!-- sidebar start -->
  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
       <div class="pull-left info">
        
       </div>
    </div>
  
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
   <?php 

   //$user = $_SESSION['user_email'];
   $user = "warehouse";
    ?>
    <section>
      <h1>
        <?php //echo $user ?>
      </h1>
    </section>
    <?php
    if($user == "admin@admin.com" or $user == "owner"){
   ?>
    <li class="active">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-heart"></i>
        <span>Patient</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#showpatient"><i class="fa fa-circle-o"></i>All Patient</a></li>
        <li><a href="#addpatient"><i class="fa fa-circle-o"></i>Add New Patient</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-user-md"></i>
        <span>Doctor</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#showdoctor"><i class="fa fa-circle-o"></i>List of Doctor</a></li>
        <li><a href="#adddoctor"><i class="fa fa-circle-o"></i>Add New Doctor</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Employee</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#listemployee"><i class="fa fa-circle-o"></i>Employee List</a></li>
        <li><a href="#addemployee"><i class="fa fa-circle-o"></i>Add New Employee</a></li>
      </ul>
    </li>
    <?php }
     if($user == "cashier" or $user == "owner"){ ?>
     <li><a href="#paymentpatient"><i class="fa fa-credit-card"></i>Payment Patient</a></li>
    <?php }
    if($user == "warehouse" or $user == "owner"){ ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-medkit"></i>
        <span>Item</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#listitem"><i class="fa fa-circle-o"></i>All Item</a></li>
        <li><a href="#solditem"><i class="fa fa-circle-o"></i>Sold Item</a></li>
        <li><a href="#purchaseditem"><i class="fa fa-circle-o"></i>Purchased Item</a></li>
        <li><a href="#additem"><i class="fa fa-circle-o"></i>Add New Item</a></li>
        <li><a href="#historyrequestitem"><i class="fa fa-circle-o"></i>History Request Item</a></li>
      </ul>
    </li>
     <li class="treeview">
      <a href="#">
        <i class="fa fa-truck"></i>
        <span>Supplier</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#listsupplier"><i class="fa fa-circle-o"></i>List of Supplier</a></li>
        <li><a href="#addsupplier"><i class="fa fa-circle-o"></i>Add New Supplier</a></li>
      </ul>
    </li>
     <li class="treeview">
      <a href="#">
        <i class="fa fa-chain"></i>
        <span>Consignment</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#incomingitemcons"><i class="fa fa-circle-o"></i>Incoming Item</a></li>
        <li><a href="#outcomingitemcons"><i class="fa fa-circle-o"></i>Outcoming Item</a></li>
      </ul>
    </li>
    <li>
      <a href="#floorstock">
        <i class="fa fa-sitemap"></i> <span> Floor Stock</span>
      </a>
    </li>
    <?php }
    if($user == "admin" or $user == "owner"){
      ?>
    <li>
      <a href="#cp">
        <i class="fa fa-key"></i> <span>Control Panel</span> 
      </a>
    </li>
    <li>
      <a href="#help">
        <i class="fa fa-tag"></i> <span>Help</span> 
      </a>
    </li>
    <?php }?>
    </ul>
  </section>
  <!-- /.sidebar -->
  </aside>

  <!-- sidebar end -->