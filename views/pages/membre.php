
<link rel="stylesheet" href="views/css/membres.css">

            <div class="membrebg">
            <form  action="?c=membres&a=updateMembre&id=<?php echo $id_membre; ?>" method="POST" id="membreform" name="membreform" >

                <div class="membre">
                
                <input type="text" name="nom_complet" value="<?php echo $membre["nom_complet"]; ?>">

                <input type="text" name="age" value="<?php echo $membre["age"]; ?>">
                <input type="text" name="class" value="<?php echo $membre["class"]; ?>">
                <input type="text" name="email" value="<?php echo $membre["email"]; ?>">
                
                <select name="club" >
                <?php foreach($listClubs as $key=>$value){ ?>
                    <option value="<?php echo $value["id"]; ?>"><?php echo $value["nom"]; ?></option>
                <?php } ?>
                </select> 
                        
                 </div>
                 <button class="modifier"  value="submit" form="membreform">save</button>
                 </form>
            </div>
