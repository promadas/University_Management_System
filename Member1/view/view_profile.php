<!doctype html>
	<html>
	<head >
		<meta charset="utf-8">
		<title>View Profile</title>
        <link rel="stylesheet" type="text/css" href="../view/image2.css">
	</head>
	<body>
	
	
			
<div style = "background:beige;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) ;"> 
	<form action="../control/view_profile_action.php" method="POST">
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
			
		</fieldset>
       
			
			<br>
			
		
	</form>
			
	      </h4>
	      </body>
	      </html>
	
	    
			