
<div class="main-container">
<div class="items">
        <form class="form" action="?c=clubs&a=save&id=<?php echo $club["id"]; ?>" enctype="multipart/form-data" method="post" id="clubform">
        <div class="header">
            <div class="left">
                
                <h1 class="club_name"><?php echo $club["nom"]; ?></h1>
                <p class="member_count">members: 
                <?php  
                               echo $membresCount;
                ?>
                </p>
                <!-- <button class="modifier">modifier</button> -->
            </div>
            <div class="middle">
                <h2 class="representant">represantant:</h2>
                <p class="representant_name"> <?php echo $repName; ?></p>
                <!-- <button class="modifier">modifier</button> -->
            </div>
            <div class="right">
            
                <div class="logo">
                <img class="logoimg" src="<?php echo $club["logo"]; ?>" alt="no logo yet">
                    
                </div>
                <!-- <button class="modifier"><i class="fa-solid fa-upload"></i></button> -->
            </div>
        </div>
        <div class="description">
            <h2>description:</h2>
            <div class="textarea"></i>
                <textarea name="description" form="clubform" ><?php echo $club["description"]; ?></textarea>
                <!-- <button type="submit" class="modifier">
                    <i class="fa-solid fa-save"></i> 
                </button> -->

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
            <a href="?c=clubs&a=edit&id=<?php echo $club["id"]; ?>">
            <button class="modifier">modifier</button></a>
            <a href="?c=clubs&a=delete&id=<?php echo $club["id"]; ?>">
            <button  class="modifier">supprimer club</button></a>
        </div>
    </div>
    </div>
<?php
require_once PROJ_DIR . "/includes/footer.php";
?>