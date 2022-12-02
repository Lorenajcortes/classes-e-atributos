<?php

class carro {

public $fiat = "Palio";
public $uno = "Fiat";
public $cor = "black";
public $Tipo = "Automotivo ";
public $tipo_automatico = "Gasolina";

public function tamanho () {

echo "fiat :{$this->fiat}<br>";
echo "uno :{$this->uno }<br>";




}

public function automovel () {

    echo "fiat :{$this->fiat}<br>";
    echo "uno :{$this->uno}<br>";
   
    
    
    
    }
    public function consumo () {
        echo "Tipo_combustivel:{$this->automatico }<br>";
        
        }


}
$carro1 = new carro ();
$carro1 -> consumo ();
$carro1 -> automovel ();
$carro1 -> tamanho();



