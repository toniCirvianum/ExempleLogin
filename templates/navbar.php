<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <ul>
            <?php
            if (isset($_SESSION['userLogged'])) {
            ?>
               <li> <a href="../controller/register_view.php">edit user</a> </li>
               <li> <a href="../controller/logout_controller.php">logout</a> </li>

            <?Php    }        ?>
            <?php $url="../view/user.view.php";
            if ($_user['userLoggef']['rol']='admin') {
                echo '<li><a href="'.$url.'">Editar usuaris</a></li>';
            }
            ?>

            <li> <a href="#">Boto1</a> </li>
            <li> <a href="#">Boto1</a> </li>


        </ul>
    </div>