<?php
require_once PROJ_DIR . "/includes/header.php";
?>

<link rel="stylesheet" href="views/css/clubs.css">

<div class="main-container">
        <form  action="?c=clubs&a=save&id=<?php echo $club["id"]; ?>" method="POST" id="clubform" name="clubform" enctype="multipart/form-data">

        <div class="header">
            <div class="left">
                <input type="text" name="nom" value="<?php echo $club["nom"]; ?>">
                
                <p class="member_count">members: 
                <?php  
                               echo $club["membres"];
                ?>
                </p>
                <!-- <button class="modifier">modifier</button> -->
            </div>
            <div class="middle">
                <h2 class="representant">represantant:</h2>
                <!-- <p class="representant_name"> achchaimae khalaf</p> -->
                <select name="newrep" id="cars">


                <?php foreach($clubMembers as $key=>$value){ ?>
                    <option value="<?php echo $value["id_membre"]; ?>"><?php echo $value["nom_complet"]; ?></option>
                <?php } ?>

                </select>
                <!-- <button class="modifier">modifier</button> -->
            </div>
            <div class="right">
            
            <div class="logo">
                <img class="logoimg" src="<?php echo $club["logo"]; ?>" alt="no logo yet">
                    
                </div>
                <input class="upload" type="file" id="myFile" name="logo">
            </div>
        </div>
        <div class="description">
            <h2>description:</h2>
            <div class="textarea"></i>
                <textarea name="description" form="clubform" ><?php echo $club["description"]; ?></textarea>
                <button type="submit" class="modifier">
                    <!-- <i class="fa-solid fa-save"></i> -->
                </button>

            </div>
        </div>
        </form>
        <div class="events">
   <!--          <h2>events:</h2>

            <table id="events" class="events-table">
            <tr>
                <th>organisateur</th>
                <th>date</th>
                <th>nom d'evenement</th>
                <th>invites</th>
                <th>modifier</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
                <td>Germany</td>
                <td >
                    <div class="buttons-cell">
                        <button><i class="fa-solid fa-pen"></i></button>
                        <button><i class="fa-solid fa-trash"></i></button>
                    </div>
                </td>
            </tr>
             -->
            
            
            
            </table>
            
            <!-- <input form="clubform" type="submit" value="submit" /> -->
            <button class="modifier"  value="submit" form="clubform">save</button>
            <a href="?c=clubs&a=delete&id=<?php echo $club["id"]; ?>">
            <button  class="modifier">supprimer club</button></a>
        </div>
        </form>
    </div>
<?php
require_once PROJ_DIR . "/includes/footer.php";
?>