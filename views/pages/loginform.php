<?php

require_once PROJ_DIR . "/includes/users_header.php";

?>
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
            <form action="?u=log&a=session" class="SignUp_form" method="POST">
                <input type="text" name="login" placeholder="LOGIN">
                <input type="password" name="password" placeholder="PASSWORD">
                <!-- <input type="submit" value="login" id="login_btn"> -->
                <button type="submit" value="login" id="login_btn">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>