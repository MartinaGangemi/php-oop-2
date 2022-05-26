<?php

class User {
    protected $nomeUtente;
    private $numeroCarta;
    private $cartaScaduta;
    protected $registrazione;
    protected $sconto;
    protected $pagamentoConsentito;
    


    function __construct(String $nomeUtente, int $numeroCarta, bool $cartaScaduta, bool $registrazione, bool $sconto, $pagamentoConsentito){
        $this->nomeUtente=$nomeUtente;
        $this->numeroCarta=$numeroCarta;
        $this->cartaScaduta=$cartaScaduta;
        $this->registrazione=$registrazione;
        $this->sconto=$sconto;
        
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