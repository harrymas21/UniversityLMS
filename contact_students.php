<?php 
    session_start();
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
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="chat.js"></script>
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
			$user=$_SESSION['sess_username'];
			$sql5="select * from user where username='$user'";
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
        <li><span><a href="teacherquiz.php">ASSIGN QUIZ</a></span></li>
        <li><span><a href="podcasts.php">PODCASTS</a></span></li>
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
    <tr>
     <td align="center">
    <a href="teacheredit.php"><img src="images/hi_scorez2.jpg" height="40" width="40"/><strong><br>EDIT PROFILE</strong></a>
    </td>
    <td align="center">
    <a href="statistics.php"><img src="image/graph.jpg" height="40" width="40"/><strong><br>STATISTICS</strong></a>
    </td>
    <td align="center">
     <a href="contact_students.php"><img src="images/reply.png" height="40" width="40"/><strong><br>CONTACT <BR> STUDENTS</strong></a>
    </td>
    <td align="center">
     <a href="forumblock.php"><img src="images/LOCKPASS.JPG" height="40" width="40"/><strong><br>BLOCK STUDENT <BR> FROM FORUM</strong></a>
    </td>
    <td align="center">
     <a href="forum_unblock.php"><img src="images/unlock.png" height="40" width="40"/><strong><br>UNBLOCK STUDENT <BR> FROM FORUM</strong></a>
    </td>
    </tr></table>
    <br><br>
      <p class="bans">Contact Students: </p>
    <?php
	require_once("AfricasTalkingGateway.php");
	$username = "harryshaulin";
	$apiKey = "4e888176b486e1596292a628030fceb874c05f0f389c10281b740ceb20a7215c";
    if($_POST[submit]=='SEND')
	{
		extract($_POST);
		$sql = "select mobilenumber from students where course = '$coursename'";
		$rows = ExecuteQuery($sql);
		while($row = mysql_fetch_array($rows)){
			$data[] = $row['mobilenumber'];
			}
			$recipients = implode(",",$data);
			//echo $recipients."<br>";
			//echo $message."<br>";
			$gateway  = new AfricasTalkingGateway($username, $apiKey);
			try
			{
				$results = $gateway->sendMessage($recipients, $message);
				if ($results){
					echo "<p class='fans'>Message delivered to students</p>";
					}
				}
	 catch
		 (AfricasTalkingGatewayException $e)
		 {
			 echo "<p class='fans'>Encountered an error while sending: </p>". $e -> getMessage();
			 }
		 }
?>
    <form name="form1" method="post" >
    <table width="75%" border="0" align="center">   
    <tr>
     <td height="26"><div align="left"><strong>Choose Course Name of the Students:</strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="coursename">
<?php
$que=ExecuteQuery("SELECT * from courses",$cn);
while($data=mysql_fetch_array($que))
{
echo "<option value='$data[course_name]'>$data[course_name]</option>";
}
?>
</select>
</td></tr>
<tr><td><textarea rows="4" cols="30" name="message" placeholder="Enter your message here.."></textarea></td></tr>
<tr><td><input type="submit" name="submit" value="SEND"></td></tr>
</table>
</form>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="tabout.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
