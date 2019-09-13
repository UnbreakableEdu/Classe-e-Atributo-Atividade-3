<?php

class Usuario {
    // Propriedade
    private $primeiroNome;
    // Metodo que diz Olá ao usuário $primeiroNome.  
    public function setNome($primeiroNome){
        //validar certos modelos de carro
        //que são atribuidos à propriedade $modelo
        $this -> primeiroNome=$primeiroNome;
        
        }
        public function getNome(){
        return "Olá, " . $this->primeiroNome.", seja bem-vindo";
        }
    }

    $user1 = new Usuario();

    $user1->setNome("Joe");

    echo $user1->getNome();