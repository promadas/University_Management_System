<?php
       
       session_start();
		require '../control/DatabaseOperation.php';
		
		$uname= $_SESSION['uname'];
		$pass=$unameErr=$passErr=$successfulMessage=$errorMessage="";
		
		$isValid=true;


		
		if($_SERVER['REQUEST_METHOD']==="GET")
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
			 	
			    
			    sleep(15);
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
