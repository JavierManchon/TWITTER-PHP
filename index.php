<?php

require_once "Tweet.php";

$tweetsJSON = file_get_contents("files.json");
$tweets= json_decode($tweetsJSON, true);

if (isset($_POST["texto"])) {
    //Esto geenra un objeto no un array, por eso lo pasamos con el metodo
    $tweet = new Tweet("Javier", "MadVocado", $_POST["texto"]);

    $tweet->ponerTweet($tweets["tweets"], $tweet-> convertArray());

    $newTweets= json_encode($tweets);
    //Devuelve un booleano, no el json resultante
    file_put_contents("files.json", $newTweets);
}
    
require_once "index.html";

