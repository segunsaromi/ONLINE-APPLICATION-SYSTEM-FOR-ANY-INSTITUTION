<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	$conn = mysqli_connect('localhost','root','','ccsapplicationdb');

	// select loggedin users detail
	$conn = mysqli_connect('localhost','root','','ccsapplicationdb');
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);

	$app=mysqli_query($conn,"SELECT * FROM submit_tbl WHERE AppNumber='$userRow[userName]' and Submit='1'");
	if (mysqli_num_rows($app) > 0){header("Location: complete.php");
	exit;}

	$ress=mysqli_query($conn,"SELECT * FROM personalinfo_tbl WHERE AppNumber='$userRow[userName]'");
	$userRows=mysqli_fetch_array($ress);

	$rac=mysqli_query($conn,"SELECT * FROM academicinfo_tbl WHERE AppNumber='$userRow[userName]'");
	$userRac=mysqli_fetch_array($rac);
	
	$fname = $userRows['FirstName'];
	$oname = $userRows['OtherName'];
	$sname = $userRows['SurName'];
	$gender = $userRows['Gender'];
	$dob = $userRows['DateOfBirth'];
	$state = $userRows['State'];
	$lga = $userRows['Lga'];
	$houseadd = $userRows['Address'];
	$email = $userRows['Email'];
	$phoneno = $userRows['PhoneNumber'];
	$level = $userRows['ProgrammeType'];
	$programme = $userRows['ProgrammeName'];
	$session = $userRows['AcademicSession'];
	$prisch = $userRac['PrimarySchool'];
	$prifrom = $userRac['PrimaryFrom'];
	$prito = $userRac['PrimaryTo'];
	$secsch = $userRac['SecondarySchool'];
	$secfrom = $userRac['SecondaryFrom'];
	$secto = $userRac['SecondaryTo'];
	$hname = $userRac['College'];
	$hfrom = $userRac['CollegeFrom'];
	$hto = $userRac['CollegeTo'];
	$hqualification = $userRac['CollegeQualification'];
	$hprogramme = $userRac['CollegeCourse'];
	$programme = $userRows['ProgrammeName'];
	$session = $userRows['AcademicSession'];
	$pgname = $userRows['PgName'];
	$pgnum = $userRows['PgPhone'];
	$pgadd = $userRows['PgAddress'];
	$nokname = $userRows['KinName'];
	$noknum = $userRows['KinPhone'];
	$nokadd = $userRows['KinAddress'];
	$nokrelationship = $userRows['KinRelationship'];
	$submit=mysqli_query($conn,"SELECT * FROM submit_tbl WHERE AppNumber='$userRow[userName]'");
	$userSubmit=mysqli_fetch_array($submit);

	$pass=mysqli_query($conn,"SELECT * FROM passport_tbl WHERE AppNumber='$userRow[userName]'");
	$userPass=mysqli_fetch_array($pass);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
	.wrapper{
		padding-top: 50px;
	}
	#form-content{
		margin: 0 auto;
		width: 600px;
	}
</style></head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Yaba College of Technology</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="home.php">Profile Status</a></li>
            <li><a href="form.php">Information</a></li>
            <li><a href="imageupload/index.php">Passport</a></li>
            <li><a href="olevel.php">SSCE Result</a></li>
            <li><a href="submitapp.php">Submit Application</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Application Number:<strong><?php echo $userRow['userName']; ?> </strong>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<div id="wrapper">
<div style="background-image: url(../onlineapp/ccslogo/header.jpg); background-repeat: no-repeat center center; background-size: cover; height: 150px"></div>
	<div class="container">
    
    	<div class="page-header">
    	<h3>Center for Continuous Studies (Part-Time) 2018/2019 Application</h3>
    	<table width="100%">
    	  <tr>
    	    <td width="13%"><img name="" src="imageupload/<?php if ($userPass['Passport'] <> "") {echo $userPass['Passport'];} else {echo "no-image.jpg";} ?>" width="60" height="60" alt=""></td>
    	    <td width="87%"><h5 style="color:#030"><strong> Name:</strong> <?php echo $sname; echo " "; echo $fname; echo " "; echo $oname; ?></h5>
    	      <h5 style="color:#030"><strong> Programme: </strong><?php echo $level; echo " "; echo $programme; echo " "; echo "- "; echo $session; ?> Session</h5></td>
  	    </tr>
  	  </table>
    	</div>
        
        <div id="form-content">
        <div class="col-lg-12">
        <h5><img src="1.jpg" width="30" height="30" alt=""> Completed <img src="0.jpg" width="30" height="30" alt=""> Not completed</h5>
        <h6><strong>Note: </strong>Make sure all the status below shows completed</h6>
        <h4><img src="<?php if ($userSubmit['Payment'] == 1) {echo "1";} else {echo "0";} ?>.jpg" width="40" height="40" alt=""> Application Fee Status</h4>
        <h4><img src="<?php if ($userSubmit['Information'] == 1) {echo "1";} else {echo "0";} ?>.jpg" width="40" height="40" alt=""> Applicant Information Status</h4>
        <h4><img src="<?php if ($userSubmit['Passport'] == 1) {echo "1";} else {echo "0";} ?>.jpg" width="40" height="40" alt=""> Passport Upload Status</h4>
        <h4><img src="<?php if ($userSubmit['Verification'] == 1) {echo "1";} else {echo "0";} ?>.jpg" width="40" height="40" alt=""> SSCE Verification Status</h4>
        <h4><img src="<?php if ($userSubmit['Olevel'] == 1) {echo "1";} else {echo "0";} ?>.jpg" width="40" height="40" alt=""> SSCE Information Status</h4>
        <h4><img src="<?php if (($userSubmit['Payment'] == 1) and ($userSubmit['Information'] == 1) and ($userSubmit['Passport'] == 1) and($userSubmit['Verification'] == 1) and ($userSubmit['Olevel'] == 1)) {$sub = "Enabled"; echo "1";} else {$sub = "Disabled"; echo "0";} ?>.jpg" width="40" height="40" alt=""> Application Submission <?php echo $sub; ?></h4>
        </div>
        </div>
    
    </div>
    
    </div>
    
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>