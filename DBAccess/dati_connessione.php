<?php
    // $HOSTDB="https://tweban.dii.univpm.it/phpMyAdmin/";
	// $USERDB="grp_02";
	// $PASSDB="m0gwAwp8";
	// $NAMEDB="grp_02_db";

	$HOSTDB="localhost";
	$USERDB="root";
	$PASSDB="root";
	$NAMEDB="tickettwo";

	function db_connection(){
		global $HOSTDB,$USERDB,$PASSDB,$NAMEDB;
		$conn = new mysqli($HOSTDB, $USERDB, $PASSDB, $NAMEDB);
		$conn->set_charset("utf8");
        if ($conn->connect_error) {
			echo "<script>alert('Connessione fallita: " . $conn->connect_error . "');</script>";
            exit();
}
		return $conn;
	}

?>