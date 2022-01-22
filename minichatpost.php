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

    //Puis rediriger vers minichat.php comme ceci :
    header('Location: minichat.php');
    $req->closeCursor();
?>
