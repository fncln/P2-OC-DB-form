<?php

if (empty ($_POST['titre']) 
    || empty ($_POST['artiste'])
    || empty ($_POST['image'])
    || empty ($_POST['description'])
    || strlen ($_POST['description'])<3
    || !filter_var ($_POST['image'], FILTER_VALIDATE_URL)){

    header ('Location: ajouter.php');
exit;

} else {
    $titre = htmlspecialchars($_POST['titre']);
    $description = htmlspecialchars($_POST['description']);
    $artiste = htmlspecialchars($_POST['artiste']);
    $image = htmlspecialchars($_POST['image']);
}