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
          <li class="last"><a href="logout.php">Logout</a></li>
          <!--li><a href="about-us.html" class="m2">About Us</a></li>
          <li><a href="articles.html" class="m3">Our Articles</a></li>
          <li><a href="contact-us.html" class="m4">Contact Us</a></li>
          <li class="last"><a href="sitemap.html" class="m5">Sitemap</a></li-->
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
    <?php
include("libchart/libchart/classes/libchart.php");
//header("Content-type:image/png");
$rows=ExecuteQuery("select * from material_uploads where added_by='$_SESSION[uid]'");
$chart=new VerticalBarChart(700,500);
$dataset=new XYDataSet();
while ($row = mysql_fetch_array($rows))
	{
$dataset->addPoint(new Point($row['unit_name'],$row['rating']));
//$dataset->addPoint(new Point("Feb 2005",321));
//$dataset->addPoint(new Point("March 2005",442));
//$dataset->addPoint(new Point("April 2005",711));
	}
	$chart->setDataSet($dataset);
$chart->setTitle("$row5[fullname] handout ratings");
$chart->render('libchart/statistics.png');
?>
 <?php
include("libchart/libchart/classes/libchart.php");
//header("Content-type:image/png");
$res=ExecuteQuery("select * from material_uploads where added_by='$_SESSION[uid]'");
$chart1=new VerticalBarChart(700,500);
$dataset1=new XYDataSet();
while ($re= mysql_fetch_array($res))
	{
$dataset1->addPoint(new Point($re['unit_name'],$re['views']));
//$dataset->addPoint(new Point("Feb 2005",321));
//$dataset->addPoint(new Point("March 2005",442));
//$dataset->addPoint(new Point("April 2005",711));
	}
	$chart1->setDataSet($dataset1);
$chart1->setTitle("$row5[fullname] handout views");
$chart1->render('libchart/statistics_views.png');
?>
<img src='libchart/statistics.png'>
<br><br><br>
<img src='libchart/statistics_views.png'>
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