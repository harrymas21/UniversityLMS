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
    <tr><td align="center">
    <a href="subadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD UNIT</strong></a>
    </td>
    <td align="center">
     <a href="testadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD TEST</strong></a>
    </td>
    <td align="center">
     <a href="questionadd.php"><img src="images/icon6.png" height="40" width="40"/><strong><br>ADD QUESTIONS</strong></a>
    </td>
    </tr></table>
    <p><br></p>
     <?php
    if($_POST[submit]=='VIEW')
	{
		extract($_POST);
		$quizsql=ExecuteNonQuery("SELECT * from mst_test where test_name='$quiz'",$cn);
		$mydat=mysql_fetch_array($quizsql);
		//echo"$mydat[test_id]"; testing to see if test id is being picked.
		echo"<P class='bans' align='center'>STUDENTS PERFOMANCE IN $mydat[test_name] QUIZ.</P>"; 
		$datas=ExecuteNonQuery("SELECT * from mst_result where test_id='$mydat[test_id]' ORDER BY score desc",$cn);
		// for testing purposes:: echo "$quizid[test_id]";
		echo "<table border='1' align='center'>
		<tr><th>NAME</th><th>REG. NO</th><th>COURSE</th><th>SCORE</th></tr>";
		while($dat=mysql_fetch_array($datas))
	  {
		  //looping to get students name from database.
		//  $ques="select * from user where user_id='$dat[login]'";
		  $ques=ExecuteNonQuery("select * from user where user_id='$dat[login]'");
		  $que = mysql_fetch_array($ques);
		  $query=ExecuteNonQuery("select * from students where user_id='$que[user_id]'");
		  $q= mysql_fetch_array($query);
		  echo"<tr><td>$que[fullname]</td><td>$q[regno]</td><td>$q[course]</td><td>$dat[score]</td></tr>";
		  }
		  echo"</table>";
	}
	//else echo"Button not clicked";
	?>
       
    <form name="form1" method="post">
     <table width="75%"  border="0" align="center">  
    <tr>
      <td height="26"><div align="left"><strong>Click to view student perfomance in your quizzes: </strong></div></td>
      <td>&nbsp;</td>
      <td>
      <select name="quiz" id="quizid">
      
	  <?php
      $que=ExecuteNonQuery("SELECT * from mst_test where added_by='$_SESSION[uid]'",$cn);
	  while($data=mysql_fetch_array($que))
	  {
		  echo "<option value='$data[test_name]'>$data[test_name]</option>";
		  }
		  ?>
        </select></td></tr>
        <tr>&nbsp;</tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="VIEW" ></td>
    </tr>
     </table></form>
        
        <!---------dispay teacher quizzess------------------->

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

