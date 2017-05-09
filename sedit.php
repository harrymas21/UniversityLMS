<?php session_start();
 require("utility.php");
 $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!="teacher")
	{
      header('Location: index.php?err=2');
	}
$rows = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic");

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
    <a href="atopic.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>MANAGE FORUM TOPIC</strong></a>
    </td>
    <td align="center">
     <a href="asubtopic.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>MANAGE FORUM SUB-TOPIC</strong></a>
    </td>
    </tr></table><br><br>
<?php
$id = $_GET['id'];
$str = "SELECT * FROM subtopic WHERE subtopic_id='".$_GET['id']."'";
	$result =ExecuteQuery($str);
	$row = mysql_fetch_array($result);
	?>
    <script type="text/javascript">
	function check(f)
	{
		if(f.sn.value=="")
		{
			document.getElementById("a").innerHTML="Please,Enter the subtopic....";
			//alert("Please,Enter The Subtopic ...");
			f.sn.focus();
			return false;
			}
			else if(f.sd.value=="")
			{
				document.getElementById("b").innerHTML="Please,Enter the subtopic description";
//				alert("Please,Enter The Subtopic Description..");
				f.sd.focus();
				return false;
				}
				else if(f.ss.value=="")
				{
					document.getElementById("c").innerHTML="Please,Enter the status";
					//alert("Please,Enter The Status..");
					f.ss.focus();
					return false;
					}
				else if(f.topic.value=="")
			
				{
					document.getElementById("d").innerHTML="Please,Enter the topicname..";
//					alert("Please,Enter The Topicname..");
					f.topic,focus();
					return false;
					}
			else
			return true;
		}
	</script>
     <h2 class="bans">EDIT SUB-TOPIC: <?php echo $row[
'subtopic_name']?> </h2>
       <form action="supdate.php" method="POST" onsubmit="return check(this)">
       	<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id"/>
<table>
<tr><td><strong>Subtopic name</strong></td><td>:</td><td><input type="text" name="sn"  value="<?php echo $row[
'subtopic_name']?>"><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td><strong>Subtopic Description</strong></td><td>:</td><td><input type="text" name="sd" value="<?php echo $row['subtopic_description'] ?>"><span id='b' style="color: red;"></span></td></tr><br/>
<tr><td><strong>Topic Name</strong></td><td>:</td><td><select name="topic">
    	<?php
			while($row1=mysql_fetch_array($rows))
				if ($row1["topic_id"] == $row["topic_id"])
					echo "<option value='$row1[topic_id]' selected='selected'>$row1[topic_name]</option>";
				else
					echo "<option value='$row1[topic_id]'>$row1[topic_name]</option>";
		?>
    </select><span id='d' style="color: red;"></span>
</td></tr>

<tr><td><input type="submit" value="Submit"></td></tr>	
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
