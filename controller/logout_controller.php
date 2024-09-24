<?php
    unset($_SESSION['userLogged']);
    header('Location: ../view/login.php');
?>