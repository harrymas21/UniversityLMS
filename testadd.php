<?php
session_start();
require("database.php");
error_reporting(1);
require("utility.php"); 
$role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher"){
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
           <li class="current"><a href="teacherhome.php" class="m1">Teacher Home</a></li>
          <li><a href="#" class="m4"><?php echo $_SESSION['sess_username'];?></a></li>
          <li><a href="tabout.php"  class="m3">ABOUT US</a></li>
          <li><a href="logout.php"  class="m4">LOG OUT</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <?php
			$username=$_SESSION['sess_username'];
			$sql5="select * from user where username='$username'";
            $rows5=ExecuteQuery ($sql5);
            $row5 = mysql_fetch_array($rows5);
            $pic=$row5['uimg'];
			echo "Welcome, <img src='$pic' style='height:70px; width:70px;'/>"
			?>
            </div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h2>Categories:</h2>
      <ul class="categories">
       <li><span><a href="handout.php">HANDOUTS</a></span></li>
        <li><span><a href="umaterial.php">UPLOAD MATERIALS</a></span></li>
        <ul>
        <li><a href="t_repositories.php">E REPOSITORIES</a></li>
         </ul>
        <li><span><a href="teacherquiz.php">ASSIGN QUIZ</a></span></li>
        <li><span><a href="podcasts.php">PODCASTS</a></span></li>
         <ul>
        <li><a href="tviewpodcasts.php">VIEW PODCASTS</a></li>
       	</ul>
        <li><span><a href="tforum.php">FORUM</a></span></li>
        <li><span><a href="manageforum.php">MANAGE FORUM</a></span></li>
        <li><span><a href="tmessages.php">MESSAGES</a></span></li>
        <li><span><a href="events.php">EVENTS</a></span></li>
      </ul>
      
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      <table border="2" align="center" bordercolor="#3399FF" width="80%">
    <tr><td align="center">
    <a href="subadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD UNIT</strong></a>
    </td>
    <td align="center">
     <a href="testadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD TEST</strong></a>
    </td>
    <td align="center">
     <a href="questionadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD QUESTIONS</strong></a>
    </td>
    </tr></table>
<?php
echo "<br><h2><p class='bans'>Add a Test: </p></h2>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
extract($_POST);
mysql_query("insert into mst_test(sub_id,test_name,course_name,course_year,total_que,added_by) 
values ('$subid','$testname','$course','$courseyear','$totque','$_SESSION[uid]')",$cn) or die(mysql_error());
echo "<p class='fans'>Test <b>\"$testname\"</b> Added Successfully.</p>";
unset($_POST);
}
?>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.testname.value;
if (mt.length<1) {
alert("Please Enter Test Name");
document.form1.testname.focus();
return false;
}
tt=document.form1.totque.value;
if(tt.length<1) {
alert("Please Enter Total Question");
document.form1.totque.value;
return false;
}
return true;
}
</script>
<form name="form1" method="post" onSubmit="return check();">
  <table width="90%"  border="0" align="center">
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
      <td width="3%" height="5">  
      <td width="48%" height="32"><select name="subid">
<?php
$rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	  while($row=mysql_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input name="testname" type="text" id="testname" required></td>
    </tr>
    <tr>
    <td height="26"><div align="left"><strong>Enter Course Name </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="course" id="co">
<?php
$que5=mysql_query("SELECT * from courses ORDER by course_name",$cn);
while($data5=mysql_fetch_array($que5))
{
echo "<option value='$data5[course_name]'>$data5[course_name]</option>";
}
?>
</select></td></tr>
 <tr>
      <td height="26"><div align="left"><strong>Course Year </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="courseyear" type="text" id="year" placeholder="E.g. 4(for fourth years)" required></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="totque" type="text" id="totque" required></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>

 </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="tabout.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by >Harry - Alfred - Jack</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>