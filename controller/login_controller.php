<?php
session_start();
include('../model/users_model.php');
include('./user_controller.php');
include('./error_controller.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if (!userExists($user)) {
            //error d'usuari 0
            header('Location: ../view/login_view.php?message='.errorController(0) );
            exit();
        }

        if (!credentialsOk($user, $pass)) {
            echo "error";
        } else {
            $_SESSION['userLogged'] = getUserByName($user);
            header('Location: ../view/user_view.php');
            exit();
        }
    }
    # code...
}
