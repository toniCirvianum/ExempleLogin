<?php
session_start();
include('../model/users_model.php');
include('./user_controller.php');
include('./error_controller.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password']) && 
    isset($_POST['name']) && isset($_POST['password2']) &&
    isset($_POST['mail'])) {
        $newUser = [
        $id = getLastId(),
        $name = $_POST['name'],
        $username = $_POST['username'],
        $pass1 = $_POST['password'],
        $pass2 = $_POST['password2'],
        $mail = $_POST['mail'],
        $rol = 'user',
        ];

        if (userExists($username)) {
            //error d'usuari 0
            header('Location: ../view/register_view.php?message='.errorController(4) );
            exit();
        }


    }
    # code...
}
