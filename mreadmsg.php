<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="mentor"){
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
         <li class="current"><a href="mentor.php" class="m1">Mentor Home</a></li>
          <li><a href="#" class="m4"><?php echo $_SESSION['sess_username'];?></a></li>
          <li><a href="mabout.php"  class="m3">ABOUT US</a></li>
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
       <li><span><a href="mentoredit.php">EDIT PROFILE</a></span></li>
        <li><span><a href="mforum.php">FORUM</a></span></li>
        <li><span><a href="mentormsgs.php">MESSAGES</a></span></li>
      </ul>
      
    </aside>
    <section id="content">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      
    <!-------where u update status-------------------------------->
   <p align="center" style="color:blue"><strong>
<a href="javascript:void()" onclick="history.back()"><img src="images/EXIT2.JPG" style='height:70px; width:70px;'/><br>Back</a>
</strong>
<p>
<?php
	$rows = ExecuteQuery ("SELECT user_id_from, (select fullname from user where user_id=user_id_from) as fromname,  user_id_to, (select fullname from user where user_id=user_id_to) as toname FROM chatmaster where chat_id=$_GET[id]");
	
	$row = mysql_fetch_array ($rows);
	
	$fromid = $row["user_id_from"];
	$toid = $row["user_id_to"];
	$from = $row["fromname"];
	$to = $row["toname"];

	$sql = "SELECT * FROM chat WHERE chat_id=$_GET[id] ORDER BY cdatetime ASC";
	$rows = ExecuteQuery ($sql);


	while ($row = mysql_fetch_array($rows))
	{
		//<strong>$to : </strong>
		if ($row["user_id"] == $fromid)
		echo "<p align='left'><strong>$from : </strong>$row[message]<br>$row[cdatetime]</p>";	
		else
		echo "<p align='right' style='background-color:white'>$row[message]<br>$row[cdatetime]</p>";
			
		//echo "$row[message]";
		//echo "<p align='left'>$row[cdatetime]</p>";
		
		//echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
</p>
<script type="text/javascript">
function check(f)
{
	if(f.tt.value=="")
	{
		document.getElementById("f").innerHTML="Please,Enter the message....";
//		alert("Please,Enter The Message.........");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}
</script>
<form action="mwritemsg.php" method="POST" onsubmit="return check(this)">
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="chid" />
<table>

<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" required></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
</table>
</form>

   
   
    <!-------------------------------------------------------->
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 University LMS - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack </p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
