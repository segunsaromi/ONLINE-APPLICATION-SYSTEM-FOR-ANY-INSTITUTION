<?php

	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$conn = mysqli_connect('localhost','root','','ccsapplicationdb');
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);

if( $_POST ){

		$dob = trim($_POST['dob']);
		$dob = strip_tags($dob);
		$dob = htmlspecialchars($dob);

		$state = trim($_POST['state']);
		$state = strip_tags($state);
		$state = htmlspecialchars($state);

		$lga = trim($_POST['lga']);
		$lga = strip_tags($lga);
		$lga = htmlspecialchars($lga);

		$houseadd = trim($_POST['houseadd']);
		$houseadd = strip_tags($houseadd);
		$houseadd = htmlspecialchars($houseadd);

		$prisch = trim($_POST['prisch']);
		$prisch = strip_tags($prisch);
		$prisch = htmlspecialchars($prisch);

		$prifrom = trim($_POST['prifrom']);
		$prifrom = strip_tags($prifrom);
		$prifrom = htmlspecialchars($prifrom);

		$prito = trim($_POST['prito']);
		$prito = strip_tags($prito);
		$prito = htmlspecialchars($prito);

		$secsch = trim($_POST['secsch']);
		$secsch = strip_tags($secsch);
		$secsch = htmlspecialchars($secsch);

		$secfrom = trim($_POST['secfrom']);
		$secfrom = strip_tags($secfrom);
		$secfrom = htmlspecialchars($secfrom);

		$secto = trim($_POST['secto']);
		$secto = strip_tags($secto);
		$secto = htmlspecialchars($secto);

		$level = trim($_POST['level']);
		$level = strip_tags($level);
		$level = htmlspecialchars($level);

if ($level == 'HND'){
		@$hname = trim($_POST['hname']);
		@$hname = strip_tags(@$hname);
		@$hname = htmlspecialchars(@$hname);

		@$hfrom = trim($_POST['hfrom']);
		@$hfrom = strip_tags(@$hfrom);
		@$hfrom = htmlspecialchars(@$hfrom);

		@$hto = trim($_POST['hto']);
		@$hto = strip_tags(@$hto);
		$hto = htmlspecialchars(@$hto);

		@$hprogramme = trim($_POST['hprogramme']);
		@$hprogramme = strip_tags(@$hprogramme);
		@$hprogramme = htmlspecialchars(@$hprogramme);

		@$hqualification = trim($_POST['hqualification']);
		@$hqualification = strip_tags(@$hqualification);
		@$hqualification = htmlspecialchars(@$hqualification);
}

if ($level == 'ND') {
$hname = '0';
$hfrom = '0';
$hto = '0';
$hprogramme = '0';
$hqualification = '0';	
	}
		$pgname = trim($_POST['pgname']);
		$pgname = strip_tags($pgname);
		$pgname = htmlspecialchars($pgname);

		$pgnum = trim($_POST['pgnum']);
		$pgnum = strip_tags($pgnum);
		$pgnum = htmlspecialchars($pgnum);

		$pgadd = trim($_POST['pgadd']);
		$pgadd = strip_tags($pgadd);
		$pgadd = htmlspecialchars($pgadd);

		$nokname = trim($_POST['nokname']);
		$nokname = strip_tags($nokname);
		$nokname = htmlspecialchars($nokname);

		$noknum = trim($_POST['noknum']);
		$noknum = strip_tags($noknum);
		$noknum = htmlspecialchars($noknum);

		$nokadd = trim($_POST['nokadd']);
		$nokadd = strip_tags($nokadd);
		$nokadd = htmlspecialchars($nokadd);

		$nokrelationship = trim($_POST['nokrelationship']);
		$nokrelationship = strip_tags($nokrelationship);
		$nokrelationship = htmlspecialchars($nokrelationship);
		
		
					$conn = mysqli_connect('localhost','root','','ccsapplicationdb');

			$query = "UPDATE personalinfo_tbl SET DateOfBirth='$dob',State='$state',Lga='$lga',Address='$houseadd',PgName='$pgname',PgPhone='$pgnum',PgAddress='$pgadd',KinName='$nokname',KinPhone='$noknum',KinAddress='$nokadd', KinRelationship='$nokrelationship' WHERE AppNumber='$userRow[userName]'";
			$res = mysqli_query($conn,$query);


			$check = "SELECT * FROM academicinfo_tbl WHERE AppNumber='$userRow[userName]'";
			$recheck = mysqli_query($conn,$check);
            if (mysqli_num_rows($recheck) == 1){
				$query3 = "UPDATE academicinfo_tbl SET 	PrimarySchool='$prisch',PrimaryFrom='$prifrom',PrimaryTo='$prito',SecondarySchool='$secsch',SecondaryFrom='$secfrom',SecondaryTo='$secto',College='$hname',CollegeQualification='$hqualification',CollegeCourse='$hprogramme',CollegeFrom='$hfrom',CollegeTo='$hto' WHERE AppNumber='$userRow[userName]'";
			$res3 = mysqli_query($conn,$query3);
			}
			
			else
			{
				$query3 = "INSERT INTO academicinfo_tbl(AppNumber,PrimarySchool,PrimaryFrom,PrimaryTo,SecondarySchool,SecondaryFrom,SecondaryTo,College,CollegeQualification,CollegeCourse,CollegeFrom,CollegeTo) VALUES('$userRow[userName]','$prisch','$prifrom','$prito','$secsch','$secfrom','$secto','$hname','$hqualification','$hprogramme','$hfrom','$hto')";
			$res3 = mysqli_query($conn,$query3);
			}
			$query2 = "UPDATE submit_tbl SET Information = '1' WHERE AppNumber='$userRow[userName]'";
			$res2 = mysqli_query($conn,$query2);

	?>
    
	<form method="post" id="reg-form" autocomplete="off">
    <table width="100%" border="0" class="table table-striped">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>Success</strong>, Verify Details Entered...
    	</div>
    </td>
    </tr>
    
    <tr>
    <td width="39%">Date of Birth.</td>
    <td width="61%"><strong><?php echo $dob; ?></strong></td>
    </tr>

    <tr>
    <td>State of Origin / LGA</td>
    <td><strong><?php echo $state; ?> / <?php echo $lga; ?></strong></td>
    </tr>

    <tr>
    <td>Residental Address</td>
    <td><strong><?php echo $houseadd; ?></strong></td>
    </tr>

    <tr>
    <td>Primary School</td>
    <td><strong><?php echo $prisch; ?> : <?php echo $prifrom; ?> - <?php echo $prito; ?></strong></td>
    </tr>

    <tr>
    <td>Secondary School</td>
    <td><strong><?php echo $secsch; ?> : <?php echo $secfrom; ?> - <?php echo $secto; ?></strong></td>
    </tr>

<?php if ($level == 'HND'){?>
    <tr>
    <td>Higher Instituion</td>
    <td><strong><?php echo $hname; ?> : <?php echo $hfrom; ?> - <?php echo $hto; ?></strong></td>
    </tr>
<?php }?>
    <tr>
    <td>Parent/Guardian Name</td>
    <td><strong><?php echo $pgname; ?></strong></td>
    </tr>
    
    <tr>
    <td>Parent/Guardian Contact</td>
    <td><strong><?php echo $pgadd; ?> / <?php echo $pgnum; ?></strong></td>
    </tr>

    <tr>
    <td>Next of Kin Name / Relationship</td>
    <td><strong><?php echo $nokname; ?> / <?php echo $nokrelationship; ?></strong></td>
    </tr>
    
    <tr>
    <td>Next of Kin Contact</td>
    <td><strong><?php echo $nokadd; ?> : <?php echo $noknum; ?></strong></td>
    </tr>
    
    </table>
				<div class="form-group">
				  <button class="btn btn-primary" name="submit"> - RECORD VERIFIED - </button>
				</div>
				
			</form>
<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'verify.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});
</script>
    <?php
	
}