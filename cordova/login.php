<?php
require("utility.php");
if(isset($_POST['login']))
{
$username=mysql_real_escape_string(htmlspecialchars(trim($_POST['username'])));
$password=mysql_real_escape_string(htmlspecialchars(trim($_POST['password'])));
$login=mysql_num_rows(ExecuteQuery("select * from user where username='$username' and password='$password'"));
echo "1........ $username<br>";
echo "2........ $password";
//$response=array();
if($login!=0)
{
	//$response["success"];
	//echo json_encode($response);
	echo"success";
}
else
{
	//$response["failed"];
	//echo json_encode($response);
	echo "failure";
}
}
?>