<?php

require __DIR__."/Models/Prodotti.php";
require __DIR__ ."/Models/Cibo.php";
require __DIR__ ."/Models/Giochi.php";
// require __DIR__ ."/Models/Antipulci.php";


$cuccia= new Prodotti ("cuccia", 20,40);
$cibo1= new Cibo ("cibo per animali", 23.99 ,40,"boh","boh");
$gioco1= new Giochi ("Giochi per animali", 23.99 ,40,"palla","rosa");

var_dump($cuccia);
var_dump($cibo1);
var_dump($gioco1);
