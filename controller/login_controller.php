<?php
    session_start();
    include('../model/users_model.php');
    include('./user_controller.php');

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $user=$_POST['username'];
            $pass=$_POST['password'];

            if (!userExists($user)) {
                echo "error";
            }
            
            if (!credentialsOk($user,$pass)) {
                echo "error";
            } else {
                $_SESSION['userLogged']=getUserByName($user);
                header('Location: ../view/user_view.php');
                exit();
            }
        }
        # code...
    }