<?php

require 'oeuvres.php';

$pdo = new PDO ("mysql:host=localhost;dbname=artbox;charset=utf8", "root", "");

$query = "INSERT INTO oeuvres (titre, description, artiste, image)
          VALUES (:titre, :description, :artiste, :image)";

$insert = $pdo->prepare($query);

foreach ($oeuvres as $o) {

    $imageUrl = "http://localhost/Artbox/" . $o['image'];

    $insert->execute([
        ':titre' => $o['titre'],
        ':description' => $o['description'],
        ':artiste' => $o['artiste'],
        ':image' => $imageUrl
    ]);
}

echo "Insertion completed.";