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
        <li><span><a href="teacherquiz.php">ASSIGN QUIZ</a></span></li>
        <li><span><a href="podcasts.php">PODCASTS</a></span></li>
        <li><span><a href="tforum.php">FORUM</a></span></li>
        <li><span><a href="manageforum.php">MANAGE FORUM</a></span></li>
        <li><span><a href="tmessages.php">MESSAGES</a></span></li>
        <li><span><a href="events.php">EVENTS</a></span></li>
      </ul>
      <!--form action="#" id="newsletter-form">
        <fieldset>
          <div class="rowElem">
            <h2>ONLINE USERS:</h2>
           
          </div>
        </fieldset>
      </form-->
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
   <p class="fans">Student successfully un-blocked from using the forum...</p> 
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="tabout.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
