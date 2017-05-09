<?php  
ob_start();
require("utility.php"); ?>

<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$role="student";
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));
if($role == "mentor" || $role== "teacher")
{
	header("location:mentorReg.php");
}

else{
	$check=ExecuteNonQuery("select * from user where username='$u_name'");
	if(mysql_num_rows($check)>0){
		header("location:register.php?info?=Username already exists");
		}
		else
		$sql="INSERT INTO user (username,fullname,role,password,e_mail,gender,dob,address,city,country,uimg) values
		('$u_name','$f_name','$role','$pwd','$e_mail','$gender','$dob','$add','$sta','$cou','$path')";
		$result=ExecuteNonQuery($sql);
		if($result){
			header("location:notification.php");
			}
			else
			{
				header("location:register.php");
				}
				}
?> 	