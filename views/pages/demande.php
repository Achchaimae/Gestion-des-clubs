<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- linking css style -->
    <link rel="stylesheet" href="../assets/css/style.css">
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
                <a href="../index.html"><img src="../assets/image/youcode_logo.png" alt="youcode_logo"></a>
                
                <h3>Clubs</h3>
            </div>
        </section>
        <section class="form">
                <div class="img_log">
                    <img src="../assets/image/login_man.png" alt="">
                </div>
                <form action="?c=demande" class="demande_form" method="post">
                    <input type="text" name="name" placeholder="FULL NAME">
                    <input type="text" name="age" placeholder="AGE">
                    <input type="email" name="email" placeholder="EMAIL">
                    <input type="text" name="classe" placeholder="CLASSE">
                    <input type="submit" value="envoyer" id="login_btn">
                </form>
            
        </section>
    </main>
</body>
</html>