<?php

	$mysqli = new mysqli("localhost", "hworknet_admin", "11223344", "hworknet_test");
	$mysqli -> query("SET NAMES 'utf8'");

	if ($mysqli -> connect_errno) {
		   	printf("Connection error.: %s\n", $mysqli->connect_error);
		   	exit();
		} else {
			echo "Connection nice.";
		}

?>