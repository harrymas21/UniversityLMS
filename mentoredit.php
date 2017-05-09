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
     <h2 class="bans">edit my details: </h2>
    <!-------where u update profile-------------------------------->
   <script type="text/javascript">
function check(f)
	{
		if (f.un.value == "")
		{
			document.getElementById("a").innerHTML="Please,Enter the username";
			//alert("Please, Enter The Username");
			f.un.focus();
			return false;
		}
		else if (f.fn.value == "")
		{
			document.getElementById("b").innerHTML="Please,Enter the fullname";
//			alert ("Please,Please Enter The Fullname");
			f.fn.focus();
			return false;
		}
		else if (f.pwd.value == "" || f.pwd.value.length<8 )
		{
			document.getElementById("c").innerHTML="Please,Enter a strong password";
			//alert ("Please,Please Enter The Password");
			f.pwd.focus();
			return false;
		}
		else if (f.e_mail.value == "")
		{
			document.getElementById("d").innerHTML="Please,Enter the e-mail add ";
			//alert ("Please,Please Enter The E-mail Address");
			f.e_mail.focus();
			return false;
		}
		else if (f.gender.value == "")
		{
			document.getElementById("e").innerHTML="Please,Select the gender";
			//alert("Please,Please Enter The Gender");
			f.gender.focus();
			return false;
		}
		else if (f.dob.value == "")
		{
			document.getElementById("f").innerHTML="Please,Enter the date of birth"
	//		alert ("Please,Please Enter The Date Of Birth");
			f.dob.focus();
			return false;
		}
		else if (f.add.value == "")
		{
			document.getElementById("i").innerHTML="Please,Enter your address";
			//alert ("Please,Please Enter The Address");
			f.add.focus();
			return false;
		}
		else if (f.sta.value == "")
		{
			document.getElementById("j").innerHTML="Please,Enter the city";
			//alert ("Please,Please Enter The State");
			f.sta.focus();
			return false;
		}
		else if (f.cou.value == "")
		{
			document.getElementById("k").innerHTML="Please,Enter the country";
//			alert ("Please,Please Enter The Country");
			f.cou.focus();
			return false;
		}
		
		else
			return true;
	}
</script>
<form action="mentorupdate.php" method="POST" onsubmit="return check(this)" enctype="multipart/form-data">

<?php
$sql="SELECT * from user where user_id=$_SESSION[uid]";
 
	$rows = ExecuteQuery($sql);
	
	if (mysql_num_rows($rows)>0)
	{
		$row = mysql_fetch_array ($rows);
		echo "<table align='center'>";
		echo "<tr><td>User Name</td><td> : </td><td><input type='text' name='un' value='$row[username]' ><span id='a' style='color: red';/></span></td></tr>";
		echo "<tr><td>Full Name</td><td> : </td><td><input type='text' name='fn' value='$row[fullname]' ><span id='b' style='color: red';/></span></td></tr>";
		echo "<tr><td>Password</td> <td> : </td><td><input type='password' name='pwd' value='$row[password]'><span id='c' style='color: red';/></span></td></tr>";
		echo "<tr><td>E-Mail</td><td> :</td><td> <input type='text' name='e_mail' value='$row[e_mail]'/><span id='d' style='color: red';/></span></td></tr>";
		echo "<tr><td>Gender</td><td> :</td><td> <input type='radio' name='gender' value='1' checked='checked' />male<input type='radio' name='gender' >female<span id='e' style='color: red';/></span></td></tr> ";
		echo "<tr><td>Date Of Birth</td> <td>: </td><td><input type='text' name='dob' value='$row[dob]'/><span id='f' style='color: red';/></span></td></tr>";
		echo "<tr><td>Profile Picture</td><td>:</td><td> <input type='file' name='ima' value=''/></td></tr> ";
		echo "<tr><td>Address</td><td> :</td><td> <textarea rows='3' cols='15' name='add' value='$row[address]'></textarea><span id='i' style='color: red';/></span></td></tr>";
		echo "<tr><td>City</td><td> :</td><td> <input type='text' name='sta' value='$row[city]'><span id='j' style='color: red';/></span></td></tr>";
		echo "<tr><td>Country</td><td> :</td><td><input type='text' name='cou' value='$row[country]'><span id='k' style='color: red';/></span></td></tr>";
		echo "</table>";	
	}
	
?>

	<input type="submit" value="Update">
    <input type="reset" value="Reset">
</form>

    <!-------------------------------------------------------->
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
</body>
</html>
