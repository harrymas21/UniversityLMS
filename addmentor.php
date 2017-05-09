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
			?>
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
     
    <!----------registering mentors---------------------------->
    <script type="text/javascript">
	function check(form1)
	{
		if(
		form1.fname.value == "" ||
		form1.field.value == "" ||
		form1.username.value == "" ||
		form1.gender.value == "" ||
		form1.email.value == "" ||
		form1.role.value == "" ||
		form1.password.value == "" ||
		form1.city.value == "" ||
		form1.country.value == "" ||
		form1.field.value == "" ||
		form1.org.value == "")
		{
		
			if (form1.fname.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter the mentor's fullname.";
				//alert("Please, Enter The material name");
			form1.fname.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The registration");
				form1.fname.focus();
				
			}
			 if (form1.field.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter mentor's specialization.";
				//alert ("Please,Please Enter The Fullname");
				form1.field.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.field.focus();
			}
			
			if (form1.org.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter mentor's organization";
				//alert("Please, Enter your email.");
			form1.org.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.org.focus();		
			}
			if (form1.email.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter mentor's email";
				//alert("Please, Enter your email.");
			form1.email.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.email.focus();		
			}
			if (form1.username.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter mentor's username";
				//alert("Please, Enter your email.");
			form1.username.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.username.focus();		
			}
			if (form1.password.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter mentor's password";
				//alert("Please, Enter your email.");
			form1.password.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.password.focus();		
			}
			if (form1.city.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter mentor's city";
				//alert("Please, Enter your email.");
			form1.city.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.city.focus();		
			}
			if (form1.country.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter mentor's country";
				//alert("Please, Enter your email.");
			form1.country.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				//alert("Please, Please, Enter your email.");
				form1.country.focus();		
			}
			if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>
<h2 class="bans">add a new mentor: </h2>
<form action="addmentorH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<strong>
<table>
<tr><td>Mentor's Name</td><td>:</td><td><input type="text" name="fname" required><span id='a' style="color: red;"></span></td></tr>
<tr><td>Field</td><td>:</td><td><input type="text" name="field" required><span id='b' style="color: red;"></span></td></tr>
<tr><td>Organization</td><td>:</td><td><input type="text" name="org"required><span id='c' style="color: red;"></span></td></tr>
<tr><td>Email</td><td>:</td><td><input type="email" name="email" placeholder="xyz@domain.com" required><span id='d' style="color: red;"></span></td></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female<span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Username</td><td>:</td><td><input type="text" name="username"required><span id='e' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="text" name="password"required><span id='f' style="color: red;"></span></td></tr>
<tr><td>City</td><td>:</td><td><input type="text" name="city"required><span id='g' style="color: red;"></span></td></tr>
<tr><td>Country</td><td>:</td><td><input type="text" name="country"required><span id='h' style="color: red;"></span></td></tr>
<tr><td>Photo</td><td>:</td><td><input type="file" name="ima"required></td></tr>
<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr>
</table>
</strong>
</form>    
     <!-------------------------------------->
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 <a href="admin_about.php">University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
