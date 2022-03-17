<?php
  
  $drop=$successfulMessage=$errorMessage="";
  $isValid=true;

  if ($_SERVER['REQUEST_METHOD']==="POST")
  {
   
  	
       if($isValid)
      { 
        if($isValid)
  	   {
  	   $successfulMessage="dropped";
       }
        else
       {
    	 $errorMessage="not";
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
		<title>Drop Application</title>
		<link rel="stylesheet" type="text/css" href="../view/image2.css">
	</head>

	<body>
	<div style = "background:beige;position: absolute; top: 50%; left: 50%; transform: translate(-49%, -49%) ;"> 
	<form action="" method="POST">
		<fieldset>
			<legend><h3>Drop courses</h3></legend>
		    
	       <label for="drop"><h4>Select the courses you want to drop</h4></label>
	       <select id="drop" >
	       <option value="C#" name="drop" id="drop">C#</option>
	       <option value="Webtechnology" name="drop" id="drop">Webtechnology</option>
	       <option value="Data Communication" name="drop" id="drop">Data Communication</option>
	       <option value="Chemistry" name="drop" id="drop">Chemistry</option>
	

	      </select>
	      <p><a href="../view/Drop_course.php" ><button>Drop  </button></a></p>
	      <span style="color: green;"><?php echo $successfulMessage?></span>
	      <span style="color: red;"><?php echo $errorMessage?></span>

	
	     <p><a href="../index.php">Back to profile</a></p>
	
</fieldset>
	
</form>
</body>
</div>
</html>


