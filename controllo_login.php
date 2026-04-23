<?php
	session_start();
	$ruolo="";
    //Dopo il login si crea una sessione con il nome utente e il tipo di utente (cliente, organizzatore, admin) e si reindirizza alla pagina principale del sito
    // Se l'utente è di:
    // - livello 2 (cliente) -> reindirizzare alla pagina profilo del cliente
    // - livello 3 (organizzatore) -> reindirizzare alla pagina eventi gestiti dell'organizzatore
    // - livello 4 (admin) -> reindirizzare alla pagina di gestione degli utenti e degli eventi dell'admin
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // connessione al database
        include("DBAccess/dati_connessione.php");
        
        $conn = db_connection();


        // query per verificare le credenziali dell'utente
        $sql = "SELECT * FROM utenti WHERE username=? AND password=?";
        $stm = $conn->prepare($sql);
		$stm->bind_param("ss",$username,$password);
		if ($stm->execute() === TRUE) {
            $res = $stm->get_result();
			if($res->num_rows > 0){
				while($obj = $res->fetch_object()){
					$_SESSION["ruolo"]=$obj->ruolo;
					$_SESSION["username"]=$username;
                    
                    if ($stm->execute() === TRUE) { 
                        if($_SESSION["ruolo"] == "cliente") {
                        
                        header("Location:profilo.php");
                    } else if($_SESSION["ruolo"] == "organizzatore") {
                        
                        header("Location:eventi_gestiti.php");
                    } else if($_SESSION["ruolo"] == "admin") {
                        
                        header("Location:elenco_L2.php");
                    }
                    }
                    else{
                        echo "<script>alert('Errore durante l'esecuzione della query');</script>";
                        exit();
                    }
                    
                    
                    exit();
                }
            }
            else {
                // se le credenziali sono errate, si mostra un messaggio di errore
                echo "<script>alert('Username o password errati');</script>";
                exit();
            }
        }
        else {
            echo "<script>alert('Errore durante l'esecuzione della query');</script>";
            exit();
        }
        
        $conn->close();
        $stm->close();
    }
    else {
        echo "<script>alert('Username e password sono richiesti');</script>";
        exit();
    }

?>    
    