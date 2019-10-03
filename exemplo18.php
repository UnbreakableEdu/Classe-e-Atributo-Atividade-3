<?php
abstract class Usuario {
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
    // Metodo abstrato
    abstract public function declararSeuPapel();
    }

    class Admin extends Usuario {
        // Herdamos um metodo abstrato da classe mae
        // Temos que defini-lo na classe filha
        // Adicionando codigo no corpo do metodo
        public function declararSeuPapel() {
            return "Admin\n";
        }
        public function digaOla(){
            return "Olá Admin, ". $this->getNome();
        }
        }
        class Viewer extends Usuario {
            // Herdamos um metodo abstrato da classe mae
            // Temos que defini-lo na classe filha
            // Adicionando codigo no corpo do metodo
            public function declararSeuPapel() {
                return "Olá Admin, ". $this->getNome();
            }}

            $admin1 = new Admin();

            $admin1-> setNome("Mefistófeles");
            
            echo $admin1->declararSeuPapel();
            echo $admin1->digaOla();

    