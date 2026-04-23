<!DOCTYPE html>
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
                <div class="row">
                    <div class="col-sm-2 col-md-3 col-lg-4"></div>
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        
                        <form action="signup.php" class="form" method="POST" name="Signup" onsubmit="return valida();">
                            <h1>Registrazione</h1>
                            <!-- nome -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome" >
                            </div>
                            <!-- cognome -->
                            <div class="mb-3">
                                <label for="surname" class="form-label">Cognome</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Inserisci il tuo cognome" >
                            </div>
                            <!-- data di nascità -->
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Data di Nascita</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" >
                            </div>
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua email" >
                            </div>
                            <!-- username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo username" >
                            </div>
                            <!-- password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input_box">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la tua password" >
                                    <span class="icon" onclick="togglePasswordVisibility('password')">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </div>                            
                            </div>
                            <!-- conferma password -->
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Conferma Password</label>
                                <div class="input_box">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Conferma la tua password" >
                                    <span class="icon" onclick="togglePasswordVisibility('confirm_password')">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Registrati">
                        </form>

                    </div>
                    <div class="col-sm-2 col-md-3 col-lg-4"></div>
                </div>
            </div>
            
            <script>
                function valida() {
                    let username = document.Signup.username.value;
                    let password = document.Signup.password.value;
                    let confirm_password = document.Signup.confirm_password.value;
                    let email = document.Signup.email.value;
                    let name = document.Signup.name.value;
                    let surname = document.Signup.surname.value;
                    let birth_date = document.Signup.birth_date.value;

                    if ((username == "" || username == "undefined") || (password == "" || password == "undefined") || (confirm_password == "" || confirm_password == "undefined") || (email == "" || email == "undefined") || (name == "" || name == "undefined") || (surname == "" || surname == "undefined") || (birth_date == "" || birth_date == "undefined")) {
                        alert("Completa tutti i campi per effettuare la registrazione");
                        return false;
                    }

                    return true;
                }            
        </script>
        </main>

        <?php include "footer.php"; ?>
        <!--import delle librerie JS bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
          </body>
    </body>
</html>