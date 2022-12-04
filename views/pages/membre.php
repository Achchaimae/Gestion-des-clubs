


            <div class="membrebg">
            <form  action="?c=membres&a=updateMembre&id=<?php echo $id_membre; ?>" method="POST" id="membreform" name="membreform" >

                <div class="membre">
                <label for="nom_complet">Nom Cmoplet :
                <input type="text" name="nom_complet" value="<?php echo $membre["nom_complet"]; ?>">
                </label>
                <label for="age">Age :
                <input type="text" name="age" value="<?php echo $membre["age"]; ?>">
                </label>
                <label for="class">Classe :
                <input type="text" name="class" value="<?php echo $membre["class"]; ?>">
                </label>
                <label for="email">Email :
                <input type="text" name="email" value="<?php echo $membre["email"]; ?>">
                </label>
                <label for="club">Club :
                <select name="club" >
                <?php foreach($listClubs as $key=>$value){ ?>
                    <option value="<?php echo $value["id"]; ?>"><?php echo $value["nom"]; ?></option>
                <?php } ?>
                </select> 
                </label>  
                 </div>
                 <button class="modifier"  value="submit" form="membreform">save</button>
                 </form>
            </div>
