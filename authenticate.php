<?php 
	require 'database-config.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM user WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		
		$_SESSION['uid'] = $row['user_id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: adminhome.php');
		}
		
		elseif( $_SESSION['sess_userrole'] == "mentor"){
			header('Location: mentor.php');
		}
		
		elseif( $_SESSION['sess_userrole'] == "teacher"){
			header('Location: teacherhome.php');
		}
		
		else{
			header('Location: studenthome.php');
		}
		
		
	}


?>