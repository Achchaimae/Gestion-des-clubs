


            <div class="membrebg">
            <form  action="?c=evenement&a=saveNewEvent" method="POST" id="membreform" name="membreform" >

                <div class="membre">
                <label for="nom">Nom :
                <input type="text" name="nom" >
                </label>
                <label for="event_date">event-date :
                <input type="date" name="event_date" >
                </label>
                <div class="line">
            <label for="description">description :</label>
            <!-- <input type="text" name="description"> -->
            <textarea name="description" id="" cols="10" rows="10"></textarea>
            </div>
                
                <label for="lieu">lieu :
                <input type="text" name="lieu" >
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
