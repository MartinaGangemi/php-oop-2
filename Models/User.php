<?php
require __DIR__ ."/Card.php";
class User {
    use Card;
    protected $nomeUtente;
    protected $registrazione;
    protected $sconto;
    
    


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