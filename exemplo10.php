<?php

class Usuario
{
// as propriedades
private $primeiroNome;
private $ultimoNome;

public function __construct($primeiroNome,$ultimoNome)
{
$this->primeiroNome=$primeiroNome; 
$this->ultimoNome=$ultimoNome;
}
public function getNomeCompleto(){
    return "Olá, " . $this->primeiroNome." ".$this->ultimoNome.", seja bem-vindo";
    }
}

$user1 = new Usuario("Johnny","Bravo");

echo $user1->getNomeCompleto();
