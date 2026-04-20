<?php
    $HOSTDB="https://tweban.dii.univpm.it/phpMyAdmin/";
	$USERDB="grp_02";
	$PASSDB="m0gwAwp8";
	$NAMEDB="grp_02_db";

	function db_connection(){
		global $HOSTDB,$USERDB,$PASSDB,$NAMEDB;
		$conn = new mysqli($HOSTDB, $USERDB, $PASSDB, $NAMEDB);
		$conn->set_charset("utf8");
        if ($conn->connect_error) {
			// $_SESSION["errore"]="Errore di connessione al DB";
			// header("Location: ../errore.php");
        }
		return $conn;
	}

?>