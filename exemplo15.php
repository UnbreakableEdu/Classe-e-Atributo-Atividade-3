<?php
//ATIVIDADE 1:
//public -> classe: ok - classe filha: ok - escopo global: ok
//protected -> classe: ok - classe filha: ok - escopo global: X
//private -> classe: ok - classe filha: X - escopo global: X

//ATIVIDADE 2 A 9:

class Usuario {
    // Propriedade
    protected $nomeUsuario;
    // Metodo que diz Olá ao usuário $primeiroNome.  
    public function setNome($nome){
        //validar certos modelos de carro
        //que são atribuidos à propriedade $modelo
        $this ->nomeUsuario=$nome;  
        }
    }

class Admin extends Usuario{
    public function escrevaNome() {
        return __CLASS__;
        }
    public function digaOla(){
        return "Olá Admin, ". $this->nomeUsuario;
    }
}

$admin1 = new Admin();

$admin1-> setNome("Balthazar");

echo $admin1->digaOla();

