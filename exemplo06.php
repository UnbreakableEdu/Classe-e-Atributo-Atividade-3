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
    echo ">> registrado" . $this->nome;
    return $this;
    }
    public function mail()
    {
    echo ">> e-mail enviado" . $this->nome;
    }  
    }

    $user1 = new Usuario();

    $user1->primeiroNome = "Jane";

    echo $user1->Hello()->registrar()->mail();