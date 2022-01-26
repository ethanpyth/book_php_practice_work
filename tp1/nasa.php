<?php
    if (isset($_POST['password']) AND $_POST['password'] == 'kangourou')
    {
        echo 'félicitations vous avez accès a la page sécrète de la nasa';
    }
    else
    {
        echo 'désolé veuillez retenter le coup en <a href="login.php">cliquant ici</a>';
    }
?>