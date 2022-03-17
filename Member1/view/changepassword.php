<?php
       
       session_start();
		require '../control/DatabaseOperation.php';
		
		$uname= $_SESSION['uname'];
		$pass=$unameErr=$passErr=$successfulMessage=$errorMessage="";
		
		$isValid=true;


		
		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			
			
			$pass=$_POST['pass'];
			if(empty($uname )||empty($pass))
			{
		      echo"<div style =background:lightcyan;position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%)><span style='color:brown '><h3>You can't visit your profile</h3></span>";
			echo "<br>";
			echo"<a href='../view/js/log_in.html'<span style='color:green'><h4>Log in first</a></h4></span>";
			$isValid=false;
		    }
		    if($isValid)
		    {
		    	if(strlen($pass) >8)
		    	{
		    		$passErr = "password length is 8";
		    		$isValid = false;
		    	}
		    }

		    
			if($isValid)
			{   
				$uname=test_input($uname);
				$pass=htmlspecialchars($pass);
				$respons=update($uname,$pass);
				
			    if($respons)
			    {
			 	
			    
			    
			    $successfulMessage="successfully updated";

			 	
			    }
			    else
			    {
			 	$errorMessage = "successfully updated ";
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
	<head>
		<meta charset="utf-8">
		<title>change password</title>
		<link rel="stylesheet" type="text/css" href="../view/image2.css">
	</head>
	<body>
		
	<div style = "background: beige; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
       <form action="" method="POST" name="mform" onsubmit="fetchpass(this)"; return false ;>
	       <fieldset>
		<legend><h2 >Log in Form</h2></legend>
		<label for="uname"><h4>Username<span style="color: red;">*</span>:</label>
		<input type="text" id="uname" name="uname" value="<?php echo $uname?>" disabled>
		<span style="color: red"></span>
		<br>
		<br>
		<br>
		<label for="pass">Password<span style="color: red;">*</span>:</label>
		<input type="Password" id="pass" name="pass">
		<span style="color: red"></span>
		<span style="color:green;"><?php echo $successfulMessage ?></span>
		<span style="color:green;"><?php echo $passErr ?></span>
		<br>
		<input type="Submit" name="submit" value="update" style="background:greenyellow;">
		<p><a href="index.php">View Profile</a></p>
		<a href="../view/logout.php" style="background:lightskyblue;"><button>Log out<a></button>
		<script>
			
		 function fetchpass(mform)
		 {
		 	var cpass = mform.pass.value;
		 	var xhttp = new XMLHttpRequest();
		 	xhttp.onload=function()
		 	{
		 	   
		 	   document.getElementById("pass").innerHTML=this.responseText;
		 	};
		 	xhttp.open("POST",changepassword.php);
		 	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		 	xhttp.send();
		 	
		 	
		 }	
		 

		</script>
		

	</form>
	</h4>
	    
	</div>
</fieldset>
</form>


	</body>
	</html>

