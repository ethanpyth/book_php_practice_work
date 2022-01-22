<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MINI CHAT</title>
</head>
<body>
    <div>
        <form method="post" action="minichatpost.php">
            Pseudo: <input type="text" name="pseudo" placeholder="Entrer votre pseudo"> <br>
        </form>
    </div>
    <div>
        <?php
        ?>
    </div>
    <div>
        <form method="post" action="minichat.php">
            Message : <input type="textarea" name="message" placeholder="Entrer votre message">
            <input type="submit">
        </form>
    </div>
</body>
</html>
