<?php
session_start();


$con = mysqli_connect('localhost', 'root', '', 'testdb') or die('Error ' . mysqli_error($con));


if (isset($_POST['update'])) {
	$code =  $_POST['item_code'];
	$name =  $_POST['item_name'];
	$unit =  $_POST['unit'];
	$b_in =  $_POST['beginning_inventory'];
	$i_price =  $_POST['item_price'];
	$q_onhand =  $_POST['quantity_on_hand'];
	$manufacture_date =  $_POST['manufacture_date'];
	$expiry_date =  $_POST['expiry_date'];
	$item_location = $_POST['item_location'];
	$item_category = $_POST['item_category'];
	$i_s_c = 'hello';
	
	$sqls="INSERT INTO stock VALUES(".$code.",'".$name."','".$unit."',".$b_in.",".$q_onhand.",".$i_price.",'".$manufacture_date."','".$expiry_date."','".$item_location."','".$item_category."','".$i_s_c."')";
 
		if(mysqli_query($con,$sqls)) 
        { 
			echo "<script>alert('done')
			window.location.href='display.php';
			</script>";
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
?>