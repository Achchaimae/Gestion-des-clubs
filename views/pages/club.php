<?php

require_once PROJ_DIR . "/includes/users_header.php";


?>
<body>
    <main>
        <section class="navbar">
            <div class="youcode_logo">
                <a href="../index.html"> <img src="../assets/image/youcode_logo.png" alt="youcode_logo"></a>
               
                <h3>Clubs</h3>
            </div>
            
        </section>
        <section>
            <div class="club_title">
                <h1>
                Club : <?php echo $club["nom"]; ?> </h1>
            </div>
        </section>
        <section class="club_container">
            
            <div class="img_club">
              
            </div>
            <div class="decouvrir_btn">
                <button type="submit" id="demande_Integra" class=" decouvrir" ><a href="?u=club&a=demande&id=<?php echo $club_id; ?>">Demande</a></button>
                <div class="button-background"></div>
            </div>
            <div class="about_club">
                <div class="club_desc"> 
                    <h1> Description </h1><br>
                    <p>
                    
                    <?php echo $club["description"]; ?>
                </p>
                </div>
                <div class="club_membres">
                    <div>
                        <h3> Represantant</h3>
                        <p>  <?php echo $repname; ?></p>
                    </div>
                    <hr>
                    <ul> 
<?php foreach ($clubMembres as $key => $value) { ?>
                        <li>
                            <div class="club_membre">
                                <img src="views/icons/test.png" alt="img">
                                <div class="club_membre_info">
                                    <p><?php echo $value["nom_complet"]; ?></p>
                                    <p><?php echo $value["class"]; ?></p>
                                </div>
                            </div> 
                        </li>
<?php } ?>
                    </ul>
                    <!-- <ul>
                        <li> 
                            <ul>
                                <li>
                                    <h3> Represantant</h3>
                                </li>
                                <li>Achchaimae khalaf</li>
                                <li>Ada lovelece</li>
                            </ul>
                        </li>
                        <hr>
                        <li>
                            <ul>
                                <li>
                                    <h3>Membres</h3>
                                </li>
                                <li>
                                    <ul>
                                        <li>Achchaimae khalaf</li>
                                        <li>Ada lovelece</li>
                                        <li>Achchaimae khalaf</li>
                                        <li>Ada lovelece</li>
                                        <li>Achchaimae khalaf</li>
                                        <li>Ada lovelece</li>
                                        <li>Achchaimae khalaf</li>
                                        <li>Ada lovelece</li> 
                                    </ul>
                            </ul>
                        </li>
                    </ul> -->
                </div>
                
            </div>
            <h1>Galerie</h1>
            <div class="galerie">

                <div class="activite">
                    <img src="../assets/image/art_club2.png" alt="art">
                    <div class="intro">
                        <h3>Title</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis neque soluta excepturi nihil quia hic asperiores veritatis libero ducimus eos optio doloribus recusandae</p>
                    </div>
                   
                </div>
                <div class="activite">
                    <img src="../assets/image/art_club2.png" alt="art">
                    <div class="intro">
                        <h3>Title</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis neque soluta excepturi nihil quia hic asperiores veritatis libero ducimus eos optio doloribus recusandae</p>
                    </div>
                   
                </div>
                <div class="activite">
                    <img src="../assets/image/art_club2.png" alt="art">
                    <div class="intro">
                        <h3>Title</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis neque soluta excepturi nihil quia hic asperiores veritatis libero ducimus eos optio doloribus recusandae</p>
                    </div>
                   
                </div>
                <div class="activite">
                    <img src="../assets/image/art_club2.png" alt="art">
                    <div class="intro">
                        <h3>Title</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis neque soluta excepturi nihil quia hic asperiores veritatis libero ducimus eos optio doloribus recusandae</p>
                    </div>
                   
                </div>
                <!-- <div class="activite">
                    <h3>Title</h3>
                </div>
                <div class="activite">
                    <h3>Title</h3>
                </div>
                <div class="activite">
                    <h3>Title</h3>
                </div> -->
                
            </div>
        </section>
    </main>
</body>
</html>
