<?php
$sub="";
if($_SERVER['REQUEST_METHOD']==="POST")
{
$sub=$_POST['sub'];
setcookie("sub",$sub,time()+60*60*365);
$_SESSION['sub']=$sub;
header("location:download_lectures.php");

}
else
{
	header("location:view_completed_course.php");
}




?>