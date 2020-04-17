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



<style>
         .button {
         background-color: #708090;
         border: none;
         color: white;
         padding:30px 30px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 25px;
         margin: 8px 5px;
         cursor: pointer;
         }
      </style>
   </head>
   <body>
      <a href="add.php" class="button">Add </a>


<style>
         .button {
         background-color: #708090;
         border: none;
         color: white;
         padding: 60px 60px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 25px;
         margin: 8px 5px;
         cursor: pointer;
         }
      </style>
   </head>
   <body>
      <a href="Update.php" class="button">Update  </a>

<style>
         .button {
         background-color: #708090;
         border: none;
         color: white;
         padding: 60px 60px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 25px;
         margin: 8px 5px;
         cursor: pointer;
         }
      </style>
   </head>
   <body>
      <a href="delete.php" class="button">Delete </a>
</body>
</html>

