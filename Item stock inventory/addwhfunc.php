<?php
session_start();


$con = mysqli_connect('localhost', 'root', '', 'testdb') or die('Error ' . mysqli_error($con));


if (isset($_POST['update'])) {
	$code =  $_POST['item_code'];
	$name =  $_POST['location_id'];
	$unit =  $_POST['location_name'];
	$b_in =  $_POST['city'];
	$i_price =  $_POST['zone'];
	$q_onhand =  $_POST['aisle'];
	$manufacture_date =  $_POST['bay'];
	$expiry_date =  $_POST['level'];
	$item_location = $_POST['bin'];
	$item_category = $_POST['types_of_zone'];
	
	$sqls="INSERT INTO warehouse VALUES(".$code.",".$name.",'".$unit."','".$b_in."','".$q_onhand."','".$i_price."','".$manufacture_date."','".$expiry_date."',".$item_location.",'".$item_category."')" or die(mysqli_error($db));;
 
		if(mysqli_query($con,$sqls)or die(mysqli_error($con))) 
        { 
			echo "<script>alert('done')
			window.location.href='addwh.php'
			</script>";
		} 
		else 
		{
			echo "<script>alert('error')
			window.location.href='addwh.php'
			</script>";
		}
	
}
else

 {echo'not working';
 }
?>
<!DOCTYPE html>
<html>
alert('added');
</html>