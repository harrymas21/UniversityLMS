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
    <br><br><br>
  </header>
  <div class="container">
    <section id="content1">
      <div id="banner">
        <h2>Online <span>University <span>LMS</span></span></h2>
      </div>
      <div class="inside">
      <ul class="list">
          <li>
<script type="text/javascript">
	function check(form1)
	{
		if (form1.u_name.value == "")
		{
			document.getElementById("a").innerHTML="Please,Enter the username";
			//alert("Please, Enter The Username");
			form1.un.focus();
			return false;
		}
		else if (form1.f_name.value == "")
		{
			document.getElementById("b").innerHTML="Please,Enter the fullname";
//			alert ("Please,Please Enter The Fullname");
			form1.fn.focus();
			return false;
		}
		else if (form1.pwd.value == "" || form1.pwd.value.length<8 )
		{
			document.getElementById("c").innerHTML="Please, Enter an alphanumeric password with more than 8 characters";
			//alert ("Please,Please Enter The Password");
			form1.pwd.focus();
			return false;
		}
		else if (form1.e_mail.value == "")
		{
			document.getElementById("d").innerHTML="Please,Enter a valid e-mail address";
			//alert ("Please,Please Enter The E-mail Address");
			form1.e_mail.focus();
			return false;
		}
		else if (form1.gender.value == "")
		{
			document.getElementById("spuid").innerHTML="Please,Select the gender";
			//alert("Please,Please Enter The Gender");
			form1.gender.focus();
			return false;
		}
		else if (form1.dob.value == "")
		{
			document.getElementById("e").innerHTML="Please,Enter the date of birth"
	//		alert ("Please,Please Enter The Date Of Birth");
			form1.dob.focus();
			return false;
		}
		else if (form1.add.value == "")
		{
			document.getElementById("f").innerHTML="Please,Enter your address";
			//alert ("Please,Please Enter The Address");
			form1.add.focus();
			return false;
		}
		else if (form1.sta.value == "")
		{
			document.getElementById("g").innerHTML="Please,Enter the city";
			//alert ("Please,Please Enter The State");
			form1.sta.focus();
			return false;
		}
		else if (form1.cou.value == "")
		{
			document.getElementById("h").innerHTML="Please,Enter the country";
//			alert ("Please,Please Enter The Country");
			form1.cou.focus();
			return false;
		}
		
		else
			return true;
	}
</script>

<p class="bans">Enter your details, For teachers and mentors contact the administrator</p>
<h1>&nbsp;</h1>
<form action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
<strong>
<table align="center">
<tr><td>Username</td><td>:</td><td><input type="text" name="u_name" required><span id='a' style="color: red;"></span></td></tr>
<tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name" required><span id='b' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pwd" minlength="8" required><span id='c' style="color: red;"></span></td></tr>
<tr><td>E_Mail</td><td>:</td><td><input type="email" name="e_mail" placeholder="xyz@domain.com" required><span id='d' style="color: red;"></span></td></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female<span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Date Of Birth</td><td>:</td><td><input type="text" name="dob" required><span id='e' style="color: red;"></span></td></tr>
<tr><td>Image</td><td>:</td><td><input type="file" name="ima" required></td></tr>
<tr><td>Address</td><td>:</td><td><textarea rows="3" cols="15" name="add" required></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td>City</td><td>:</td><td><input type="text" name="sta" required><span id='g' style="color: red;"></span></td></tr>
<tr><td>Country</td><td>:</td><td><input type="text" name="cou" required><span id='h' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr>
</table>
</strong>
</form>
 </li>
 </ul>
 <p align="center">
 <h4><a href="index.php"><img src="images/HOME2.JPG" height="50" width="50"><BR>BACK TO LOGIN</h4>
 </p>
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 University LMS - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->