<?php
	
	define("DB_HOST","localhost");
	define("DB_USERNAME","root");
	define("DB_PASSWORD","root");
	define("DB_NAME","ccms");
	
	$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
	
	if(!$conn)
	{
		echo "Error in connection";
	}
	else
	{
		//echo "Connection successfull";
	}

?>