<?php

if( $_POST ){
	
		$appnumber = trim($_POST['appnumber']);
		$appnumber = strip_tags($appnumber);
		$appnumber = htmlspecialchars($appnumber);

		$level = trim($_POST['select_prog']);
		$level = strip_tags($level);
		$level = htmlspecialchars($level);

		$programme = trim($_POST['programme']);
		$programme = strip_tags($programme);
		$programme = htmlspecialchars($programme);

		$session = trim($_POST['session']);
		$session = strip_tags($session);
		$session = htmlspecialchars($session);

		$fname = trim($_POST['txt_fname']);
		$fname = strip_tags($fname);
		$fname = htmlspecialchars($fname);

		$oname = trim($_POST['txt_oname']);
		$oname = strip_tags($oname);
		$oname = htmlspecialchars($oname);

		$lname = trim($_POST['txt_lname']);
		$lname = strip_tags($lname);
		$lname = htmlspecialchars($lname);

		$gender = trim($_POST['gender']);
		$gender = strip_tags($gender);
		$gender = htmlspecialchars($gender);

		$email = trim($_POST['txt_email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);

		$phno = trim($_POST['txt_contact']);
		$phno = strip_tags($phno);
		$phno = htmlspecialchars($phno);

			$conn = mysqli_connect('localhost','root','','ccsapplicationdb');

			$query = "INSERT INTO application_tbl(AppNumber,FirstName,OtherName,SurName,Gender,Email,PhoneNumber,ProgrammeType,ProgrammeName,AcademicSession) VALUES('$appnumber','$fname','$oname','$lname','$gender','$email','$phno','$level','$programme','$session')";
			$res = mysqli_query($conn,$query);

			$query2 = "INSERT INTO submit_tbl(AppNumber,Payment) VALUES('$appnumber','1')";
			$res2 = mysqli_query($conn,$query2);

			$query3 = "INSERT INTO personalinfo_tbl(AppNumber,FirstName,OtherName,SurName,Gender,Email,PhoneNumber,ProgrammeType,ProgrammeName,AcademicSession) VALUES('$appnumber','$fname','$oname','$lname','$gender','$email','$phno','$level','$programme','$session')";
			$res3 = mysqli_query($conn,$query3);
				
			$query2 = "INSERT INTO payment_tbl(AppNumber,Status) VALUES('$appnumber','1')";
			$res2 = mysqli_query($conn,$query2);
		/*	if ($res) {
				$errTyp = "success";
			} else {
				$errTyp = "danger";
			} */	

	?>
    
	<form method="post" id="reg-form" autocomplete="off">
    <table width="100%" border="0" class="table table-striped">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>Success</strong>, Candidates Successfully Applied...<br />
    		<strong>Please take note of the Application Number on the screen.</strong>
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>Application No.</td>
    <td><strong><?php echo $appnumber; ?></strong></td>
    </tr>

    <tr>
    <td>Full Name</td>
    <td><strong><?php echo $lname; ?> <?php echo $oname; ?> <?php echo $fname; ?></strong></td>
    </tr>

    <tr>
    <td>Academic Session</td>
    <td><strong><?php echo $session; ?></strong></td>
    </tr>

    <tr>
    <td>Programme</td>
    <td><strong><?php echo $level; ?> <?php echo $programme; ?></strong></td>
    </tr>

    <tr>
    <td>Gender</td>
    <td><strong><?php echo $gender; ?></strong></td>
    </tr>
    <tr>
      <td>Your eMail</td>
      <td><strong><?php echo $email; ?></strong></td>
    </tr>
    
    <tr>
    <td>Contact No</td>
    <td><strong><?php echo $phno; ?></strong></td>
    </tr>
    
    </table>
				<div class="form-group">
				  <a href="login/index.php"><button class="btn btn-primary"> Click to PAY </button></a>
				</div>
				
			</form>
<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

    <?php
	
}