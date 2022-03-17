<?php
	

	
	$select="";
	$flag=false;
	if($_SERVER['REQUEST_METHOD']==="POST")
	{
		$select=$_POST['select'];

		if(isset(($select)))
		{
		
		echo"<div style =background:lightcyan;position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%)><span style='color:brown '><h3>download the exam paper from the vues</h3></span>";
		  echo"<br>";
		  echo "<a href='../view/Lectures.html'<span style='color:blue'><h4>Download the paper</a></h4></span>";
		}

		else
		{
			header("location:../view/download_lectures.php");
		}
	}

	?>
