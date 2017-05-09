<?php  
 session_start();
ob_start();
require("utility.php"); ?>

<?php
$rnumber=$_POST['rnumber'];
$course=$_POST['course'];
$mnumber=$_POST['mnumber'];
$cyear=$_POST['cyear'];
$schoolname=$_POST['school'];
$facultyname=$_POST['faculty'];

$query1="select course_id from courses where course_name='$course'";
$rows1=mysql_query($query1);
$row1 = mysql_fetch_array($rows1);
$cid=$row1['course_id'];

$query2="select school_id from schools where school_name='$schoolname'";
$rows2=mysql_query ($query2);
$row2 = mysql_fetch_array($rows2);
$sid=$row2['school_id'];

$query3="select faculty_id from faculties where faculty_name='$facultyname'";
$rows3=mysql_query ($query3);
$row3 = mysql_fetch_array($rows3);
$fid=$row3['faculty_id'];


$uid=$_SESSION['sess_username'];

$check=ExecuteNonQuery("select * from students where regno='$rnumber' and user_id='$uid'");
if(mysql_num_rows($check)>0)
{
	header("location:studentregistration.php");
	
}
else
{
	$sql="INSERT INTO students (regno,user_id,course,school,faculty,course_year,mobilenumber) values
	 ('$rnumber',$uid,'$cid','$sid','$fid','$cyear','$mnumber')";
	$game="UPDATE students SET score=score+5 WHERE user_id='$uid'";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:studentnotification.php");
	$result2=ExecuteNonQuery($game);
}
else
{
		header("location:studentregistration.php");
}	
}

?> 	