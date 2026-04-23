<link rel="stylesheet" href="css/navbar.css">
<header>
    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <div id="logo">
                <h1><span class="ticket">Ticket</span><span class="two">Two</span></h1>
            </div>
            <div id="auth-buttons">
                <a href="index.php" style="margin-right: 10px;">EVENTI</a>
                <a href='controllo_sessione.php' style="margin-right: 10px;">ACCOUNT</a>
                <?php
                    if(isset($_SESSION["ruolo"])) {
                        echo "<a href='logout.php'>LOGOUT</a>";
                    }  
                ?>
            </div>
        </div>
    </nav>
</header>
