<?php
// C:\xampp\htdocs\briefs\Gestion-des-clubs
include_once  "C:/xampp/htdocs/briefs/Gestion-des-clubs/classes/dbh.class.php";
class signup extends dbh{

    public function checksignup(){
        require_once PROJ_DIR . "/views/header.php";

            $login= $_POST['login'];
            $password = $_POST['Password'];

            $sql = "SELECT * FROM ADMIN WHERE login='$login' and password = '$password'";

            $query = mysqli_query($dsn, $sql);

            if (mysqli_num_rows($query) != 0)
            {
                header('location: ./demande.php');
            }
            else
            {
                echo"error";
            }


        }
    }
    ?>