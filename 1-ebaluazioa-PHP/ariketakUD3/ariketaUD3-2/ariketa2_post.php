<?php

if (isset($_POST["izena"])) {
	if (!empty($_POST["izena"])) {
		$izena = $_POST["izena"];
	} else {
		$izena = "Izena falta da";
	}
} else {
	$izena = "Izena falta da";
}

if (isset($_POST["abizena"])) {
	if (!empty($_POST["abizena"])) {
		$abizena = $_POST["abizena"];
	} else {
		$abizena = "Abizena falta da";
	}
} else {
	$abizena = "Abizena falta da";
}

if (isset($_POST["email"])) {
	if (!empty($_POST["email"])) {
		$email = $_POST["email"];
	} else {
		$email = "Email-a falta da";
	}
} else {
	$email = "Email-a falta da";
}

echo "Kaixo ". $izena. " ". $abizena ." ".$email;

?>