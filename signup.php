<html/progetto_TWEB/index.html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
    </head>
    <body>
        <?php include "navbar.php"; ?>

        <main>
            <div class="fluid-container main-section section">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6 text-center">
                        <h1>Registrazione</h1>
                        <form action="signup.php" method="post">
                            <!-- nome -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il tuo nome" required>
                            </div>
                            <!-- cognome -->
                            <div class="mb-3">
                                <label for="surname" class="form-label">Cognome</label>
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Inserisci il tuo cognome" required>
                            </div>
                            <!-- data di nascità -->
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Data di Nascita</label>
                                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
                            </div>
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua email" required>
                            </div>
                            <!-- username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Inserisci il tuo username" required>
                            </div>
                            <!-- password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Inserisci la tua password" required>
                            </div>
                            <!-- conferma password -->
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Conferma Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Conferma la tua password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrati</button>
                        </form>

                    </div>
                    <div class="col-3"></div>
                </div>
            </div>
            
        </main>

        <?php include "footer.php"; ?>
        <!--import delle librerie JS bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
          </body>
    </body>
</html>