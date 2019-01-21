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

	$pass=mysqli_query($conn,"SELECT * FROM passport_tbl WHERE AppNumber='$userRow[userName]'");
	$userPass=mysqli_fetch_array($pass);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userName']; ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
  <script src="assets/js/lga.js"></script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" type="text/css" />
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<style>
	.wrapper{
		padding-top: 50px;
	}
	#form-content{
		margin: 0 auto;
		width: 500px;
	}
</style>
</head>
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
			  <span class="glyphicon glyphicon-user"></span>&nbsp;App Number <strong><?php echo $userRow['userName']; ?> </strong>&nbsp;<span class="caret"></span></a>
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
    <td width="87%"><h5 style="color:#030"><strong> Name:</strong> <?php echo $sname; echo " "; echo $fname; echo " "; echo $oname; ?></h5>         <h5 style="color:#030"><strong> Programme: </strong><?php echo $level; echo " "; echo $programme; echo " "; echo "- "; echo $session; ?> Session</h5> </td>
    </tr>
        
</table>
   	  </div>

	
	<div class="col-lg-12">
	
		<div class="row">
		
			<div id="form-content">
			
			<form method="post" id="reg-form" autocomplete="off">
				
				<div class="form-group"><input name="level" type="hidden" value="<?php echo $level; ?>">
							<label>Date of Birth</label>
                            					<input type="date" class="form-control" value="<?php echo $dob; ?>" name="dob" id="dob" required />
				</div>


<div class="form-group">
							<label>State of Origin</label>
						   <select name="state" id="state" class="form-control" required>
							  <option value="<?php if (@$state <> ""){echo @$state;} else {echo "";}?>" selected><?php if (@$state <> ""){echo @$state;} else {echo "- Select State -";}?></option>
							  <option value='Abia'>Abia</option>
							  <option value='Adamawa'>Adamawa</option>
							  <option value='AkwaIbom'>AkwaIbom</option>
							  <option value='Anambra'>Anambra</option>
							  <option value='Bauchi'>Bauchi</option>
							  <option value='Bayelsa'>Bayelsa</option>
							  <option value='Benue'>Benue</option>
							  <option value='Borno'>Borno</option>
							  <option value='Cross River'>Cross River</option>
							  <option value='Delta'>Delta</option>
							  <option value='Ebonyi'>Ebonyi</option>
							  <option value='Edo'>Edo</option>
							  <option value='Ekiti'>Ekiti</option>
							  <option value='Enugu'>Enugu</option>
							  <option value='FCT'>FCT</option>
							  <option value='Gombe'>Gombe</option>
							  <option value='Imo'>Imo</option>
							  <option value='Jigawa'>Jigawa</option>
							  <option value='Kaduna'>Kaduna</option>
							  <option value='Kano'>Kano</option>
							  <option value='Katsina'>Katsina</option>
							  <option value='Kebbi'>Kebbi</option>
							  <option value='Kogi'>Kogi</option>
							  <option value='Kwara'>Kwara</option>
							  <option value='Lagos'>Lagos</option>
							  <option value='Nasarawa'>Nasarawa</option>
							  <option value='Niger'>Niger</option>
							  <option value='Ogun'>Ogun</option>
							  <option value='Ondo'>Ondo</option>
							  <option value='Osun'>Osun</option>
							  <option value='Oyo'>Oyo</option>
							  <option value='Plateau'>Plateau</option>
							  <option value='Rivers'>Rivers</option>
							  <option value='Sokoto'>Sokoto</option>
							  <option value='Taraba'>Taraba</option>
							  <option value='Yobe'>Yobe</option>
							  <option value='Zamfara'>Zamafara</option>
							</select>
						</div>



<div class="form-group">
							  <label>LGA of Origin</label>
							  <select name="lga" id="lga" class="form-control" required>							  <option value="<?php if (@$lga <> ""){echo @$lga;} else {echo "";}?>" selected><?php if (@$lga <> ""){echo @$lga;} else {echo "- Select LGA -";}?></option>

							  </select>
</div>

<div class="form-group">					
							  <label>Residential Address</label>
<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="houseadd" id="lname" placeholder="<?php if (@$houseadd <> ""){echo @$houseadd;} else {echo "Residential Address";}?>" value="<?php echo @$houseadd; ?>" required />
				</div>
                
				<div class="form-group">							  <label>Primary School Record</label>

					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="prisch" id="lname" placeholder="<?php if (@$prisch <> ""){echo @$prisch;} else {echo "Primary School";}?>" value="<?php echo @$prisch; ?>" required />
				</div>

				<div class="form-group"><?php echo $prito; ?>
					From <input type="month" name="prifrom" id="lname" value="<?php echo $prifrom; ?>" required />
					To <input type="month" name="prito" id="lname" value="<?php echo $prito; ?>" required />
				</div>


				<div class="form-group">
                <label>Secondary School Record</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="secsch" id="lname" placeholder="<?php if (@$secsch <> ""){echo @$secsch;} else {echo "Secondary School";}?>" value="<?php echo @$secsch; ?>" required />
				</div>

				<div class="form-group">
					From <input type="month"  name="secfrom" id="lname" value="<?php echo $secfrom; ?>" required />
					To <input type="month" name="secto" id="lname" value="<?php echo $secto; ?>" required />
				</div>


<?php if ($level == 'HND'){?>
				<div class="form-group">
                <label>Higher Insitution Record</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="hname" id="lname" placeholder="<?php if (@$hname <> ""){echo @$hname;} else {echo "Higher Insitution";}?>" value="<?php echo @$hname; ?>" required />
				</div>
				<div class="form-group">
					From <input type="month"  name="hfrom" id="lname" value="<?php echo $hfrom; ?>" required />
					To <input type="month" name="hto" id="lname" value="<?php echo $hto; ?>" required />
				</div>
<div class="form-group">
<select class="form-control" id="mySelectHnd" name="hprogramme" required >
  <option value="<?php if (@$hprogramme <> ""){echo @$hprogramme;} else {echo "";}?>" selected><?php if (@$hprogramme <> ""){echo @$hprogramme;} else {echo "SELECT NCE/DIPLOMA COURSE COMPLETED";}?></option>
  <option value="Accountancy">Accountancy</option>
  <option value="Business Administration">Business Administration</option>
  <option value="Building Technology">Building Technology</option>
  <option value="Biochemistry">Biochemistry</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Computer Science">Computer Science</option>
  <option value="Electrical Engineering">Electrical Engineering</option>
  <option value="Food Technology">Food Technology</option>
  <option value="Hospitality Management">Hospitality Management</option>
  <option value="Industrial Maintenance Engineering">Industrial Maintenance Engineering</option>
  <option value="Microbiology">Microbiology</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Marketing">Marketing</option>
  <option value="Statistics">Statistics</option>
</select>
</div>


<div class="form-group">
<select class="form-control" id="mySelectHnd" name="hqualification" required >
  <option value="<?php if (@$hqualification <> ""){echo @$hqualification;} else {echo "";}?>" selected><?php if (@$hqualification <> ""){echo @$hqualification;} else {echo "SELECT GRADE LEVEL";}?></option>
  <option value="Upper Credit">Upper Credit</option>
  <option value="Lower Credit">Lower Credit</option>
  <option value="Pass">Pass</option>
</select>
</div>

<?php }?>











				<div class="form-group">
                <label>Parent/Guardian Record</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z -]+$" class="form-control" name="pgname" id="lname" placeholder="<?php if (@$pgname <> ""){echo @$pgname;} else {echo "Parent/Guardian Full Name";}?>" value="<?php echo @$pgname; ?>" required />
				</div>
				
				<div class="form-group">
					<input type="tel" pattern="[0-9].{10}" class="form-control" name="pgnum" value="<?php echo @$pgnum; ?>" id="lname" placeholder="<?php if (@$pgnum <> ""){echo @$pgnum;} else {echo "Parent/Guardian Contact No";}?>" required />
				</div>
				
				<div class="form-group">
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="pgadd" id="lname" placeholder="<?php if (@$pgadd <> ""){echo @$pgadd;} else {echo "Parent/Guaridan Home Address";}?>" value="<?php echo @$pgadd; ?>" required />
				</div>


				<div class="form-group">
                <label>Next of Kin Record</label>
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z -]+$" class="form-control" name="nokname" id="lname" placeholder="<?php if (@$nokname <> ""){echo @$nokname;} else {echo "Next of Kin Full Name";}?>" value="<?php echo @$nokname; ?>" required />
				</div>
				
				<div class="form-group">
					<input type="tel" pattern="[0-9].{10}" class="form-control" name="noknum" id="lname" value="<?php echo @$noknum; ?>" placeholder="<?php if (@$noknum <> ""){echo @$noknum;} else {echo "Next of Kin Contact No";}?>" required />
				</div>
				
				<div class="form-group">
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="^[A-Za-z0-9 -]+$" class="form-control" name="nokadd" id="lname" placeholder="<?php if (@$nokadd <> ""){echo @$nokadd;} else {echo "Next of Kin Home Address";}?>" value="<?php echo @$nokadd; ?>" required />
				</div>
				
				<div class="form-group">
<select name="nokrelationship" class="form-control" required>
  <option value="<?php if (@$nokrelationship <> ""){echo @$nokrelationship;} else {echo "";}?>" selected><?php if (@$nokrelationship <> ""){echo @$nokrelationship;} else {echo "Next of Kin Relationship";}?></option>
  <option value="Father">Father</option>
  <option value="Mother">Mother</option>
  <option value="Spouse">Spouse</option>
  <option value="Brother">Brother</option>
  <option value="Sister">Sister</option>
  <option value="Son">Son</option>
  <option value="Daughter">Daughter</option>
  <option value="Cousin">Cousin</option>
  <option value="Aunt">Aunt</option>
  <option value="Uncle">Uncle</option>
  <option value="Nephew">Nephew</option>
  <option value="Niece">Niece</option>
</select>					
				</div>                

				
				<hr />
				
				<div class="form-group">
					<button class="btn btn-primary">Submit/Save Details</button>
				</div>
				
			</form>
            
            </div>
            
            </div>
		
	</div>
	
</div>
	
</div>
<script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'submit.php',
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
</body>
</html>
<?php ob_end_flush(); ?>