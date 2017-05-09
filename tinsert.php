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
             <!--------Getting profile picture----------------->
            <?php
			
			$username=$_SESSION['sess_username'];
			$sql5="select * from user where username='$username'";
            $rows5=ExecuteQuery ($sql5);
            $row5 = mysql_fetch_array($rows5);
            $pic=$row5['uimg'];
			echo "Welcome, <img src='$pic' style='height:70px; width:70px;'/>"
			?>
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
         <ul>
                				<li><a href="atopic.php">Manage topic</a></li>
                				<li><a href="asubtopic.php">Manage Subtopic</a></li>
                			</ul>
        <li><span><a href="tmessages.php">MESSAGES</a></span></li>
        <li><span><a href="events.php">EVENTS</a></span></li>
      </ul>
     
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      
<!------------------->
<table border="2" align="center" bordercolor="#3399FF" width="80%">
    <tr>
    <td align="center">
    <a href="atopic.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>MANAGE FORUM TOPIC</strong></a>
    </td>
    <td align="center">
     <a href="asubtopic.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>MANAGE FORUM SUB-TOPIC</strong></a>
    </td>
    </tr>
    </table><br><br>
<h2 class="bans">ENTER DETAILS FOR THE NEW TOPIC BELOW: </h2>
<script type="text/javascript">
function check(f)
{
	if(f.tn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the topic name..";
	//	alert("Please,Enter The Topic Name..");
		f.tn.focus();
		return false;
	}
	else if(f.tt.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the topic type..";
		//alert("Please,Enter The Topic Type..");
		f.tt.focus();
		return false;
	}
	else
	return true;
	}
</script>
<form action="tinsertH.php" method="POST" onsubmit="return check(this)">
<table align="center">
<tr><td>Topic Name</td><td>:</td><td><input type="text" name="tn" placeholder="API" required><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td>Topic Type</td><td>:</td><td><input type="text" name="tt" placeholder="mpesa api" required><span id='b' style="color: red;"></span></td></tr><br/>
<tr><td><input type="submit" value="Submit"></td></tr>	
</table>
</form>
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
