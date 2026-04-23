<!DOCTYPE html>
<?php
    session_start();
?>
<!<!-- prova del SIUM -->
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
                        <h1>Benvenuto su TicketTwo</h1>
                        <p>Il tuo punto di riferimento per l'acquisto di biglietti per eventi in tutto il mondo.</p>
                    </div>
                </div>

                <!-- Bootstrap 5 Grid System

                                        Extra small     Small       Medium      Large       Extra large
                                        <576px	        ≥576px      ≥768px      ≥992px      ≥1200px

                Max container width	    None (auto)	    540px	    720px	    960px	    1140px

                Class prefix	        .col-	        .col-sm-	.col-md-    .col-lg-	.col-xl-

                # of columns	        12

                Gutter width	        30px (15px on each side of a column)

                Nestable	            Yes

                Column ordering	        Yes
-->
                <!--g-4= padding di 4px tra le colonne e righe -->
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <!-- per ogni evento musicale caricati da un database si crea una card -->
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 1">
                            <div class="card-body">
                                <h5 class="card-title">Concerto di Musica Classica</h5>
                                <!-- <p class="card-text">Un'esperienza indimenticabile con le più grandi opere della musica classica.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 2">
                            <div class="card-body">
                                <h5 class="card-title">Festival di Musica Rock</h5>
                                <!-- <p class="card-text">Vivi l'energia del rock con le migliori band del momento.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 3">
                            <div class="card-body">
                                <h5 class="card-title">Spettacolo di Danza Contemporanea</h5>
                                <!-- <p class="card-text">Un viaggio emozionante attraverso la danza contemporanea con coreografie innovative.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 4">
                            <div class="card-body">
                                <h5 class="card-title">Opera Lirica</h5>
                                <!-- <p class="card-text">Un'esperienza unica con le più grandi opere liriche eseguite da talentuosi cantanti e orchestre.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 5">
                            <div class="card-body">
                                <h5 class="card-title">Festival di Musica Elettronica</h5>
                                <!-- <p class="card-text">Immergiti nel mondo della musica elettronica con  DJ di fama internazionale e spettacoli visivi mozzafiato.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/placeholder/concerto.jpg" class="card-img-top" alt="Evento 6">
                            <div class="card-body">
                                <h5 class="card-title">Spettacolo di Teatro</h5>
                                <!-- <p class="card-text">Un'esperienza teatrale coinvolgente con   le migliori produzioni teatrali e attori di talento.</p> -->
                                <!-- <a href="#" class="btn btn-primary">Acquista Biglietti</a> -->
                                <center>
                                    <button class="custom-btn btn-7" onClick="location.href='mat_uma.php'"><span class="ita">Esplora</span></button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include "footer.php"; ?>
        <!--import delle librerie JS bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
          </body>
    </body>
</html>
