
<link rel="stylesheet" href="views/css/membres.css">

            <div class="membrebg">
                <div class="membre">
                    <div class="left" id="left">
                        <h1><?php echo $membre["nom_complet"]; ?></h1>
                        <h4><?php echo $membre["age"]; ?> ans</h4>
                    </div>
                    <div class="middle">
                        <h2><?php echo $membre["class"]; ?></h2>
                        <h2>
                        <?php echo $clubName ;
                         ?>
                        </h2>
                        <h3>
                        <?php echo $membre["membre_role"]; ?>
                        </h3>
                    </div>
                    <div class="right">
                            <a href="?c=membres">
                            <img src="views/icons/edit.svg" class="svg" alt="" srcset="">
                            </a>
                            <img src="views/icons/delete.svg" class="svg" alt="" srcset="">
                            <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
                        
                    </div>
                 </div>
            </div>
