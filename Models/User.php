<?php

class User {
   protected $nomeUtente;
    protected $registrazione;
    protected $sconto;
    protected $numeroCarta;
    protected $cartaScaduta;
    
    
    function __construct(String $nomeUtente, bool $registrazione, bool $sconto,int $numeroCarta, bool $cartaScaduta, $pagamentoConsentito){
        $this->nomeUtente=$nomeUtente;
        $this->registrazione=$registrazione;
        $this->sconto=$sconto;
        $this->numeroCarta=$numeroCarta;
        $this->cartaScaduta=$cartaScaduta;
    }

    public function getSconto(){
        if($this->registrazione){
            $this->sconto = 20;
            return $this->sconto ;
        }  else{
            return $this->sconto = 0;
        }
    }

    public function checkCard(){
        if($this->cartaScaduta){
            return $this->pagamentoConsentito = "Carta non valida!";
        }else{
            return $this->pagamentoConsentito = "puoi effettuare il pagamento";
        }
    }
}