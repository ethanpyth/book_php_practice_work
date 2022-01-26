<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page protégée par mot de passe</title>
    </head>
    <body>
        <p>
            Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :
        </p>
        <form action="nasa.php" method="post">
            username: <input type="text" name="username" text=""> <br>
            password: <input type="password" name="password"> <br>
            <input type="submit" value="valider">
        </form>
        <p>
            Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe !
        </p>
    </body>
</html>
