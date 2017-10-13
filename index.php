<?php
	require('is_logged.php');
	require_once('blog_connect.php');

	unset($_SESSION['pick_point']);
	unset($_SESSION['dest_point']);
	unset($_SESSION['pref_driv']);

	if(!isset($_GET["username"])) {
		/* ubah dengan login.php */
		// header('location:test.php');
	}
?>

<html> 
<head>
	<title>Ojek Online - Order</title>
	
	<link type="text/css" rel="stylesheet" href="css/reset.css">
	<link type="text/css" rel="stylesheet" href="css/main.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link type="text/css" rel="stylesheet" href="css/style_history.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
	<link rel="stylesheet" type="text/css" href="profile.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">

</head>
<body>
	
	<?php
		include('body_head.php');
	?>

	<div id="main">	

		<div id="nav-1" class="navmain">		
			<?php include('tab_order.php'); ?>
		</div>

		<div id="nav-2" class="navmain">
			<?php include('tab_history.php'); ?>
		</div>

		<div id="nav-3" class="navmain">
			<?php include('tab_profile.php'); ?>
		</div>

	</div>
	<script src="scripts/navChange.js"></script>
	<script src="scripts/hide.js"></script>
</body>
</html> 