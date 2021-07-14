<?php

	$conn = mysqli_connect('localhost','harshita','anmol@2109','sparks_bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>