<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>COPYRIGHTER</title>
</head>
<body>
    <h1>Copyrighter</h1>
    <div>
        <p>
            Bienvenu sur le site <strong>COPYRIGHTER</strong>. Ce dernier vous permet de signer vos images (photos) que <br>
            que vous avez personnellement réaliser afin d'éviter de faire plagier. Alors pour cela vous pouvez suivre <br>
            les instructions ci-dessous afin de les signer.
        </p>
    </div>
    <form enctype="multipart/form-data" method="post" action="copyrighter_post.php">
        <div>
            <input type="file" name="img" value="Choisir un fichier">
        </div><br>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    <img src="<?php echo $_SESSION['pathimg']; ?>" alt="Insérer une image">
</body>
</html>
<?php session_destroy(); ?>