<?php

trait Prodotti {
    protected $nome;
    protected $categoria;
    protected $prezzo;
   
}

trait Quantità{
    protected $quantità;
    public function getQuantity ($int){
        if(!is_numeric($int)){
           throw  new Exception($this->quantità = "Inserire un numero!");
        }
        return $this->quantità=$int;
    }

    
}


