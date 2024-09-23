<?php
session_start();
include('./model/users_model.php');

unset($_SESSION['userLogged']);
if (!isset($_SESSION['userLogged'])) {
    header('Location: ./view/login_view.php');
    exit();
} else {
    header('Location: ./view/user_view.php');
    exit();
}
?>