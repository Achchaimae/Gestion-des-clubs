<?php

require_once PROJ_DIR . "/includes/header.php";

?>
<link rel="stylesheet" href="views/css/membres.css">
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
                
                
                    <!--  -->
<?php foreach($allmembers as $key=>$value){ ?>
                <div class="apprenant">
                    <div class="left" id="left">
                        <h1><?php echo $value["nom_complet"]; ?></h1>
                        <h4><?php echo $value["age"]; ?></h4>
                    </div>
                    <div class="middle">
                        <h2><?php echo $value["class"]; ?></h2>
                        <h2>Club</h2>
                        <h3>Role</h3>
                    </div>
                    <div class="right">
                        <div class="fa-soli">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                        
                        <div class="fa-soli">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        
                        <div class="fa-soli">
                            <i class="fa-solid fa-trash"></i>
                        </div>
                        
                    </div>
                </div>
<?php } ?>
                    
                    
                    

                    <!--  -->
               
                
                
            </div>
        </div>
    </div>
</body>
</html>