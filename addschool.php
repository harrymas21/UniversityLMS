<?php 
   session_start();
require("database.php");
error_reporting(1);
require("utility.php"); 
$role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin")
	{
      header('Location: index.php?err=2');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>University LMS</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <!--h1><a href="#">Student's site</a></h1-->
      <nav>
        <ul>
          <li class="current"><a href="adminhome.php" class="m1">admin Home</a></li>
          <li><a href="#" class="m4"><?php echo $_SESSION['sess_username'];?></a></li>
          <li><a href="admin_about.php"  class="m3">ABOUT US</a></li>
          <li><a href="logout.php"  class="m4">LOG OUT</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
           <!--------Getting profile picture----------------->
            <?php
						$username=$_SESSION['sess_username'];
			$sql5="select * from user where username='$username'";
            $rows5=ExecuteQuery ($sql5);
            $row5 = mysql_fetch_array($rows5);
            $pic=$row5['uimg'];
			echo "Welcome, <img src='$pic' style='height:70px; width:70px;'/>"
			?> </div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h2>Categories:</h2>
      <ul class="categories">
       <li><span><a href="manageuser.php">MANAGE USERS</a></span></li>
        <li><span><a href="addmentor.php">ADD MENTOR</a></span></li>
        <li><span><a href="addteacher.php">ADD TEACHER</a></span></li>
         <li><span><a href="addcourse.php">ADD COURSE</a></span></li>
         <li><span><a href="addfaculty.php">ADD FACULTY</a></span></li>
         <li><span><a href="addschool.php">ADD SCHOOL</a></span></li>
         <li><span><a href="amessages.php">MY MESSAGES</a></span></li>
      </ul>
     
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      
    <!-------------------------------------->
    <?php
	$adminid=$_SESSION['uid'];
echo "<br><h2><div  class=bans>Add School: </div></h2>";
if($_POST[submit]=='Add')
{
extract($_POST);

//insert into database
mysql_query("INSERT into schools(school_name,faculty_name,added_by) values 
('$schoolname','$facultyname','$adminid')",$cn) or die(mysql_error());
echo "<p align='center' style='color:red'>School <b>\"$schoolname\"</b> Added Successfully.</p>";
unset($_POST);
}
else
echo"<p align='center' style='color:red'>Sorry! <b>\"$schoolname\"</b> not added... </p>";
?>
<SCRIPT LANGUAGE="JavaScript">
function check() 
{
st=document.form1.schoolname.value;
if (st.length<1) 
{
alert("Please Enter School Name");
document.form1.schoolname.focus();
return false;
}
ft=document.form1.facultyname.value;
if (ft.length<1)
{
alert("Please Enter Faculty Name");
document.form1.facultyname.focus();
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">

  <table width="75%"  border="0" align="center">   
    <tr>
      <td height="26"><div align="left"><strong>Enter School Name </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="schoolname" type="text" id="schoolname" required></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Faculty Name </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="facultyname">
<?php
$que=mysql_query("SELECT * from faculties",$cn);
while($data=mysql_fetch_array($que))
{
echo "<option value='$data[faculty_name]'>$data[faculty_name]</option>";
}
?>
</select></td></tr>
      </td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>

    
    
    
    <!------------------------
    //get faculty id
$query3="select faculty_id from faculties where faculty_name=$facultyname";
$rows3=mysql_query ($query3);
$row3 = mysql_fetch_array($rows3);
$fid=$row3['faculty_id'];
-------------->
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="admin_about.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
