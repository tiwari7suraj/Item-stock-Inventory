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

<li><a href="index.php">Home</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="about.php">About us</a></li>
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
table {
border-collapse: collapse;
width: 100%;
color: #000000;
font-family: ;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<ul>
<table>
<tr>
<th>Item code</th>
<th>Item name</th>
<th>unit</th>
<th>beginning inventory</th>
<th>quantity on hand</th>
<th>item price </th>
<th>manufacture date</th>
<th>expiry date</th>
<th>item location</th>
<th>item category </th>
<th>item Sub category </th>
</tr>


	  <style>
         .but_se {
			 text-align: center;
			padding 5px 10px;
			 font-size: 20px;
			width: 150px;
			border: 1px solid black;
			padding: 5px;
			color:white;
			border-radius: 12px;
			line-height: 2;
			transition-duration: 0.1s;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			background: #708090;
			}
			.but_se:hover{
			 background: white;
			 font-size: 24px;
			 color:black;
			 cursor: pointer;
			}
      </style>
	  <style>
         .search_b {
			border: 2px solid black;
			margin-left: 1200px;
			padding: 5px;
			box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}
      </style>
<body>
<form action="" method="POST">
	 
		 <a href="dis_search.php" type="submit" name="update" class="but_se">Search</a>
		 </br>
</form>



<?php
$conn = mysqli_connect("localhost", "root", "", "testdb");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT * FROM STOCK";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["item_code"]."</td> 
<td>" . $row["item_name"]."</td>
<td>" . $row["unit"]."</td>
<td>" . $row["beginning_inventory"]."</td>
<td>" . $row["quantity_on_hand"]."</td>
<td>" . $row["price_per_unit"]."</td>
<td>" . $row["date_of_manufacture"]."</td>
<td>" . $row["date_of_expiry"]."</td>
<td>" . $row["location"]."</td>
<td>" . $row["item_category"]."</td>
<td>" . $row["item_sub_category"]."</td>

</tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();
?>
<ul>
<style>
         .button {
         background-color: #708090;
         border: none;
         color: white;
         padding:15px 20px;
         text-align: center;
         text-decoration: none;
		 
         display: inline-block; 
         font-size: 20px;
         margin: 8px 5px;
		 transition-duration: 0.1s;
		 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
         cursor: pointer;
         }
		  .button:hover {
         background-color: white;
         border: none;
         color: black;
         padding:15px 20px;
         text-align: center;
         text-decoration: none;
         display: inline-block; 
         font-size: 20px;
		 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
         margin: 8px 5px;
         cursor: pointer;
         }
      </style>
		<a href="add.php" class="button">Add  </a>
		<a href="Update.php" class="button">Update</a>
		<a href="delete.php" class="button">Delete  </a>
		<a href="addwh.php" class="button">ADD ITEM TO WAREHOUSE</a>
		<a href="delwh.php" class="button">DELETE FROM WAREHOUSE</a>
</ul>
</body>
</html>

