<?php

require_once PROJ_DIR . "/includes/users_header.php";


?>
<body>
    <main class="demande_page">
        <section class="navbar demande_navbar">
            <div class="youcode_logo">
            <a href="index.php"> <img src="views/image/youcode_logo.png" alt="youcode_logo"></a>
                <h3>Clubs</h3>
            </div>
        </section>
        <section class="form">
                <div class="img_log">
                    <img src="../assets/image/login_man.png" alt="">
                </div>
                <form method="POST" action="?u=club&a=handleDemande&id=<?php echo $club_id; ?>" class="demande_form">
                    <h1>Rejoindre le club : <?php echo $club['nom']; ?></h1>
                    <input type="text" name="nom_complet" placeholder="FULL NAME">
                    <input type="date" name="age" placeholder="AGE">
                    <input type="email" name="email" placeholder="EMAIL">
                    <input type="text" name="classe" placeholder="CLASSE">
                    <input type="submit" value="envoyer" id="login_btn">
                </form>
            
        </section>
    </main>
</body>
</html>