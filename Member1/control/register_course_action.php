<?php
require '../control/DatabaseOperation.php';

$course=$courseErr=$section=$sectionErr=$day=$dayErr=$time="";
$successfulMessage=$errorMessage="";
$isValid=true;
if($_SERVER['REQUEST_METHOD']==="GET")
{
	$course=$_GET['course'];
	$section=$_GET['section'];
	$day= $_GET['day'];
	$time=$_GET['time'];
	
	if($isValid)
	{
		if(empty($day))
		{
			echo"<div style =background:lightcyan;position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%)><span style='color:brown '><h3>Register Your next semester courses</h3></span>";
			echo "<br>";
			echo"<a href='../view/register_courses.html'<span style='color:green'><h4>Registration </a></h4></span>";
			$isValid=false;
		}

		$response= registration($course,$section,$day,$time);
		
		if($response)
		{
			header("location:../view/welcome.php");
		}
		else
		{
			$errorMessage="now you can't register";
		}
		

	}

}
 
?>
<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="../view/image2.css">
<body>
	<form action="" method="POST" >
<span style = "color: red;"> <?php echo $successfulMessage ?></span>

<span style = "color: red;"> <?php echo $errorMessage ?></span>

</form>
</body>
</html>



