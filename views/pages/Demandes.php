<?php

require_once PROJ_DIR . "/includes/header.php";

?>

    <div class="main-container">
        <div class="center">
            <div class="header">
                <div class="search">
                    <input type="text" placeholder="">
                    <button class="fa-bg">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
            <div class="list">
                
                
<?php foreach($demandes as $key=>$value){ ?>
               
                <div class="apprenant">
                    <div class="left" id="left">
                        <h1><?php echo $value["nom_complet"]; ?></h1>
                        <h4><?php echo $value["age"]; ?> ans</h4>
                        <h4><?php echo $value["email"]; ?> ans</h4>
                    </div>
                    <div class="middle">
                        <h2>class : <?php echo $value["class"]; ?></h2>
                        <h2>Club : 
                            <?php
                            $id = $value["id_club"]; 
                            $club =  $this->Clubsmodel->getClub($id);
                            echo $club['nom'];
                            ?>
                        </h2>
                        
                    </div>
                    <div class="right">

                        <a href="?c=demandes&a=refuse&id_club=<?php echo $value["id_club"]; ?>&id_demande=<?php echo $value["id_demande"]; ?>">
                            <img src="views/icons/delete.svg" class="svg" alt="" srcset="">
                        </a>     
                        <a href="?c=demandes&a=accept&id=<?php echo $value["id_club"]; ?>&id_demande=<?php echo $value["id_demande"]; ?>">
                            <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
                        </a>    
                        
                    </div>
                </div>
<?php } ?>
                    

            </div>
        </div>
    </div>
</body>
</html>