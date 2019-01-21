<?php
	ob_start();
	session_start();
	require_once '../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$conn = mysqli_connect('localhost','root','','ccsapplicationdb');
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
?>
<?php

$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

if(isset($_FILES['image']))
{
	$img = $_FILES['image']['name'];
	$tmp = $_FILES['image']['tmp_name'];
		
	// get uploaded file's extension
	$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
	
	// can upload same image using rand function
	$final_image = rand(1000,1000000).$img;
	
	// check's valid format
	if(in_array($ext, $valid_extensions)) 
	{					
		$path = $path.strtolower($final_image);	
		$conn = mysqli_connect('localhost','root','','ccsapplicationdb');
			
		if(move_uploaded_file($tmp,$path)) 
		{

			$check = "SELECT * FROM passport_tbl WHERE AppNumber='$userRow[userName]'";
			$recheck = mysqli_query($conn,$check);
            if (mysqli_num_rows($recheck) == 1){
				$query3 = "UPDATE passport_tbl SET Passport='$path' WHERE AppNumber='$userRow[userName]'";
			$res3 = mysqli_query($conn,$query3);

			}
			
			else
			{
			$query3 = "INSERT INTO passport_tbl(AppNumber,Passport) VALUES('$userRow[userName]','$path')";
			$res3 = mysqli_query($conn,$query3);

			}
			$query2 = "UPDATE submit_tbl SET Passport = '1' WHERE AppNumber='$userRow[userName]'";
			$res2 = mysqli_query($conn,$query2);

			echo "<img src='$path' />";
		}
	} 
	else 
	{
		echo 'invalid';
	}
}


?>
<?php ob_end_flush(); ?>