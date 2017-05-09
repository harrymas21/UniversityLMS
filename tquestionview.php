<?php 
session_start();
      $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher"){
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
			?></div>
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
     
    <?php 
$upd="update question set views=views+1 where question_id=$_GET[qid]";
$res=ExecuteNonQuery($upd);
	
$str="SELECT * from question, user where  user.user_id=question.user_id AND question_id=$_GET[qid]";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	$head="";
	
	if ($no_rows > 0)
	{	
		while($row = mysql_fetch_array($result))
		{
			$head = $row['heading'];
			echo "<h4>";
			
			echo "</h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='tanswer.php?id=$_GET[qid]'>
			<img src='images/reply.png' style='height:30px; width:30px;'/><br>
			REPLY</a></span>";
			
			echo "<br>";
			echo "<table>";
			echo "<tr><td valign='top' width='500px'>
				<img src='$row[uimg]' alt='' style='height:80px; width:80px;/><br>
			<td valign='top'>
			<b>$row[fullname]<br/>
			$row[datetime]<br/>
			RE: $head<br/>
			$row[question_detail]<br></b></tr>";
			echo "</table></span><div class='h10'></div>";
		}
	}
?>
<p align="center" style="color:orange"><strong>REPLIES:</strong>
</p>
<?php
	$sql="select * from answer,user where question_id=$_GET[qid] and answer.user_id=user.user_id ORDER BY  datetime desc";

	$result=ExecuteQuery($sql);
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{	
		
		while($row1 = mysql_fetch_array($result))
		{
			$qid=$_GET['qid'];
			echo "<span class='box2'>";
			echo "<span class='head'>
			<a href='tlike.php?id=$row1[answer_id]&que=$qid' class='view2' ><img src='images/like.png' style='height:30px; width:30px;'/><br>Like[..$row1[like]..]</a>
</span>";
	
			echo "<table>";
		    echo "<tr><td valign='top' width='500px'><img src='$row1[uimg]' style='height:50px; width:50px;/><br>
			<td valign='top'>
			<b>$row1[fullname]<br>
			Re : $head</b><br/>
			$row1[answer_detail]<br>
			$row1[datetime]<br/><br/></tr>";
			
			echo "</table></span><div class='h10'></div>";	
				}
	}	
?>
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
