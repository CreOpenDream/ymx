<?php

	include "config/dbconfig.php";

	$link = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME);
	//设置编码
	mysqli_query($link,"set names utf8");

?>
