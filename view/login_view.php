<?php

include('../templates/navbar.php');
?>
<form action="../controller/login_controller.php" method="POST">

    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
    </p>
    <p>
        <label for="password">password:</label>
        <input type="password" name="password" required>
    </p>
    <p>
        <input type="submit" value="Enviar">
    </p>
    <p>
        Estas registrat? <a href="register_view.php">Registrat</a>
    </p>
    <p>
        <?php
            if (isset($_GET['message'])) {
                echo "<h1>".$_GET['message']."<h1>";
            }
        ?>
    </p>

</form>

</body>
</html>