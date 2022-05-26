<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
require __DIR__ ."/Models/User.php";
// require __DIR__ ."/Models/Antipulci.php";


$cuccia= new Prodotti ("cuccia", 20,40);
$cibo1= new Cibo ("cibo per animali", 23.99 ,40,"Cibo per Gatti","Felix");
$gioco1= new Giochi ("Giochi per animali", 23.99 ,40,"palla","rosa");
$user1= new User ("Martina","123456789", false, false );

var_dump($cuccia);
var_dump($cibo1);
var_dump($gioco1);
var_dump($user1);
