<?php
echo '<br>';
$login = $_POST['login'];
$password = $_POST['password'];
/* var_dump($login);
var_dump($password); */
if (isset($login)) {
    if (isset($password)){
        if($loginModel->checkLogin($login,$password)){
            $_SESSION["login"] = 'admin';
        }
    }
    else {
        echo 'no passowrd';
    }
}else {
    echo 'no login';
}
header('Location: ./index.php');
/* 
var_dump($_POST);
echo '####>';
unset($_POST); */





