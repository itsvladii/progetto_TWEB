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
                        <h1>Login</h1>
                        <form action="login.php" method="post">
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
                            <button type="submit" class="btn btn-primary">Login</button>
                            <!-- registrazione se non registrato -->
                            <p class="mt-3">
                                Non sei ancora registrato? <a href="signup.php">Registrati qui</a>
                            </p>
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