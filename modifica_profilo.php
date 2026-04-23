<?php
    session_start();
    if(!isset($_SESSION["ruolo"]) || $_SESSION["ruolo"] != "cliente") {
        header("Location: index.php");
        exit();
    }
    include("DBAccess/dati_connessione.php");
    $conn = db_connection();

    // modifica i dati in base a ciò che ottiene da profilo.php, se i campi sono vuoti non li modifica
    if(isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["birth_date"])) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $birth_date = $_POST["birth_date"];

        $sql = "UPDATE utenti SET nome=?, cognome=?, email=?, username=?, password=?, dataDiNascita=? WHERE username=?";
        $stm = $conn->prepare($sql);
        $stm->bind_param("sssssss",$name,$surname,$email,$username,$password,$birth_date,$_SESSION["username"]);
        if ($stm->execute() === TRUE) {
            echo "<script>alert('Profilo modificato con successo');</script>";
            $_SESSION["username"]=$username;
            header("Location:profilo.php");
        } else {
            echo "<script>alert('Errore durante la modifica del profilo');</script>";
        }
    } else {
        echo "<script>alert('Tutti i campi sono richiesti');</script>";
    }