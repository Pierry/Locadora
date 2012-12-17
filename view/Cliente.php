<?php

class Cliente {
    
    public $idCliente;
    public $nome;
    public $email;
    public $telefone;
    public $cpf;
    
    public function getIdCliente(){
        return $this->idCliente;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    
    public function getCPF(){
        return $this->cpf;
    }
    
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;        
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function setTelefone($telefone){
        $this->genero = $telefone;
    }
    
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }    
}

?>
