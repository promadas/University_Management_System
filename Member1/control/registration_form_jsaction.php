
<?php
	require '../control/DatabaseOperation.php';

	
	$uname=$email=$fname=$lname=$pass=$number=$uppercase=$lowercase=$specialChars="";
	$unameErr=$emailErr=$fnameErr=$lnameErr=$passErr=$emailErr=$passMsg=$passSuccessfulMsg ="";
	$successfulMessage="";
	$errorMessage="";
	$isValid=true;
	if($_SERVER['REQUEST_METHOD']==="POST")
	{
		$uname=$_POST['uname'];
		$email=$_POST['email'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pass=$_POST['pass'];


		/*if(empty($uname) || empty($fname)||empty($lname)||empty($pass)||empty($email))
		{
		
		echo"<div style =background:lightcyan;position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%)><span style='color:brown '><h3>Fill up the form properly</h3></span>";
			echo "<br>";
			echo"<a href='../view/registration_form.html'<span style='color:green'><h4>Do registration First</a></h4></span>";
			$isValid=false;
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL) )
		 {
			$emailMsg="Invalid email format";
			$isValid=false;
		 }
         */
		 if($isValid)
		{
			$uname=test_input($uname);
			$pass=htmlspecialchars($pass);
			$fname=test_input($fname);
			$lname=test_input($lname);
			$respons = register($uname,$pass,$fname,$lname,$email);
			if($respons)
			{
				
			   header("location:../view/log_in.html");

			}
			else
			{
			$errorMessage = "<span style='color:brown'><h3> We already have your data.Please<a href='../view/log_in.html'>log-in again</a></h3></span>";
				
			}
		}
	}
			
	
	
   
	function test_input($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;
			
		}
		
		
		
	?>
<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="../view/image2.css">
<body>
	<form action="" method="POST" >
<label for="uname"><h4> User Name<span style="color: red;">*</span>: </label>
			<input type="text" id="uname" name="uname" >
			<span style="color: red"><?php echo $unameErr?></span>
			<br>
			<br>
			<label for="email">Email<span style="color: red;">*</span>: </label>
			<input type="email" id="email" name="email" >
			<span style="color: red"><?php echo $emailErr?></span>
			<br>
			<br>
			<label for="fname">First Name<span style="color: red;">*</span> :</label>
			<input type="text" id="fname" name="fname" >
			
			<br>
			<br>
			<label for="lname">Last Name<span style="color: red;">*</span> :</label>
			<input type="text" id="lname" name="lname" >
			
			<br>
			<br>
			<label for="pass">Password<span style="color: red;">*</span>:</label>
			<input type="Password" id="pass" name="pass" >
			<span style="color: red"></span>

       
			
			

<span style = "color: red;"> <?php echo $errorMessage ?></span>

</form>
</body>
</html>
	
        

        

	