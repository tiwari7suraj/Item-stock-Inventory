<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | My Pharmacy</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
 <body style='background-color:#DCDCDC'>
<style>
body {
  background-image: url('abcd.jpg');
}
</style>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">My Pharmacy</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>

				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>



<ul>
<h1>About us</h1>
<div id="content">
<font size="4" >
<ul>
<p>It was founded by Dr BABU RAO GANPATH RAO APTE in 1983 as the first corporate health care in India. The first branch at Chennai was inaugurated by President of India Narendra modi .</p>

        <p>MY Pharmacy is a part of My Hospitals - Asia's largest healthcare group. It is India's first and largest branded pharmacy network, with over 3000 plus outlets in key Locations. ... My Pharmacy is well stocked with medicines OTC and FMCG products, manned by competent staff with computerized system.
</p>
<p>Apollopharmacy.in has more than 5000 products in various categories like Vitamins and supplements, Baby care, Personal care, Health foods and OTC. In addition to this we have more than 400 Apollo Brand Products in the following categories like vitamins and supplements, health food,
Oral care, skin care, personal care, baby care, OTC etc</p>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: MY PHARMACY 
   
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>

