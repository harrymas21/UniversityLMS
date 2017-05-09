<?php 
     session_start();
require("database.php");
error_reporting(1);
require("utility.php"); 
$role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="student")
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
          <li class="current"><a href="studenthome.php" class="m1">Student Home</a></li>
          <li><a href="#" class="m4"><?php echo $_SESSION['sess_username'];?></a></li>
          <li><a href="about.php"  class="m3">ABOUT US</a></li>
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
			?></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h2>Categories:</h2>
      <ul class="categories">
       <li><span><a href="studentregistration.php">REGISTER FOR COURSE</a></span></li>
        <li><span><a href="studenthandout.php">HANDOUTS</a></span></li>
        <ul>
                				<li><a href="viewteachers.php">VIEW TEACHERS</a></li>
                			</ul>
                            <ul>
                				<li><a href="repository.php">E REPOSITORIES</a></li>
                			</ul>
        <li><span><a href="quiz.php">QUIZ</a></span></li>
        <li><span><a href="forum.php">FORUM</a></span></li>
        <li><span><a href="smessages.php">MESSAGES</a></span></li>
         <li><span><a href="viewleaderboard.php">LEADER-BOARD</a></span></li>
         <li><span><a href="smentor.php">MENTORS</a></span></li>
      </ul>
      <form action="#" id="newsletter-form2">
        <fieldset>
          <div class="rowElem">
             <p align="center" class="bans" ><a href="studentedit.php">CLICK TO EDIT PROFILE<br>
            <img src="images/hi_scorez2.jpg" height="70" width="70"></a></p>
          </div>
        </fieldset>
      </form>
     
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
     
<?php
$uid=$_SESSION['uid'];
echo "<br><h2><div class=bans>Register For a Course....</div></h2>";
if($_POST[submit]=='Register')
{
extract($_POST);
//check if student exists
$check=ExecuteNonQuery("select * from students where user_id='$uid'");
if(mysql_num_rows($check)>0)
{
	echo "<p align='center' style='color:red'>Hey <b>\"$_SESSION[sess_username]\"</b>, you already registered...</p>";
	//echo "$score : ...........<br> $course : ,,,,,,,,,,,";

}
else
{
$result=mysql_query("insert into students(regno,user_id,course,school,faculty,mobilenumber) values 
('$regno','$uid','$course','$school','$faculty','$mnumber')",$cn) or die(mysql_error());
$game="UPDATE students SET score=score+5 WHERE user_id='$uid'";
if ($result)
{
	$result2=ExecuteNonQuery($game);
	echo "<p align='center' style='color:red'>Hey <b>\"$_SESSION[sess_username]\"</b>, registration successful.</p>";
	unset($_POST);
}
}
}
?>
  <SCRIPT LANGUAGE="JavaScript">
function check() {
rn=document.form1.regno.value;
if (rn.length<1) {
alert("Please Enter Registration Number");
document.form1.regno.focus();
return false;
}
co=document.form1.course.value;
if (co.length<1) {
alert("Please Enter Course Name");
document.form1.course.focus();
return false;
}
sc=document.form1.school.value;
if (sc.length<1) {
alert("Please Enter School Name");
document.form1.school.focus();
return false;
}
ft=document.form1.faculty.value;
if (ft.length<1) {
alert("Please Enter Faculty Name");
document.form1.faculty.focus();
return false;
}
mn=document.form1.mnumber.value;
if (mn.length<1) {
alert("Please Enter Mobile Number");
document.form1.mnumber.focus();
return false;
}
return true;
}
</script>
<?php 
$sql2="select * from user where username='$_SESSION[sess_username]'";
$rows=ExecuteQuery($sql2);
$row = mysql_fetch_array($rows);
echo "<b><p style='color:blue'>FULLNAME: </b>$row[fullname]";
echo "<br>";
echo "<b>USERNAME: </b>$row[username]";
echo "<br>";
echo "<b>E-MAIL: </b>$row[e_mail]</p>";
?>
<form name="form1" method="post" onSubmit="return check();">
  <table width="85%"  border="0" align="center">   
    <tr>
        <td height="26"><div align="left"><strong> Enter Registration Number: </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="regno" type="text" id="rn" required></td>
    </tr>
    <tr>&nbsp;</tr>
    <tr>
    <td height="26"><div align="left"><strong>Enter Course Name </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="course" id="co">
<?php
$que5=mysql_query("SELECT * from courses",$cn);
while($data5=mysql_fetch_array($que5))
{
echo "<option value='$data5[course_name]'>$data5[course_name]</option>";
}
?>
</select></td></tr>
 <tr>
      <td height="26"><div align="left"><strong>Enter Faculty Name </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="faculty" id="ft">
<?php
$que1=mysql_query("SELECT * from faculties",$cn);
while($data1=mysql_fetch_array($que1))
{
echo "<option value='$data1[faculty_name]'>$data1[faculty_name]</option>";
}
?>
</select></td></tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter School Name </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="school" id="sc">
<?php
$que=mysql_query("SELECT * from schools",$cn);
while($data=mysql_fetch_array($que))
{
echo "<option value='$data[school_name]'>$data[school_name]</option>";
}
?>
</select></td></tr>
<tr>
        <td height="26"><div align="left"><strong> Enter Course Year: </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="cyear" type="text" id="cy" required></td>
    </tr>
     <tr>
        <td height="26"><div align="left"><strong> Enter Mobile Number: </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="mnumber" type="text" id="mn" required></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Register" ></td>
    </tr>
  </table>
</form>

    <!--.............................
    //get course id
$query1="select course_id from courses where course_name=$course";
$rows1=mysql_query($query1);
$row1 = mysql_fetch_array($rows1);
$cid=$row1['course_id'];
echo $cid;

//get school id
$query2="select school_id from schools where school_name=$school";
$rows2=mysql_query ($query2);
$row2 = mysql_fetch_array($rows2);
$sid=$row2['school_id'];
echo $sid;

//get faculty id
$query3="select faculty_id from faculties where faculty_name=$faculty";
$rows3=mysql_query ($query3);
$row3 = mysql_fetch_array($rows3);
$fid=$row3['faculty_id'];......................................-->
    
      <div>
    <section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="about.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
