<?php
$sid=$cgpa=$creditcomplete=$program=$dept="";
$profile="";
if($_SERVER['REQUEST_METHOD'] === "POST")
{
	$sid="19-39625-1";
	$cgpa="3.71";
	$creditcomplete="94";
	$program="BSC in Computer Science & Engineering";
	$dept="CSE";
	if($sid===$_POST['sid'] && $cgpa===$_POST['cgpa'] && $creditcomplete===$_POST['creditcomplete']&& $program===$_POST['program'] && $dept===$_POST['dept'])
	{
		if(isset($_POST['profile']))
		{
			setcookie("sid",$sid,time()+60*60*365);
			setcookie("cgpa",$cgpa,time()+60*60*365);
			setcookie("creditcomplete",$creditcomplete,time()+60*60*365);
			setcookie("program",$program,time()+60*60*365);
			setcookie("dept",$dept,time()+60*60*365);
			setcookie("profile",$profile,time()+60*60*365);
			header("location:../view/view_completed_course.php");
		}
	



		if(isset($_COOKIE['profile']))
		{
			$sid=$_COOKIE['sid'];
            $cgpa=$_COOKIE['cgpa'];
           $creditcomplete=$_COOKIE['creditcomplete'];
           $program=$_COOKIE['program'];
           $dept=$_COOKIE['dept'];
           $profile=$_COOKIE['profile'];
           
		}
	}
}
	
?>
	
	    

	
<!doctype html>
	<html>
	<head >
		<meta charset="utf-8">
		<title>View Profile</title>
		<link rel="stylesheet" type="text/css" href="../view/image2.css">

	</head>
	<body>
	
	
			
<div style = "background:beige;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) ;"> 
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
		<fieldset>
			<legend><h3>Your info </h3></legend>
		     <label for="sid"><h4> Student ID :</label>
			<input type="text" id="sid" name="sid" value="<?php echo $sid?>">
			
			<br>
			<br>
			<label for="cgpa">CGPA :</label>
			<input type="text" id="cgpa" name="cgpa" value="<?php echo $cgpa?>"> 
			<span style="color: red"></span>
			<br>
			<br>
			<label for="creditcomplete">Credit Completed :</label>
			<input type="text" id="creditcomplete" name="creditcomplete" value="<?php echo $creditcomplete?>">
			
			<br>
			<br>
			<label for="program">Program :</label>
			<input type="text" id="Program" name="program" value="<?php echo $program?>" >
			
			<br>
			<br>
			<label for="dept">Department :</label>
			<input type="text" id="dept" name="dept" value="<?php echo $dept?>" >
			<br>
			<br>

			<input type="submit" id="profile" value="<?php echo $profile?>"> 

			<label  for="profile" >Click here to see your personal info</label>
			
			</fieldset>
		</form>
	</body>
	</html>
    
	<html>
	<link rel="stylesheet" type="text/css" href="../view/image2.css">
	<body>

     <div style = "background:beige;position: absolute; top: 20%; 	right: 60%; transform: translate(-90%, -90%) ;"> 
     	<form action="" method="POST">
     		<fieldset>
		   <select name="courses" id="courses">
		   	<option value="nothing" selected="selected"> Academics</option>
		   	<option value="../view/select_course.html"> Give online Exam</option>
		   	<option value="../view/Drop_course.php">Drop Application</option>
		   	<option value="../view/register_courses.html">Registration</option>


		   </select>
		   <br><br>

		   <select name="courses1" id="courses1">
		   	<option value="nothing1" selected="selected"> Grade reports</option>
		   	<option value="../view/view_completed_course.php">By Semester</option>
		   	<option value="../view/view_completed_course.php">By Curriculum</option>

		   </select>
		
<script>
	var urlMenu = document.getElementById('courses')
	urlMenu.onchange = function()
	{
		var userOption = this.options[this.selectedIndex];
		if(userOption.value!="nothing")
		{
			window.open(userOption.value,"university page","");
		}
	}
	var urlMenu = document.getElementById('courses1')
	urlMenu.onchange = function()
	{
		var userOption = this.options[this.selectedIndex];
		if(userOption.value!="nothing1")
		{
			window.open(userOption.value,"university page","");
		}
	}

</script>
</fieldset>
</form>
</body>
</html>
	     
	      