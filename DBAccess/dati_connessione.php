<?php
    $HOSTDB="localhost";
	$USERDB="root";
	$PASSDB="root";
	$NAMEDB="db-5a";

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