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
     <P class="bans">Forum: </p>
    <!------forum----------------------------->
 <script type="text/javascript">
	function check(f)
	{
		if(f.ata.value=="")
		{
			document.getElementById("spuid").innerHTML = "Please, Enter Answer.";
			//alert("Please,Enter The Answer")
			f.ata.focus();
			return false;
			}
			else
			return true;
		}
</script>

<?php
$sql="SELECT heading from question where question_id=$_GET[id]";
$rows=ExecuteQuery($sql);
$row=mysql_fetch_array($rows);
?>

<form action="manswerH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["id"] ?>" name="qid" />
<table>
<tr><td><b>RE : <?php echo $row["heading"] ?></b></td></tr>
<tr><td>Answer:</td></tr><br/>
<tr><td><textarea rows="4" cols="38" name="ata" required></textarea><span id='spuid' style="color: red;"></span></td></tr><br/>
<tr><td><input type="submit" value="Go"></td></tr>
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
