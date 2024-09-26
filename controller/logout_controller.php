<?php
    session_start();
    unset($_SESSION['userLogged']);
    header('Location: ../view/login.php');
?>