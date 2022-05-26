<?php 
class Giochi extends Prodotti{
    protected $tipologiaGioco;
    protected $colore;
    function __construct(String $tipologiaProdotto, float $prezzo, int $sconto, String $tipologiaGioco, String $colore){
        parent:: __construct($tipologiaProdotto, $prezzo, $sconto);
        $this->tipologiaGioco=$tipologiaGioco;
        $this->colore=$colore;
    }
}
