<?php
   session_start();
 ?>
<!doctype html>
	<html>
	<head >
		<meta charset="utf-8">
		<title>welcome page</title>
		<link rel="stylesheet" type="text/css" href="view/image.css">

	</head>
	<body>
	<div style = "background:beige;position: absolute; top: 20%; left: 20%; transform: translate(-40%, -40%) ;">
	
		<fieldset>
			<span style="color:brown;">
				<h2>welcome,<?php echo isset($_SESSION['uname']) ? $_SESSION['uname'] : "Anonymous" ?></h2>
			</span>
		    
		
			<a href="control/view_profile_action.php" id="profile"><p><h4>View your profile</label></h4></p> </a>
			<select name="courses" id="courses">
		   	<option value="nothing" selected="selected"> Settings</option>
		   	<option value="view/changepassword.php">Change Password</option>
		   

		   </select>
		   <p><a href="view/logout.php"><button>logout</button></a></p>

			
			<script type="text/javascript">
	        var urlMenu = document.getElementById('courses')
	         urlMenu.onchange = function()
	        {
		    var userOption = this.options[this.selectedIndex];
		    if(userOption.value!="nothing")
		    {
			window.open(userOption.value,"university page","");
		    }
	       }
	   </script>
			

			</div>
		</fieldset>

	</form>
	
			

</body>
</html>
