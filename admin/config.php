<?php

	define("HOST","localhost");
	define("USERNAME","root");
	define("PASSWORD","");
	define("DATABASE","myprotfolio");

	$connect_admin = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE) or die("Database Connection failed! " . mysqli_connect_error()) ;

?>