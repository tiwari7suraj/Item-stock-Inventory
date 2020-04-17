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

				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="about.php">About us</a></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>

				<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="about.php">About us</a></li>				
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
<style>
body {
  background-image: url('abcd.jpg');
}
    body{
    bodyground-color: whitesmoke;
    background-image: url(abcd.jpg);
  }
  input{
    width: 40%;
    height: 5%;
    border: 1px;
    border-radius: 05px;
    padding: 8px 15px 8px 15px;
    margin: 10px 0px 15px 0px;
    box-shadow: 1px 1px 2px 1px grey;
  }
  </style>
<center>
    
    <h1>INSERT DATA</h1>
    <form action="insert.php" method="POST">
      <input type="number" name="item_code" placeholder="enter item code"/><br/>
      <input type="text" name="item_name" placeholder="enter item name"/><br/>
      <input type="text" name="unit"  placeholder="enter unit"/><br/>
      <input type="number" name="beginning_inventory" placeholder="enter beginning inventory"/><br/>
      <input type="number" name="quantity_on_hand" placeholder="enter quantity on hand"/><br/>
      <input type="number" name="item_price" placeholder=" enter item price "/><br/>
      <input type="date" name="manufacture_date" placeholder="enter manufacture date"/><br/>
      <input type="date" name="expiry_date" placeholder="enter expiry date"/><br/>
      <input type="text" name="item_location" placeholder="item location"/><br/>
      <input type="text" name="item_category" placeholder="enter item category "/><br/>

    
    <input type="submit" onclick="alert('adding....')"  name="update" value="insert">
           

<style>
          .button
		 {
			font-size: 18px;
			color:white;
			border: 1px solid black;
			padding: 10px 15px;
			border-radius: 10px;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			background: #708090 ;
		}
			.button:hover
			{
			 background-color: white;
			 font-size: 18px;
			 box-shadow: 0 12px 20px 0 rgba(0,0,0,0.5), 0 17px 50px 0 rgba(0,0,0,0.19);
			 cursor: pointer;
			 color:#708090;
			}

      </style>
   </head>
   <body>
      <a href="Display.php" class="button">Display</a>


           
    </form>
  </center>

</body>

</html>

