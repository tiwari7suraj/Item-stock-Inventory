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
				<li><a href="Register.php">Register</a></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
 <ul>
<font size="4">
<p>
MY PHARMACY is a part of MY Hospitals – Asia's largest healthcare group. It is India's first and largest branded pharmacy network. Accredited with – International Quality Certification, Apollo Pharmacy offers genuine medicines round-the-clock, through their 24-hour Pharmacies.

Quality is the cornerstone of our existence. We have gained experience in pharmacy operations management over a period of few years and are committed to delivering best services in the industry. At Apollo Pharmacy, we believe in adhering to the highest quality standards, while serving our consumers. We assure delivery of only genuine medicines to our customers.

The entire supply chain mechanism is computerized; hence redundancies are managed effectively. The system also discloses expiry dates and batch numbers for medicines. 
</p>
</font>

<font size="4">
<h3> Specialties</h3>
         <li>Life Saving Drugs</li>
	 <li>Vaccines</li>
	 <li>Anti Cancer Drug</li>
	 <li>Surgical & Disposables</li>
	 <li>Baby Care Products</li>
	 <li>Cosmetics and Toiletries</li>
	 <li>All Health Care Products (Glucometer, BP Instrument, Rehabilitation Aids & other healthcare 	necessity)</li>
</font>

<font size="3">
 <h2>SERVICES PROVIDED</h2>
          <li>CHEAP MEDICINE</li>
          <li>FREE HOME DELIVERY</li>
          <li>LARGE VARIETY OF MEDICINE AVAILABLE</li>
          <li>CERTIFIED FROM WHO </li>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: MY PHARMACY 
   
  <!-- Copyright -->

</footer>
<!-- Footer -->

</font>
</body>
</html>

