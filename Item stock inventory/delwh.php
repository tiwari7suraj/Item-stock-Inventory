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
    
    <h1>DELETION</h1>
    <form action="" method="POST">
	   <input type="number" name="item_co" placeholder="enter item code"/><br/>

	
    
    <input type="submit" name="update" value="DELETE">
           
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
	  <style>
           .dis_but
		 {
			font-size: 18px;
			color:white;
			border: 1px solid black;
			padding: 10px 15px;
			border-radius: 10px;
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			background: #708090 ;
		}
			.dis_but:hover
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
      <a href="Display.php" class="dis_but">Display</a>       

    </form>
  </center>

</body>
</html>

<?php
        

	$conn = mysqli_connect('localhost', 'root', '', 'testdb') or die('Error ' . mysqli_error($con));
	if(isset($_POST['update'])) {
		$item_code = $_POST['item_co'];
		$sql = "select item_code from warehouse where item_code = ".$item_code."";
		$result = mysqli_query($conn, $sql);
		$resCheck = mysqli_num_rows($result);
		if($resCheck > 0) 
			{	 $sqls = "delete from warehouse where item_code=".$item_code."";
				if(mysqli_query($conn,$sqls)) 
				{
					echo "<script>alert('done')
					window.location.href='delwh.php'
					</script>";
				}
				else{
						echo "<script>alert('error')
						window.location.href='delwh.php'
						</script>";
					}
			}
		else
			{ echo" 0 results";
			}
	
	
	}
   ?>