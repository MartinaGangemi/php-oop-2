<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
require __DIR__ ."/Models/User.php";

// require __DIR__ ."/Models/Antipulci.php";

$cibo1= new Cibo ("crocchette","Cibo per animali", 23.99 ,"Felix");
$gioco1= new Giochi ("Palla" ,"Giochi per animali" , 23.99 ,"rosa");
// $user1= new User ("Martina",true,0, 12345, false,  true);
// $user1->getSconto();
// $user1->checkCard();
// $user2= new User ("Peppe",false, true,0, 12345, true);
// $user2->getSconto();
// $user2->checkCard();


// var_dump($user1,$user2);
var_dump($cibo1);
var_dump($gioco1);

