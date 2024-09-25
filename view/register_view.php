<?php

include('../templates/navbar.php');
?>
<form action="../controller/register_controller.php" method="POST">
<p>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
    </p>
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" required>
    </p>
    <p>
        <label for="password">password:</label>
        <input type="password" name="password" required>
    </p>
    <p>
        <label for="password">password:</label>
        <input type="password" name="password2" required>
    </p>
    <p>
        <label for="mail">Mail:</label>
        <input type="mail" name="mail" required>
    </p>
    <p>
        <input type="submit" value="Enviar">
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