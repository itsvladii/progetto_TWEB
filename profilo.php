<!DOCTYPE html>
<?php
    session_start();
    if(!isset($_SESSION["ruolo"]) || $_SESSION["ruolo"] != "cliente") {
        header("Location: index.php");
        exit();
    }
    include("DBAccess/dati_connessione.php");
    $conn = db_connection();

    $user = array(
        "name" => "",
        "surname" => "",
        "email" => "",
        "username" => "",
        "password" => "",
        "birth_date" => ""
    );

    $username = $_SESSION["username"];
    $sql = "SELECT * FROM `utenti` WHERE `username`=?";
    $stm = $conn->prepare($sql);
    $stm->bind_param("s",$username);
    if ($stm->execute() === TRUE) {
        $res = $stm->get_result();
        if($res->num_rows > 0){
            while($obj = $res->fetch_object()){
                $user = array(
                    "name" => $obj->nome,
                    "surname" => $obj->cognome,
                    "email" => $obj->email,
                    "username" => $obj->username,
                    "password" => $obj->password,
                    "birth_date" => $obj->dataDiNascita
                );
            }
        }
    }
?>

<html lang="en">
    <head>
        <?php include "head.php"; ?>

        <script>
            // funzione per mostrare/nascondere la password al click sull'icona dell'occhio
            // passwordFieldId è l'id del campo password da mostrare/nascondere
            // l'icona dell'occhio è un elemento span con classe "icon" che contiene un elemento i con classe "fa-solid fa-eye" o "fa-solid fa-eye-slash"
            // quando la password è nascosta (type="password") l'icona è "fa-eye" e quando la password è visibile (type="text") l'icona è "fa-eye-slash"
            // al click sull'icona dell'occhio si chiama questa funzione che cambia il tipo del campo password e l'icona di conseguenza
            function togglePasswordVisibility(passwordFieldId) {
                const passwordField = document.getElementById(passwordFieldId);
                const icon = passwordField.nextElementSibling.querySelector('i');
                const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordField.setAttribute('type', type);
                if (type === 'password') {
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            }
        </script>
    </head>
    <body>
        <?php include "navbar.php"; ?>

        <main>
            <div class="fluid-container main-section section">
                

                <!-- Sezione per visualizzare e modificare le informazioni personali dell'utente -->
                <div class="row">
                    <div class="col-sm-2 col-md-3"></div>
                    <div class="col-sm-8 col-md-6">
                        <form action="profilo.php" method="post" class="form">
                            <h1>Il tuo Profilo</h1>
                            <p>Gestisci le tue informazioni personali.</p>
                    
                            <!-- nome -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user['name']; ?>">
                            </div>
                            <!-- cognome -->
                            <div class="mb-3">
                                <label for="surname" class="form-label">Cognome</label>
                                <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $user['surname']; ?>">
                            </div>
                            <!-- data di nascita -->
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Data di Nascita</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" value="<?php echo $user['birth_date']; ?>">
                            </div>
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                            </div>
                            <!-- username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>">
                            </div>
                            <!-- password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input_box">
                                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                                    <span class="icon" onclick="togglePasswordVisibility('password')">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <!-- conferma password -->
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Conferma Password</label>
                                <div class="input_box">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" value="<?php echo $user['password']; ?>">
                                    <span class="icon" onclick="togglePasswordVisibility('confirm_password')">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </div> 
                            </div>

                            <!-- Altri campi per le informazioni personali -->
                            <input type="submit" class="btn btn-primary" value="Salva Modifiche">
                        </form>
                    </div>
                    <div class="col-sm-2 col-md-3"></div>
                </div>

                <!-- Sezione per visualizzare gli acquisti recenti dell'utente -->
                <div class="row mt-5">
                    <div class="col-12">
                        <h2>Acquisti Recenti</h2>
                        <!-- Tabella o elenco degli acquisti recenti -->
                    </div>
                </div>

            </div>
        </main>

        <?php include "footer.php"; ?>
    </body>