<?php
	session_start();
	$ruolo="";
    //Dopo il login si crea una sessione con il nome utente e il tipo di utente (cliente, organizzatore, admin) e si reindirizza alla pagina principale del sito
    // Se l'utente è di:
    // - livello 2 (cliente) -> reindirizzare alla pagina profilo del cliente
    // - livello 3 (organizzatore) -> reindirizzare alla pagina eventi gestiti dell'organizzatore
    // - livello 4 (admin) -> reindirizzare alla pagina di gestione degli utenti e degli eventi dell'admin
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['email']) && isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['birth_date'])) {
        
        // connessione al database
        include("DBAccess/dati_connessione.php");
        
        $conn = db_connection();

        $username = $conn->real_escape_string($_POST['username']);
        $password = $conn->real_escape_string($_POST['password']);
        $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
        $email = $conn->real_escape_string($_POST['email']);
        $name = $conn->real_escape_string($_POST['name']);
        $surname = $conn->real_escape_string($_POST['surname']);
        $birth_date = $conn->real_escape_string($_POST['birth_date']);
        $ruolo = "cliente"; // Imposta il ruolo predefinito come cliente

        if($_POST['password'] == $_POST['confirm_password'])
        {
            $sql = "SELECT * FROM utenti WHERE username=?";
            $stm = $conn->prepare($sql);
            $stm->bind_param("s",$username);
            if ($stm->execute() === TRUE) {
                $res = $stm->get_result();
                if($res->num_rows == 0){
                    // L'utente non esiste, quindi possiamo crearlo
                    $sql = "INSERT INTO utenti (username, password, email, nome, cognome, dataDiNascita, ruolo) VALUES (?, ?, ?, ?, ?, ?, ?)";
                    $stm = $conn->prepare($sql);
                    // tipi di bind_param: s = string, i = integer, d = double, b = blob
                    $stm->bind_param("sssssss",$username,$password,$email,$name,$surname,$birth_date,$ruolo);
                    if ($stm->execute() === TRUE) {
                        echo "<script>alert('Registrato con successo');</script>";
                        $_SESSION["ruolo"]=$ruolo;
					    $_SESSION["username"]=$username;
                        
                        header("Location:profilo.php");
                        
                    } else {
                        echo "<script>alert('Errore durante la registrazione dell'utente');</script>";
                    }
                } else {
                    echo "<script>alert('Username già utilizzato');</script>";
                }
            } else {
                echo "<script>alert('Errore durante l'esecuzione della query');</script>";
            }
        } else {
            echo "<script>alert('Le password non coincidono');</script>";
        }
    } else {
        echo "<script>alert('Tutti i campi sono richiesti');</script>";
    }

?>    
    