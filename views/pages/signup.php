<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userstyle.css">
    
    <!-- linking css style -->
<!--     <link rel="stylesheet" href="style.css">
 -->    <!-- end linking css style -->
    
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
    <link rel="icon" type="image/x-icon" href="../assets/image/icon_web.png">
</head>

<body>
    <main>
        <section class="navbar">
            <div class="youcode_logo">
                <a href="../index.html">
                    <img src="views/image/youcode_logo.png" alt="youcode_logo">
                </a>
          <h3>Clubs</h3>
            </div>
            
        </section>
        <section>
            <form action="?c=log&a=checkpassword" class="SignUp_form" method="POST">
                <input type="text" name="login" placeholder="LOGIN">
                <input type="password" name="password" placeholder="PASSWORD">
                <!-- <input type="submit" value="login" id="login_btn"> -->
                <button type="submit" value="login" id="login_btn">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>