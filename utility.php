<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("university_lms",$con);
		
		$rows = mysql_query ($SQL);
		
		mysql_close ();
		
		return $rows;
		if(!$con)
		{
			echo "Sorry unable to connect to database!!";
			}
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysql_connect ("localhost", "root","");
		mysql_select_db ("university_lms",$con);
		
		$result = mysql_query ($SQL);
		
		mysql_close ();
		
		return $result;
		if(!$con)
		{
			echo "Sorry unable to connect to database!!";
			}
	}
	define(
	"GOOGLE_API_KEY","" //PLACE GOOGLE API KEY HERE.
	);
	define(
	"DB_DATABASE","university_lms"
	);
	
	
	function EventNotification($message)
	{
		echo"<form name='eventpusher'>
	<input type='hidden' name='message' value='echotest.php?message=$message'>
	</form>";
		}
?>