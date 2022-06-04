<?php

	session_start();
	session_destroy();
	$_SESSION = array();
	header("Location: http://localhost/website/Class48/myprotfolio/admin");