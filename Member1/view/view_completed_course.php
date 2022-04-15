<?php

$CGPA="";


?>

<!doctype html>
	<html>
	<link rel="stylesheet" type="text/css" href="../view/image2.css">
	<body >
	<div style = "background:beige;position: absolute; top: 80%; left: 50%; transform: translate(-49%, -49%) ;"> 
	<form action="../view/view_completed_course-action.php" method="POST">
		

		<dl>
			<dd><h3 style="color:chocolate;">*** 2018-19,Spring</h3></dd>
			</dl>
			<table border>
				<tr>
				<th> Class ID</th>
				<td > Subjects</td>
				<th>Credits</th>
				<th>Mid term Grade</th>
				<th>Final tern Grade</th>
				<th>Final Grade</th>
				<th>Total GPA </th>
				<th >CGPA</th>
				<th>Download Lectures/Slides</th>
			</tr>
			<tr>

				<td> 01144</td>
				<td > English</td>
				<td> 3.00</td>
				<td> A</td>
				<td> B+ </td>
				<td> B+</td>
				<td> 10.50</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
			</tr>
			<tr>
				<td> 01255</td>
				<td> Physics</td>
				<td> 3.00</td>
				<td> C</td>
				<td> A </td>
				<td> B+</td>
				<td> 3.50</td>
				<td value="<?php echo $CGPA?>">3.57</td>
				<td><a href="../view/download_lectures.php">Download</a></td>

				
			</tr>
			<tr>
				<td> 01474</td>
				<td> Introduction To Programming</td>
				<td> 3.00</td>
				<td> B+</td>
				<td> B+ </td>
				<td> A</td>
				<td> 11.25</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>


				
			</tr>
			<tr>
				<td> 01497</td>
				<td> Math 1</td>
				<td> 3.00</td>
				<td> B+</td>
				<td> B </td>
				<td> B+</td>
				<td> 10.50</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>


				</tr>
			</table>
			<dl>
			<dd><h3 style="color:chocolate;">*** 2018-19,Summer</h3></dd>
			</dl>
			<table border="th">
				<tr>
				<th> Class ID</th>
				<th> Subject</th>
				<th>Credits</th>
				<th>Mid term Grade</th>
				<th>Final tern Grade</th>
				<th>Final Grade</th>
				<th>Total GPA </th>
				<th>CGPA</th>
				<th>Download Lectures/Slides</th>
			</tr>
			<tr>
				<td> 00099</td>
				<td> Data Structure</td>
				<td> 3.00</td>
				<td> C+</td>
				<td> B+ </td>
				<td> B</td>
				<td> 9.75</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				

			</tr>
			<tr>
				<td> 00114</td>
				<td> Data Structure Lab</td>
				<td> 1.00</td>
				<td> A</td>
				<td> A </td>
				<td> A</td>
				<td> 3.75</td>
				<td>3.54</td>
				<td><a href="../view/download_lectures.php">Download</a></td>

				
			</tr>
			<tr>
				<td> 00139</td>
				<td> Discrete Mathematics</td>
				<td> 3.00</td>
				<td> A</td>
				<td> A+ </td>
				<td> A+</td>
				<td> 11.25</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
			</tr>
			<tr>
				<td> 00320</td>
				<td> Math 2</td>
				<td> 3.00</td>
				<td> A</td>
				<td> A+</td>
				<td> A+</td>
				<td> 12.00</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				</tr>
			</table>
			<dd><h3 style="color:chocolate;">*** 2019-20,Fall</h3></dd>
			</dl>
			<table border="th">
				<tr>
				<th> Class ID</th>
				<th> Subject</th>
				<th>Credits</th>
				<th>Mid term Grade</th>
				<th>Final tern Grade</th>
				<th>Final Grade</th>
				<th>Total GPA </th>
				<th>CGPA</th>
				<th>Download Lectures/Slides</th>
			</tr>
			<tr>
				<td> 00015</td>
				<td> Algorithms</td>
				<td> 3.00</td>
				<td> A+</td>
				<td> A </td>
				<td> A+</td>
				<td> 12.00</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
			</tr>
			<tr>
				<td> 00266</td>
				<td> Math 3</td>
				<td> 3.00</td>
				<td> A+</td>
				<td> B+ </td>
				<td> A</td>
				<td> 11.25</td>
				<td>3.59</td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				
			</tr>
			<tr>
				<td> 00366</td>
				<td> Physics 2</td>
				<td> 3.00</td>
				<td> B+</td>
				<td> A </td>
				<td> A</td>
				<td> 11.25</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				
			</tr>
			<tr>
				<td> 00320</td>
				<td> Physics 2 Lab</td>
				<td> 1.00</td>
				<td> B</td>
				<td> B+</td>
				<td> B+</td>
				<td> 12.00</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				</tr>
				<tr>
				<td> 01107</td>
				<td> Economics</td>
				<td> 3.00</td>
				<td> A+</td>
				<td> B</td>
				<td> B+</td>
				<td> 12.00</td>
				<td></td>
				<td><a href="../view/download_lectures.php">Download</a></td>
				</tr>
			</table>
			<br>
			<a href="../control/view_profile_action.php">Back to View Profile</a>
</form>
</body>
	</html>



