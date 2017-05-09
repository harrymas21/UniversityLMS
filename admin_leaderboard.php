<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="admin"){
      header('Location: index.php?err=2');
    }
	require("utility.php"); 
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
     <table border="1" bordercolor="#CC9900" align="center" width="80%">
    <tr><td align="center">
    <a href="adminstatistics.php"><img src="image/graph.jpg" height="40" width="40"/><strong><br>STATISTICS</strong></a></td>
    <!--td align="center">
     <a href="db_backup.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>BACK-UP</strong></a></td-->
      <td align="center">
     <a href="admin_leaderboard.php"><img src="images/leaderb.png" height="40" width="40"/><strong><br>LEADERBOARD</strong></a></td>
     </tr></table>
     <br><br>
    <h2 class="bans">Student Leaderboard: </h2>
        <?php	
    $sql="SELECT * FROM students ORDER BY score+quiz_score DESC LIMIT 20";
	$rows=ExecuteQuery($sql);
	$rank=1;
	echo "<p align='center' style='color:blue'>";
		echo"
		<table align=center id=leaderboard>
		<tr class=bans><th>RANK</th><th>STUDENT NAME</th><th>QUIZ SCORE</th><th>GAME SCORE</th></tr><br>";
		
		while ($row=mysql_fetch_array($rows))
		{	
		$query="select fullname from user where user_id=$row[user_id]";
		$querys=ExecuteQuery($query);
		$que=mysql_fetch_array($querys);
		echo
		"<tr class=style8>
		<td align=center>$rank</td><td align=center>$que[fullname]</td><td align=center>$row[quiz_score]</td>
		<td align=center>$row[score]</td>
		</tr>";
		$rank++;
		}
		echo"</table>";
		echo"</p>";
		?>
        <br>
        <a href="printleaderboard.php"><img src="images/downvote.png" height="50" width="50">PRINT LIST.</a>  
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
