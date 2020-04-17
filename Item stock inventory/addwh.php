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
    
    <h1>INSERT DATA</h1>
    <form action="addwhfunc.php" method="POST">


      <input type="number" name="item_code" placeholder="item_code"/><br/>
      <input type="text" name="location_id" placeholder="Location ID"/><br/>

      <input type="text" name="location_name"  placeholder="Location Name "/><br/>
		 <input type="text" name="city" placeholder="city"/><br/>
      <input type="text" list="zo" name="zone" placeholder="Zone"/><br/>
  </datalist></br/>
      <input type="text" name="aisle" placeholder=" Aisle "/><br/>
      <input type="text" name="bay" placeholder="Bay"/><br/>
      <input type="text" name="level" placeholder="Level"/><br/>
     
	  <input list="browsers"name="bin"  placeholder="Bin">
  <datalist id="browsers">
    <option value="1">
    <option value="2">
    
  </datalist></br/>
      <input  name="types_of_zone" list="toz" placeholder="Types of zone ">
	<datalist id="toz">
    <option value="bulk">
    <option value="pick">
    
 </datalist></br/>
    
    <input type="submit" name="update" value="insert" >
           

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
