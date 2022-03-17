 <?php
 $errorMessage="";
		require '../control/DatabaseOperation.php';
		$uname=$pass=$unameErr=$passErr=$successfulMessage=$errorMessage="";
		$isValid=true;


		
		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			
			$uname=$_POST['uname'] ;
			$pass=$_POST['pass'];
			if(empty($uname )||empty($pass))
			{
				echo"<div style =background:lightcyan;position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%)><span style='color:brown '><h3>You can't visit your profile</h3></span>";
			echo "<br>";
			echo"<a href='../view/log_in.html'<span style='color:green'><h4>Log in first</a></h4></span>";
			$isValid=false;
		    }

		    
			if($isValid)
			{   
				$uname=test_input($uname);
				$pass=htmlspecialchars($pass);
				$respons=login($uname,$pass);
				
			    if($respons)
			    {
			 	
			 	session_start();
			 	$_SESSION['uname'] = $uname;
				header("location:../index.php");
			 	
			    }
			    else
			    {

			 	$errorMessage = "<span style='color:brown'><h3>error...!we can't match your data.Please<a href='../view/log_in.html'>log-in again</a>with correct information</h3></span>";
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
<link rel="stylesheet" type="text/css" href="../view/image.css">
<body>
	<form action="" method="POST">
<span style = "color: red;"> <?php echo $errorMessage ?></span>
</form>
</body>
</html>	
		
		