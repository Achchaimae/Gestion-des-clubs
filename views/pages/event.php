


            <div class="membrebg">
            <form  action="?c=evenement&a=updateEvent&id=<?php echo $id; ?>" method="POST" id="membreform" name="membreform" >

                <div class="membre">
                <label for="nom">Nom d'evenement :
                <input type="text" name="nom" value="<?php echo $event["nom"]; ?>">
                </label>
                <label for="lieu">lieu d'evenemnt :
                <input type="text" name="lieu" value="<?php echo $event["lieu"]; ?>">
                </label>
                <label for="date">date :
                <input type="date" name="event_date" value="<?php echo $event["event_date"]; ?>">
                </label>

                <div class="line">
            <label for="description">description :</label>
            <!-- <input type="text" name="description"> -->
            <textarea name="description" id="" cols="10" rows="10"><?php echo $event["description"]; ?></textarea>
            </div>

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
