<?php

class Usuario {
    // Propriedade
    public $primeiroNome;
    // Metodo que diz Olá ao usuário $primeiroNome.
    public function hello()
    {
    echo "Olá, " . $this->primeiroNome;
    return $this;
    }
    public function registrar()
    {
    echo ">> registrado " . $this->primeiroNome;
    return $this;
    }
    public function mail()
    {
    echo ">> e-mail enviado";
    }  
    }

    $user1 = new Usuario();

    $user1->primeiroNome = "Jane";

    $user1->Hello()->registrar()->mail();