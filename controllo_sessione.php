<?php
    session_start();
    if(isset($_SESSION["ruolo"]) && $_SESSION["ruolo"] == "cliente") {
        header("Location: profilo.php");
        exit();
    }
    else if(isset($_SESSION["ruolo"]) && $_SESSION["ruolo"] == "organizzatore") {
        header("Location: eventi_gestiti.php");
        exit();
    }
    else if(isset($_SESSION["ruolo"]) && $_SESSION["ruolo"] == "admin") {
        header("Location: elenco_L2.php");
        exit();
    }
    else {
        header("Location: login.php");
        exit();
    }
?>