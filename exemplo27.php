<?php

interface Usuario{
    public function setNomeUsuario($nomeUsuario);
    public function getNomeUsuario();

    public function setSexo($sexo);
    public function getSexo();

}

class Comentarista implements Usuario{
    protected $nomeUsuario = '';
    protected $sexo = 'não é da sua conta!';

    public function setNomeUsuario($nome){
        $this->nomeUsuario=(is_string($nome))? $nome : 'N/D';
    }
    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function setSexo($sexo){
        $sexoArray = array('feminino','masculino','outro');
        if(in_array($sexo,$sexoArray)){
            $this->sexo=$sexo;
        }}
    public function getSexo(){
        return $this->sexo;
    }
    }

function adicionarAoNomeUsuario(Usuario $usuario){
    $nomeUsuario = $usuario->getNomeUsuario();
    $sexoUsuario = $usuario->getSexo();

    if($sexoUsuario === 'feminino'){
        return "Sra. ".$nomeUsuario;
    }else if($sexoUsuario === 'masculino'){
        return "Sr. ".$nomeUsuario;
    }
    return $nomeUsuario;
}

$usuario1 = new Comentarista();
$usuario1->setNomeUsuario("Jane");
$usuario1->setSexo('feminino');
echo adicionarAoNomeUsuario($usuario1)."\n";

$usuario2 = new Comentarista();
$usuario2->setNomeUsuario("Bobby");
$usuario2->setSexo('masculino');
echo adicionarAoNomeUsuario($usuario2)."\n";

$usuario3 = new Comentarista();
$usuario3->setNomeUsuario("Lupicínio");
$usuario3->setSexo('masculino');
echo adicionarAoNomeUsuario($usuario3)."\n";

$usuario4 = new Comentarista();
$usuario4->setNomeUsuario("Belina");
$usuario4->setSexo('feminino');
echo adicionarAoNomeUsuario($usuario4)."\n";
