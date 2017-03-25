<?php include_once('main.php'); ?>

<!DOCTYPE html>

<html>

<head>

	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<noscript><meta http-equiv="refresh" content="0; url=error.php?error_code=2"></noscript>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-cookies.js" type="text/javascript"></script>
	<script src="js/jquery-base64.js" type="text/javascript"></script>
	<?php include('js/header-js.php'); ?>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="img/favicon.ico">

	<title><?php echo global_title . ' - ' . global_organization; ?></title>

</head>

<body class="hold-transition fixed sidebar-mini">

	<div id="notification_div"><div id="notification_inner_div"><div id="notification_inner_cell_div"></div></div></div>

	<div id="header_div"><?php include('header.php'); ?></div>
	<?php 
	// if(isset($_SESSION['logged_in'])) 
		include('sidebar.php'); ?>

	<div id="content_div"></div>

	<div id="preload_div">
	<img src="img/loading.gif" alt="Loading">
	</div>

</body>

</html>
