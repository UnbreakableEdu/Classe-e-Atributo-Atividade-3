<?php

//ATIVIDADE 10:

class Usuario {
    // Propriedade
    protected $nomeUsuario;
    // Metodo que diz Olá ao usuário $primeiroNome.  
    public function setNome($nome){
        //validar certos modelos de carro
        //que são atribuidos à propriedade $modelo
        $this ->nomeUsuario=$nome;  
        }
    public function getNome(){
            return $this->nomeUsuario;
            }
    }

class Admin extends Usuario{
    public function escrevaNome() {
        return __CLASS__;
        }
    public function digaOla(){
        return "Olá Admin, ". $this->getNome();
    }
}

$admin1 = new Admin();

$admin1-> setNome("Balthazar");

echo $admin1->digaOla();