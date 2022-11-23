<?php
require_once PROJ_DIR . "/views/header.php";
?>

<link rel="stylesheet" href="views/css/clubs.css">

<div class="main-container">
        
        <div class="header">
            <div class="left">
                <h1 class="club_name"><?php echo $club["nom"]; ?></h1>
                <p class="member_count">members: 
                <?php  
                                $this->model->getClubMembersCount($club["id"]);
                ?>

                </p>
                <button class="modifier">modifier</button>
            </div>
            <div class="middle">
                <h2 class="representant">represantant:</h2>
                <p class="representant_name"> achchaimae khalaf</p>
                <button class="modifier">modifier</button>
            </div>
            <div class="right">
            
                <div class="logo"><?php echo $club["logo"]; ?></div>
                <button class="modifier"><i class="fa-solid fa-pen"></i></button>
            </div>
        </div>
        <div class="description">
            <h2>description:</h2>
            <div class="textarea"></i>
                <textarea name="" id="" ><?php echo $club["description"]; ?></textarea>
                <button class="modifier">
                    <i class="fa-solid fa-pen"></i>
                </button>

            </div>
        </div>
        <div class="events">
            <h2>events:</h2>

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
            
            
            
            
            </table>
            <button class="modifier">Ajouter</button>
        </div>
    </div>
<?php
require_once PROJ_DIR . "/views/footer.php";
?>