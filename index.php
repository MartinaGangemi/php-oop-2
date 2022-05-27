<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
require __DIR__ ."/Models/User.php";


$cibo1= new Cibo ("crocchette","Cibo per animali", 23.99 ,"Felix");
try {
     $cibo1->getQuantity(33);
  } catch (Exception $e) {
    'Eccezione: '.$e->getMessage();
  }

$gioco1= new Giochi ("Palla" ,"Giochi per animali" , 23.99 ,"rosa");

try {
     $gioco1->getQuantity("sss2");
  } catch (Exception $e) {
     'Eccezione: '.$e->getMessage();
  }

$user1= new User ("Martina",true,0, 12345, false,  true);
$user1->getSconto();
$user1->checkCard();
$user2= new User ("Peppe",false,0, 12345, true, true);
$user2->getSconto();
$user2->checkCard();

var_dump($user1,$user2);
var_dump($cibo1);
var_dump($gioco1);

