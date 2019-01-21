<?php
	ob_start();
	session_start();
	require_once '../dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: ../index.php");
		exit;
	}

	// select loggedin users detail
	$conn = mysqli_connect('localhost','root','','ccsapplicationdb');
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);

	$app=mysqli_query($conn,"SELECT * FROM submit_tbl WHERE AppNumber='$userRow[userName]' and Submit='1'");
	if (mysqli_num_rows($app) > 0){header("Location: ../complete.php");
	exit;}

	$ress=mysqli_query($conn,"SELECT * FROM passport_tbl WHERE AppNumber='$userRow[userName]'");
	$userRows=mysqli_fetch_array($ress);
?>
<!doctype html>
<html>
<head lang="en">
	<meta charset="utf-8">
<title>Welcome - <?php echo $userRow['userName']; ?></title>
    <link rel="stylesheet" href="style.css" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
<div class="container">
    	<h3>Center for Continuous Studies (Part-Time) 2018/2019 Application - PASSPORT UPLOAD</h3>
	<hr>	
	<div id="preview"><img src="<?php if ($userRows['Passport'] <> "") {echo $userRows['Passport'];} else {echo "no-image.jpg";} ?>" /></div>
    
	<form id="form" action="ajaxupload.php" method="post" enctype="multipart/form-data">
		<input id="uploadImage" type="file" accept="image/*" name="image" />
		<input id="button" type="submit" value="Upload">
	</form>
	<form id="form" action="../home.php" method="post" enctype="multipart/form-data">
	  <input id="button" type="submit" value="Back to Profile">
	</form>
    <div id="err"></div>
	<hr>
	<p><a href="#" target="_blank">Center for Continuous Studies</a></p>
</div>
    
</body>
</html>
<?php ob_end_flush(); ?>