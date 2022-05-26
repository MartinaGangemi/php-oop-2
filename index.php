<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
require __DIR__ ."/Models/User.php";
// require __DIR__ ."/Models/Antipulci.php";



$cibo1= new Cibo ("cibo per animali", 23.99 ,"Cibo per Gatti","Felix");
$gioco1= new Giochi ("Giochi per animali", 23.99 ,"palla","rosa");
$user1= new User ("Martina","123456789",true, true);

var_dump($user1);
var_dump($cibo1);
var_dump($gioco1);
