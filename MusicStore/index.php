

<head>

	<?php include('php/assets/connect.php'); //connect to the database ?>

	<?php include('php/assets/cart_class.php'); //initialise cart ?>

	<?php include('php/assets/session.php'); //initialise session ?>

	<!-- HEADER -->
    <title>MusicStore</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/home.css" rel="stylesheet">

	<link href="favicon.png" rel="shortcut icon" type="image/x-icon" />

</head>

<!-- MENUS -->
<?php include('php/assets/header_menu.php'); ?>

<?php 
//session_destroy ();


?>

<div class="container">
	<div class="row">
		<!-- CATEGORIES -->
		<?php include('php/assets/side_navbar.php'); ?>

		<!-- CONTENT -->
		<?php function load_page($page, $default_redirect) {
				global $db;
				if(isset($page)) {
					$filepath = 'php/pages/'.$page.'/';
					$filename = $filepath.$page.'.php';
					if(file_exists($filename)) {
						include($filename);
					} else {
						include($default);
					}
				} else {
					include($default);
				}
			}
			
		if(!isset($_GET["page"])) $_GET["page"] = 'home';
		load_page($_GET["page"], 'php/pages/home/home.php'); 
		?>
		
	</div>
</div>
<?php include('php/assets/footer.php');?>
