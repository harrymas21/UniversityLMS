<?php 
session_start();
require("utility.php");
$username=$_SESSION['sess_username'];
$rate=$_POST['rate'];
$matname=$_POST['matname'];
$uname=$_POST['uname'];

$sql2="select fullname from user where username='$username'";
$rows=ExecuteNonQuery($sql2);
$row=mysql_fetch_array($rows);
$fullname=$row['fullname'];
$game="UPDATE students SET score=score+3 WHERE fullname='$fullname' and username='$username'";
$game1="UPDATE material_uploads SET views=views+1 WHERE material_name ='$matname' and unit_name='$uname'";

$sql="UPDATE material_uploads SET rating=rating+$rate WHERE material_name ='$matname' and unit_name='$uname'";
$result=ExecuteNonQuery($sql);
if ($result)
{
	header("location:studenthandout.php");
	$result2=ExecuteNonQuery($game);
	$result3=ExecuteNonQuery($game1);
}
else
echo"not rated: $matname , $uname";
?>