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
          <p class="bans">Sign in with your credentials here:</p>
            <p> 
            <?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="fans">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="fans">'.$errors[$error_id].'</p>';
                                    }
                               ?>          </p>
                               <table align="center" width="650px">
                               <tr><td>
                               <form action="authenticate.php" method="POST" role="form" >     
         <h3>USERNAME:</h3><input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
         <h3> PASSWORD:</h3><input type="password" name="password" class="form-control" placeholder="Password" required><br/>
                         <button class="btn btn-lg btn-primary btn-block" type="submit"><h3>SIGN IN </h3>
                         </button>
                         </form>
                         </td>
                        <td><img src="images/login.jpg" height="180" width="300"></td>
                        <td style="color:blue">
                        Welcome to an interactive self-learning &copy;2016 University LMS<br>
                        Unique access anywhere with on-demand course <br>content featuring renowned mentors and academicians<br>
                        </td>
                        </tr></table>
                         <br>
                         <p class="bans"><a href="register.php">Are you new? Sign up here:</a></p>                     
          </li>
        </ul>
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2016 University LMS</a> - All Rights Reserved - </p>
    <p class="rf">Design by Harry - Alfred - Jack</p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
