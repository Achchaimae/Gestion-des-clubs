
    <div class="main-container">
    <div class="items">
            <!-- <div class="header">
                <div class="search">
                    <input type="text" placeholder="">
                    <button class="fa-bg">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div> -->
            <div class="title">
              <h3 class="h">evenement :</h3>
              <a href="?c=evenement&a=newEventForm">
                <!-- <svg class="add-button" width="512px" height="512px" viewBox="-32 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg> -->
                <div class="add-button">
                <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
                </div>
              </a>            
            </div>
                
            <div class="item_info">
                    <!--  -->
<?php foreach($allevents as $key=>$value){ ?>
                <div class="item">
                    <div class="item-left" id="left">
                        <h1><?php echo $value["nom"]; ?></h1>
                        <h4><?php echo $value["event_date"]; ?> </h4>
                        <h4><?php echo $value["lieu"]; ?></h4>
                    </div>
                    <div class="item-middle">
                        <h2><?php echo $value["description"]; ?></h2>
                        <h2>
                        <?php echo($clubMdl->getClubName($value["id_club"])) ;
                         ?>
                        </h2>
                       
                    </div>
                    <div class="item-right">
                            <a href="?c=evenement&a=eventForm&id=<?php echo $value["id"]; ?>">
                            <img src="views/icons/edit.svg" class="svg" alt="" srcset="">
                            </a>
                            <a href="?c=evenement&a=deleteEvent&id=<?php echo $value["id"]; ?>">
                            <img src="views/icons/delete.svg" class="svg" alt="" srcset="">
                            </a>
                            
                            <img src="views/icons/addbold.svg" class="svg" alt="" srcset="">
                        
                    </div>
                </div>
<?php } ?>
                    
                    
                    

                    <!--  -->
               
                
                
            </div>
            </div>
    </div>
