<?php

require_once PROJ_DIR . "/includes/users_header.php";

?>
<body>
    <main>
        <section class="navbar">
            <div class="youcode_logo">
                <a href="#"><img src="views/image/youcode_logo.png" alt="youcode_logo"></a>
                
                <h3>Clubs</h3>
            </div>
            <div>
                <a href="?u=log&a=login">
                    <?php 
                    if(isset($_SESSION["login"])){
                        if($_SESSION["login"] === 'admin') 
                        {
                            echo '
                            <a href="./index.php?u=admin">
                            <img src="views/image/admin-icon.png" alt="" srcset=""></a>
                            ';
                        }
                        }
                        else{
                            echo '<img src="views/image/Sign_up.png" alt="signup"class="signup_btn">';
                        }
                        
                        
                    ?>
                </a>
                
                
            </div>
        </section>
        <section class="section">
            <div class="slider">
                <div class="slide">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
    
                    <div class="st first">
                        <div class="slider_container">
                            <div class="my-sliders">
                                <div class="event_desc">
                                    <h1 class="semaine_tag">cette semaine</h1>
                                    <div class="event_infos">
                                        
                                        <h3>Calm Music Night</h3>
                                        <div class="infos"> 
                                            <p>
                                                Crée par : YouCode music’s Club
                                            </p>
                                            <p>
                                                Time : 16:00 , Jeudi 26 Novembre</p>
                                            <p>
                                                Lieu : YouCode Safi</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="shapee">
                                    <img src="views/image/gaming.png" alt="event_img" class="eventt">
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="st">
                        <div class="slider_container">
                            <div class="my-sliders">
                                <div class="event_desc">
                                    <h1 class="semaine_tag">cette semaine</h1>
                                    <div class="event_infos">
                                        
                                        <h3>Calm Music Night</h3>
                                        <div class="infos"> 
                                            <p>
                                                Crée par : YouCode music’s Club
                                            </p>
                                            <p>
                                                Time : 16:00 , Jeudi 26 Novembre</p>
                                            <p>
                                                Lieu : YouCode Safi</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="shapee">
                                    <img src="views/image/event_img.png" alt="event_img" class="eventt">
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="st">
                        <div class="slider_container">
                            <div class="my-sliders">
                                <div class="event_desc">
                                    <h1 class="semaine_tag">cette semaine</h1>
                                    <div class="event_infos">
                                        
                                        <h3>Calm Music Night</h3>
                                        <div class="infos"> 
                                            <p>
                                                Crée par : YouCode music’s Club
                                            </p>
                                            <p>
                                                Time : 16:00 , Jeudi 26 Novembre</p>
                                            <p>
                                                Lieu : YouCode Safi</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="shapee">
                                    <img src="views/image/robotiq_club.png" alt="event_img" class="eventt">
                                </div>
                            </div>
                            </div>
                    </div>
                    <div class="nav_auto">
                        <div class="a-b1"></div>
                        <div class="a-b2"></div>
                        <div class="a-b3"></div>
                        
                    </div>
                </div>
                <div class="nav-m">
                    <label for="radio1" class="m-btn"></label>
                    <label for="radio2" class="m-btn"></label>
                    <label for="radio3" class="m-btn"></label>
                </div>
            </div>
    
        </section>
       
        <h1> You <span style="color:blue ;">Code</span> clubs</h1>
        <section class="clubs">
        <section class="clubs">
            <?php foreach ($clubslist as $key => $value) {?>
              <div class="club_card">
              <div class="club_img">
                  <img src="views/image/gaming_club.png" alt="club image">
              </div>
              <div class="abt_club">
                  <div class="p-wrapper">
                      <p><?php echo $value["description"];?>
                      </p>
                  </div>
                  <div class="decouvrir_btn">
                      <button value="decouvrir" class="decouvrir" ><a href="views/pages/club.php?id=<?php echo $value["id"];?>">decouvrir</a></button>
                      <div class="button-background"></div>
                  </div>
              </div>
          </div>.
           <?php } ?>

        </section>
    </main>
    <script type="text/javascript">
        var counter=1;
        setInterval(function(){
            document.getElementById('radio'+counter).checked=true ;
            counter++;
            if(counter>3){
                counter = 1;
            }
        },5000);
    </script>
</body>
</html>