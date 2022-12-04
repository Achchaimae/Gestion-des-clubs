<div class="clubs">
      
      <div class="title">
        <h3>Clubs</h3>
        <a href="?c=clubs&a=newClubForm">
          <!-- <svg class="add-button" width="512px" height="512px" viewBox="-32 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg> -->
          <div class="add-button">
          <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
          </div>
        </a>            
      </div>
      <div class="footer">
          <button class="ajouter">ajouter</button>
          <button class="supprimer">supprimer</button>
          <button class="modifier">modifier</button>
      </div>

      <div class="club_info">
      <?php foreach($listclubs as $key=>$value){ ?>
              <a href="?c=clubs&a=clubForm&id=<?php echo $value["id"]; ?>">
              <div class="club" role="button">
                  <div class="infos">
                      <h4 class="club_name"> <?php echo $value["nom"]; ?></h4>
                      <p class="members">
                          members: <?php 
                          echo($clubMdl ->getClubMembersCount($value["id"]));
                          ?>
                         
                      </p>
                  </div>
                  <div class="logo">
                  <img class="logoimg" src="<?php echo $value["logo"]; ?>" alt="no logo yet">
                  </div>
                  
              </div>
              </a>
          <?php } ?>
      </div>
      
  </div>
