<?php 
     session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="student"){
      header('Location: index.php?err=2');
    }
	require("utility.php");
	require("database.php");
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
      <form method="post" action="studenthandoutH.php" id="search-form">
        <fieldset>
          <div class="rowElem">
                <input type="text" name="term">
                <input type="submit" name="submit" value="SEARCH">
              
            </div>
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
       <form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem"><a href="student_viewpodcasts.php">
          <h2>CLICK TO VIEW PODCASTS</h2>
          <img src="images/podcasts.png" height="40" width="100"></a>
          </div>
        </fieldset>
      </form>
      <!--h2>Fresh <span>News</span></h2>
      <ul class="news">
        <li><strong>June 30, 2010</strong>
          <h4><a href="#">Sed ut perspiciatis unde</a></h4>
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </li>
        <li><strong>June 14, 2010</strong>
          <h4><a href="#">Neque porro quisquam est</a></h4>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit consequuntur magni. </li>
        <li><strong>May 29, 2010</strong>
          <h4><a href="#">Minima veniam, quis nostrum</a></h4>
          Uis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae. </li>
      </ul-->
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      <!--div class="inside">
        <h2>Recent <span>Articles</span></h2>
        <ul class="list">
          <li><span><img src="images/icon1.png"></span>
            <h4>About Template</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li><span><img src="images/icon2.png"></span>
            <h4>Branch Office</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
          <li class="last"><span><img src="images/icon3.png"></span>
            <h4>Student’s Time</h4>
            <p>Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi.</p>
          </li>
        </ul>
        <h2>Move Forward <span>With Your Education</span></h2>
        <p><span class="txt1">Eusus consequam</span> vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. </p>
        <div class="img-box"><img src="images/1page-img.jpg">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a non laorem lacingilla wisi. Nuncrhoncus eros <a href="#">maurien ulla</a> facilis tor mauris tincidunt et vitae morbi. Velelit condimentes in laorem quis nullamcorper nam fauctor feugiat pellent sociis.</div>
        <p class="p0">Eusus consequam vitae habitur amet nullam vitae condis phasellus sed justo. Orcivel mollis intesque eu sempor ridictum a <a href="#">non laorem</a> lacingilla wisi.</p>
      </div>
    </section-->
    <!---------------------------------------------->
    
     <?php
	//gettin user id using user's session username
	$username = $_SESSION['sess_username'];
	$sql2="select * from user where username='$username'";
	$rows2=ExecuteQuery($sql2);
	$row1 = mysql_fetch_array($rows2);
	$uid=$row1['user_id'];
	
	//using the students user id to search in students table and get course he/she is taking
	$sql3="select * from students where user_id='$uid'";
	$rows3=ExecuteQuery($sql3);
	$row2=mysql_fetch_array($rows3);
	$coursename=$row2['course'];
	
	//using the course to search in materials uploaded by lecturer to get content specific to students course.
	$sql="SELECT * FROM material_uploads WHERE course_name='$coursename'";
	$rows=ExecuteQuery($sql);
	//capture the added_by array and use it find the lecturers name by comparing it to user id in users table.
	$rows1=ExecuteQuery($sql);
	$rowa = mysql_fetch_array($rows1);
	$lid=$rowa['added_by'];
	$sql5="select fullname from user where user_id='$lid'";
	$rows6=ExecuteQuery($sql5);
	$row6=mysql_fetch_array($rows6);
	$lecturername=$row6['fullname'];
	
	
	echo "<br>
	<p class='bans'>$row1[fullname]'s handouts in $row2[course]:</p>";
	echo "<br>";
//loop through results specific to student and echo them
if (mysql_num_rows($rows) > 0)
{
	echo "<table cellpadding='2' cellspacing='2'>";
	
	while ($row = mysql_fetch_array($rows))
	{
		
		
		echo "<tr>";
		echo "<br/>";
		echo "<b>MATERIAL: </b>";
		echo "<a href='http://$row[file]' download='filename'>$row[material_name]</a>";
		echo "<br/>";
		echo "<b>UNIT NAME: </b>";
		echo $row['unit_name'];
		echo "<br/>";
		echo "<b>LECTURER NAME: </b>";
		echo $lecturername;
		echo "<br/>";
		echo "<b>TIME UPLOADED: </b>";
		echo $row['timestamp'];
		echo "<br/>";
		echo "<b>RATING: </b>";
		echo $row['rating'];
		echo "<br/>";
		echo "</tr>";
		echo"<form action='rateH.php' method='post' enctype='multipart/form-data' name = 'form1'>";
	echo"<table>";
	echo"<tr><td><B>RATE</B></td><td>:</td>
	<td><input type='hidden' name='matname' value='$row[material_name]'>
	<td><input type='hidden' name='uname' value='$row[unit_name]'>
	<td>
	<input type='radio' name='rate' value='1' checked='checked'>1
	<input type='radio' name='rate' value='2'>2
	<input type='radio' name='rate' value='3'>3
	<input type='radio' name='rate' value='4'>4
	<input type='radio' name='rate' value='5'>5
	</td></tr>
	<tr><td><input type='submit' value='Submit'></td>";
	
	echo "</table>";
	echo "</form>";
	echo "<hr/>";	
	}
	echo "</table>";
	
}
?>
    <!-------------------<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>------------------------------------------->
    
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
