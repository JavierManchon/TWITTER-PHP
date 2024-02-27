<?php

require_once "Tweet.php";

$tweetsJSON = file_get_contents("files.json");
$tweets= json_decode($tweetsJSON, true);

$tweet = new Tweet("Javier", "MadVocado", $_POST["texto"]);

$tweet->ponerTweet($tweets["tweets"], $tweet);

$newTweets= json_encode($tweets);
//Devuelve un booleano, no el json resultante
file_put_contents("files.json", $newTweets);

require_once "index.html";

