<?php
// include '../../controlers/DemandesContr.class.php';
// require_once './controlers/DemandesContr.class.php';
$values = extract($_POST);

 if(isset($submit)) { 
    
    if(empty($email) || empty($password) || empty($age) || empty($id_club) )
    {
    echo '<script language="javascript" type="text/javascript"> ';
    echo 'alert("message error Inserted")';//msg
    echo '</script>';
    }
    else {
    
        $instant = new DemandesContr();
        $arr = array(
            'nom_complet' => $nom_complet,
            'class' => $class,
            'age' => $age,
            'email' => $email,
            'membre_role' => $membre_role,
            'id_club' => $id_club
        );
        $instant->save($arr);
    }
 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- linking css style -->
    <link rel="stylesheet" href="../css/userstyle.css">
    <!-- end linking css style -->
    
    <!-- link a font style -->
         <!-- Poppins font -->
         <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
             <!-- rock Salt font -->
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">  
             <!-- end linking a font style -->
    <title>YouCode Clubs</title>
    <link rel="icon" type="image/x-icon" href="icon_web.png">
</head>
<body>
    <main class="demande_page">
        <section class="navbar demande_navbar">
            <div class="youcode_logo">
                <a href="home.php"><img src="../image/youcode_logo.png" alt="youcode_logo"></a>
                
                <h3>Clubs</h3>
            </div>
        </section>
        <section class="form">
                <div class="img_log">
                    <img src="../image/login_man.png" alt="">
                </div>
                <form class="demande_form" method="POST">
              
                   
                    <input type="hidden" name="id_club" value="<?php echo $_GET['id'] ?>">
                    <input type="text" name="name" placeholder="FULL NAME">
                    <input type="date" name="age" placeholder="AGE">
                    <input type="email" name="email" placeholder="EMAIL">
                    <input type="text" name="password" placeholder="CLASSE">
                    <input type="submit" value="envoyer" id="login_btn" name="submit">
                </form>
            
        </section>
    </main>
</body>
</html>