<?php

abstract class Usuario {
    protected $numeroDeArtigos = 0;
    // Metodos abstrato e concretos
    public function setNumeroDeArtigos($nart){
        $numeroDeArtigos = (int)$nart;
        $this ->numeroDeArtigos=$numeroDeArquivos;
    }
    public function getNumeroDeArtigos(){
        return $this->numeroDeArtigos;
    }
    abstract public function calcPontuacao();
    }

    class Autor extends Usuario {
        // Herdamos um metodo abstrato da classe mae
        // Temos que defini-lo na classe filha
        private $dados;
        public function __construct($dados) {
            $this->dados = $dados;
            }
        // Adicionando codigo no corpo do metodo
        public function calcPontuacao(){
            return ($this->dados * 10) + 20;
            }
        }

    class Editor extends Usuario {
        // Herdamos um metodo abstrato da classe mae
        private $dados1;

        public function __construct($dados1) {
        $this->dados1 = $dados1;
        }
        // Temos que defini-lo na classe filha
        // Adicionando codigo no corpo do metodo
        public function calcPontuacao(){
            return ($this->dados1 * 6) + 15;
            }
        }

        $autor1 = new Autor(8);
        $editor1 = new Editor(15);

        echo $autor1->calcPontuacao() . "\n";
        echo $editor1->calcPontuacao();