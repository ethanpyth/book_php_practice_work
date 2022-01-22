<?php
    //Effectuer ici la requette qui insère le message
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
}catch (Exception $e){
    die('Erreur :' . $e->getMessage());
}
$req = $bdd->exec('INSERT INTO minichat(pseudo, message) VALUES (:pseudo, :message)');
$req->execute(array(
    'nom' => $_POST['pseudo'],
    'message' => $_POST['message']
));

    //Puis rediriger vers minichat.php comme ceci :
    header('Location: minichat.php');
?>
