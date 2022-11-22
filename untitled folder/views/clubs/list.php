                <?php foreach($list as $key=>$value){ ?>
                    <a href="?c=Clubs&a=edit&id=<?php echo $value["id"]; ?>">
                    <div class="club" role="button">
                        <div class="infos">
                            <h4 class="club_name"> <?php echo $value["nom"]; ?></h4>
                            <p class="members">members: 16</p>
                        </div>
                        <img src="" alt="" class="logo">
                    </div>
                    </a>
                <?php } ?>
          
