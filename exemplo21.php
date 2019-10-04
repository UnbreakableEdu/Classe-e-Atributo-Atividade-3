<?php

class Usuario{
    protected $nomeUsuario;

    public function setNome($nome){
        //validar certos modelos de carro
        //que são atribuidos à propriedade $modelo
        $this ->nomeUsuario = $nome;  
        }
    public function getNome(){
            return $this->nomeUsuario;
            }
}

interface Autor{

    public function setPrivilegiosAutor($array);

    public function getPrivilegiosAutor();
}

interface Editor{

    public function setPrivilegiosEditor($array);

    public function getPrivilegiosEditor();
}

class AutorEditor extends Usuario implements Autor, Editor{
    private $arrayPrivilegiosAutor = array();
    private $arrayPrivilegiosEditor = array();

    public function setPrivilegiosAutor($array){
        $this->arrayPrivilegiosAutor = $array;
    }
    
    public function getPrivilegiosAutor(){
        return $this->arrayPrivilegiosAutor;
    }
    
    public function setPrivilegiosEditor($array){
        $this->arrayPrivilegiosEditor = $array;
    }
    
    public function getPrivilegiosEditor(){
        return $this->arrayPrivilegiosEditor;
    }
}

$usuario1 = new AutorEditor();
$usuario1-> setNome("Mefistófeles");
$usuario1-> setPrivilegiosAutor(array("escrever texto","acrescentar pontuação"));
$usuario1-> setPrivilegiosEditor(array("editar texto","editar pontuação"));

$nomeUsuario = $usuario1->getNome();
$privilegiosUsuario = array_merge($usuario1->getPrivilegiosAutor(),$usuario1->getPrivilegiosEditor());

echo $nomeUsuario . " Possui os seguintes previlégios: ";
echo implode(", ", $privilegiosUsuario);
echo ".";

