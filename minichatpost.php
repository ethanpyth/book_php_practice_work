<?php
    //Effectuer ici la requette qui insère le message
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
    }catch (Exception $e){
        die('Erreur :' . $e->getMessage());
    }
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES (?, ?)');
    $req->execute(array(
        $_POST['pseudo'],
        $_POST['message']
    ));
    setcookie('pseudo', $_POST['pseudo'], time() + 24 * 3600);

    //Puis rediriger vers minichat.php comme ceci :
    header('Location: minichat.php');
    $req->closeCursor();
?>
