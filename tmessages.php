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
     
    <!------------------------------------->
    <script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>


<a href="teachersearch.php"><img src="images/reply.png" style='height:70px; width:70px;'/><br>Send New Message</a>
<hr/>

<?php
	//first fetch whom u have send chats 
	echo"<p class='tot'>SENT MESSAGES: </p>";
	echo"<br>";
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_to=user.user_id AND chatmaster.user_id_from=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='treadmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
		echo"<p align='right'><a href='chatdelete.php?id=$row[chat_id]'><img src='res/images/delete.jpg' style='height:15px; width:15px;'/>
		<strong>DELETE CHAT</strong></a></p>";
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
	
	echo"<br>";
	// now fetch those that have sent chats to you
	echo "<p class='tot'>RECEIVED MESSAGES: </p>";
	echo"<br>";
	
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM Chatmaster, user WHERE chatmaster.user_id_from=user.user_id AND chatmaster.user_id_to=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='treadmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
		echo"<p align='right'><a href='chatdelete.php?id=$row[chat_id]'><img src='res/images/delete.jpg' style='height:15px; width:15px;'/>
		<strong>DELETE CHAT</strong></a></p>";
	
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
			
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
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
