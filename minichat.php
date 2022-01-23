<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MINI CHAT</title>
</head>
<body>
    <link href="minichat.css">
    <form method="post" action="minichatpost.php">
        <p>
            <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" value="<?php echo htmlspecialchars($_COOKIE['pseudo']) ?>" placeholder="Entrer votre pseudo"><br>
            <label for="message">Message</label> : <input type="textarea" name="message" placeholder="Entrer votre message">
            <input type="submit">
        </p>
    </form>
    <div id="message_zone">
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
        }catch (Exception $e){
            die('Erreur :' . $e->getMessage());
        }
        $reponse = $bdd->query('SELECT * FROM minichat ORDER BY id limit 0, 10');
        while ($donnees = $reponse->fetch())
        {
            echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
        }
        $reponse->closeCursor();
        ?>
    </div>
</body>
</html>
