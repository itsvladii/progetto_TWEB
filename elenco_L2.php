<?php
session_start();
if(!isset($_SESSION["ruolo"]) || $_SESSION["ruolo"] != "admin") {
    header("Location: index.php");
    exit();
}
include("DBAccess/dati_connessione.php");
$conn = db_connection();
$sql = "SELECT * FROM utenti WHERE ruolo='cliente'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "head.php"; ?>
    </head>
    <body>
        <?php include "navbar.php"; ?>

        <main>
            <div class="main-section section">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Elenco Utenti Livello 2 (Clienti)</h1>
                        <p>Gestisci gli utenti clienti.</p>
                    </div>
                </div>

                <!-- Tabella per visualizzare gli utenti L2 -->
                <div class="row">
                    <div class="col-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Cognome</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Azioni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td>" . $row["cognome"] . "</td>";
                                        echo "<td>" . $row["email"] . "</td>";
                                        echo "<td>" . $row["username"] . "</td>";
                                        echo "<td><button class='btn btn-danger'>Elimina</button></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>Nessun utente trovato.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>

        <?php include "footer.php"; ?>
    </body>