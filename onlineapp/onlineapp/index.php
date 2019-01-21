<?php 

require_once '../login/dbconnect.php';
// The length we want the unique reference number to be  
$unique_ref_length = 5;  
  
// A true/false variable that lets us know if we've  
// found a unique reference number or not  
$unique_ref_found = false;  
  
// Define possible characters.  
// Notice how characters that may be confused such  
// as the letter 'O' and the number zero don't exist  
$possible_chars = "0123456789";  
  
// Until we find a unique reference, keep generating new ones  
while (!$unique_ref_found) {  
  
    // Start with a blank reference number  
    $unique_ref = "";  
      
    // Set up a counter to keep track of how many characters have   
    // currently been added  
    $i = 0;  
      
    // Add random characters from $possible_chars to $unique_ref   
    // until $unique_ref_length is reached  
    while ($i < $unique_ref_length) {  
      
        // Pick a random character from the $possible_chars list  
        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
          
        $unique_ref .= $char;  
          
        $i++;  
      
    }  
      
    // Our new unique reference number is generated.  
    // Lets check if it exists or not 
		$con = mysqli_connect('localhost','root','','ccsapplicationdb');
 
    $query = mysqli_query($con, "SELECT `AppNumber` FROM `personalinfo_tbl` 
              WHERE `AppNumber`='".$unique_ref."'");  
    $result = @mysqli_query($query);  
    if (@mysqli_num_rows($result)==0) {  
      
        // We've found a unique number. Lets set the $unique_ref_found  
        // variable to true and exit the while loop  
        $unique_ref_found = true;  
      
    }  
  
}  
$playernumber = 'YCT/CCS/18/'.$unique_ref;
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yabatech 2018/2019 Part-Time Application</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
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

<script>
function selecthnd() {
    document.getElementById("mySelectHnd").disabled=false;
    document.getElementById("mySelectNd").disabled=true;
}
function selectnd() {
    document.getElementById("mySelectHnd").disabled=true;
    document.getElementById("mySelectNd").disabled=false;
}
</script>

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
            <li class="active"><a href="../onlineapp/index.php">Application Form</a></li>
            <li><a href="../login/index.php">Sign In</a></li>
            <li><a href="../login/register.php">Sign Up</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 


<div class="wrapper">
<div style="background-image:url(ccslogo/header.jpg); background-repeat:no-repeat center center; background-size:cover; height:150px"></div>
	
	<div class="container">
	
	<div class="page-header" align="center">
		<h4>
		<a target="_blank" href="#">
	  PART-TIME </a> - 2018/2019 APPLICATION FORM</h4>
	</div>
	
	<div class="col-lg-12">
	
		<div class="row">
		
			<div id="form-content">
			
			<form method="post" id="reg-form" autocomplete="off">

<input name="session" type="hidden" value="2018/2019">
				
<div class="form-group">
  <label>
    <input type="radio" name="select_prog" value="HND" id="RadioGroup1_0" onclick="selecthnd()">
    Higher National Diploma (HND) </label>

  <label>
  <input type="radio" checked name="select_prog" value="ND" id="RadioGroup1_1" onclick="selectnd()">
    National Diploma (ND) / CERT PROG.</label>
</div> 
<input name="appnumber" type="hidden" value="<?php echo "$playernumber"; ?>"><div class="form-group">
<select class="form-control" id="mySelectHnd" name="programme" disabled required >
  <option value="" selected>SELECT HND PROGRAMME</option>
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
<select class="form-control" id="mySelectNd" name="programme" required >
  <option value="" selected>SELECT ND/CERT PROGRAMME</option>
  <option value="Accountancy">Accountancy</option>
  <option value="Business Administration">Business Administration</option>
  <option value="Banking and Finance">Banking and Finance</option>
  <option value="Building Technology">Building Technology</option>
  <option value="Computer Engineering">Computer Engineering</option>
  <option value="Computer Science">Computer Science</option>
  <option value="Civil Engineering">Civil Engineering</option>
  <option value="Dress Making">Dress Making</option>
  <option value="Electrical Engineering">Electrical Engineering</option>
  <option value="Estate Management">Estate Management</option>
  <option value="Food Technology">Food Technology</option>
  <option value="General Art">General Art</option>
  <option value="Hospitality Management">Hospitality Management</option>
  <option value="Industrial Maintenance Engineering">Industrial Maintenance Engineering</option>
  <option value="Industrial Design">Industrial Design</option>
  <option value="Mechanical Engineering">Mechanical Engineering</option>
  <option value="Mass Communication">Mass Communication</option>
  <option value="Metallurgical Engineering">Metallurgical Engineering</option>
  <option value="Office Technology">Office Technology</option>
  <option value="Photography">Photography</option>
  <option value="Printing Technology">Printing Technology</option>
  <option value="Quantity Surveyin">Quantity Surveying</option>
  <option value="Science Laboratory Technology">Science Laboratory Technology</option>
  <option value="Statistics">Statistics</option>
  <option value="Science Laboratory Technology">Science Laboratory Technology</option>
</select>
</div>               
                
                
                
				<div class="form-group">
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="[A-Za-z\\s]*" class="form-control" name="txt_fname" id="lname" placeholder="First Name" required />
				</div>

				<div class="form-group">
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="[A-Za-z\\s]*" class="form-control" name="txt_oname" id="lname" placeholder="Other Name" required />
				</div>
				
				<div class="form-group">
					<input type="text" onkeyup="this.value = this.value.toUpperCase();" pattern="[A-Za-z\\s]*" class="form-control" name="txt_lname" id="lname" placeholder="Last Name" required />
				</div>

<div class="form-group">
<select name="gender" id="lname" class="form-control" required>
  <option value="">Select Sex</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>				
</div>
				
				<div class="form-group">
					<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" name="txt_email" id="lname" placeholder="Your Mail" required />
				</div>
				
				<div class="form-group">
					<input type="tel" pattern="[0-9].{10}" class="form-control" name="txt_contact" id="lname" placeholder="Contact No" required />
				</div>
				
				<hr />
				
				<div class="form-group">
					<button class="btn btn-primary"> Click to Proceed </button>
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