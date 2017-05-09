<?php  
 session_start();
ob_start();
require("utility.php"); 
?>

<?php
$role="mentor";
$fname=$_POST['fname'];
$field=$_POST['field'];
$org=$_POST['org'];
$email=$_POST['email'];
$uname=$_POST['username'];
$password=$_POST['password'];
$city=$_POST['city'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$username=$_SESSION['sess_username'];
$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="files/$ima";
move_uploaded_file($imup, $path);

$sql2="select * from user where username='$username'";
$rows=ExecuteQuery ($sql2);
$row = mysql_fetch_array($rows);
$uid=$row['user_id'];


//$image = chunk_split(base64_encode(file_get_contents( $imup )));
$sql5="INSERT INTO user (username,fullname,role,password,e_mail,gender,city,country,uimg) values ('$uname','$fname','$role','$password','$email','$gender','$city','$country','$path')";
$result2=ExecuteNonQuery ($sql5);

$sql6="select * from user where username='$uname'";
$rows5=ExecuteQuery ($sql6);
$row5 = mysql_fetch_array($rows5);
$userid=$row5['user_id'];

$sql="INSERT INTO mentors (field,user_id,organization,added_by) values 
('$field','$userid','$org','$uid')";
$result=ExecuteNonQuery ($sql);

if(!($result && $result2))
{
	header("location:addmentor.php");
}
else if ((!$result && $result2) || (!$result2 && $result))
{
	header("location:addmentor.php");
	}
else
{
		header("location:adminhome.php");
}
?> 