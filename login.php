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
                    <div class="col-sm-2 col-md-3"></div>
                    <div class="col-sm-8 col-md-6">
                        
                        <form action="controllo_login.php" class="form" method="post" name="Login" onsubmit="return valida();">
                            <h1>Login</h1>
                            <!-- username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo username" >
                            </div>
                            <!-- password -->
                            <div class="mb-3">
                                <!-- imput password con occhio visibilità password -->
                                <label for="password" class="form-label">Password</label>
                                <div class="input_box">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la tua password" >
                                    <span class="icon" onclick="togglePasswordVisibility('password')">
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Login">
                            <!-- registrazione se non registrato -->
                            <p class="mt-3">
                                Non sei ancora registrato? <a href="signup.php">Registrati qui</a>
                            </p>
                        </form>

                    </div>
                    <div class="col-sm-2 col-md-3"></div>
                </div>
            </div>

            <script>
                function valida() {
                    let username = document.Login.username.value;
                    let password = document.Login.password.value;

                    if ((username == "" || username == "undefined") || (password == "" || password == "undefined")) {
                        alert("Completa tutti i campi per effettuare il login");
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