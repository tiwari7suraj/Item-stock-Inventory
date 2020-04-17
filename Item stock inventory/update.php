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
				<li><a href="about.php">About us</a></li>				<li><a href="logout.php">Log Out</a></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
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
    
    <h1>Update DATA</h1>
    <form action="" method="POST">
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
	
    
    <input type="submit" name="update" value="UPDATE">

<style>
         .button {
         background-color: #708090;
         border: none;
         color: white;
         padding: 20px 40px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 15px;
         margin: 8px 5px;
         cursor: pointer;
         }

      </style>
   </head>
   <body>
      <a href="Display.php" class="button">Display</a>
           
          
    </form>
  </center>

</body>
</html>

<?php
        

	$conn = mysqli_connect('localhost', 'root', '', 'testdb') or die('Error ' . mysqli_error($con));
	
	if(isset($_POST['update'])) {
	$item_code = $_POST['item_code'];
		$name =  $_POST['item_name'];
	$unit =  $_POST['unit'];
	$b_in =  $_POST['beginning_inventory'];
	$i_price =  $_POST['item_price'];
	$q_onhand =  $_POST['quantity_on_hand'];
	$manufacture_date =  $_POST['manufacture_date'];
	$expiry_date =  $_POST['expiry_date'];
	$item_location = $_POST['item_location'];
	$item_category = $_POST['item_category'];
	$i_s_c = "heyy";
		$sql = "select item_name from stock where item_code = '$item_code' ";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
		if($resCheck > 0) 
			{	 $sqls = "update stock set item_name='".$name."',unit='".$unit."',beginning_inventory=".$b_in.",quantity_on_hand=".$q_onhand.",price_per_unit=".$i_price."
							,date_of_manufacture='".$manufacture_date."',date_of_expiry='".$expiry_date."',location='".$item_location."',item_category='".$item_category."'
							
							 where item_code=".$item_code."";
				if(mysqli_query($con,$sqls)) 
        { 
			echo "<script>alert('done')
			window.location.href='display.php'</script>";
		} 
		else 
		{
			
			echo "<script>alert('error')
			window.location.href='add.php'
			</script>";
		}
	
}
else

 {echo 'not working';
 }
}
?>