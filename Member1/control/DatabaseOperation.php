<?php
function connect()
{
	$conn=new mysqli("localhost","proma","123","project");
	if($conn -> connect_errno)
	{
		die("connection failed".$conn-> connect_errno);
	}
	return $conn;
}

function register($uname,$pass,$fname,$lname,$email)
{
	$conn = connect();
	$sql= $conn -> prepare("INSERT INTO university(username,password,firstname,lastname,email)VALUES(?,?,?,?,?)");
	$sql -> bind_param("sssss",$uname,$pass,$fname,$lname,$email);
	$response=$sql->execute();
	$conn->  close();
	
	return $response;
}

function login($uname,$pass)
{
	$conn=connect();
	$sql = $conn->prepare("SELECT * FROM university WHERE username =? and password =?");
	$sql-> bind_param("ss",$uname,$pass);
	$sql-> execute();
	$records = $sql->get_result();
	return $records->num_rows === 1;

}
function update($uname,$pass)
{
	$conn = connect();
	$sql= $conn -> prepare("UPDATE university SET password = ? where username=?");
	$sql -> bind_param("ss",$pass,$uname);
	$response=$sql->execute();
	$conn->  close();
	
	return $response;
}
function registration($course,$section,$day,$time)
{
	$conn = connect();
	$sql= $conn -> prepare("INSERT INTO course(course,section,day,time)VALUES(?,?,?,?)");
	$sql -> bind_param("ssss",$course,$section,$day,$time);
	$response=$sql->execute();
	$conn->  close();
	
	return $response;
}


?>