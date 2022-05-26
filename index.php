<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
require __DIR__ ."/Models/User.php";
// require __DIR__ ."/Models/Antipulci.php";



$cibo1= new Cibo ("cibo per animali", 23.99 ,"Cibo per Gatti","Felix");
$gioco1= new Giochi ("Giochi per animali", 23.99 ,"palla","rosa");
$user1= new User ("Martina","123456789",true, false, 0, true);
$user1->getSconto();
$user1->checkCard();
$user2= new User ("Peppe","123456789",false, true, 0, true);
$user2->getSconto();
$user2->checkCard();


var_dump($user1,$user2);
var_dump($cibo1);
var_dump($gioco1);
