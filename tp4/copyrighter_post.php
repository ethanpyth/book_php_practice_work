<?php
session_start();
if (isset($_FILES['img'])){
    $folder = 'upload_files/';
    $files = basename($_FILES['img']['name']);
    if (move_uploaded_file($_FILES['img']['tmp_name'], $folder . $files)){
        $_SESSION['pathimg'] = $folder . $files;
        header('copyrighter.php');
    }
    else{
        echo 'Veuillez réessayer.';
    }
}
session_destroy();