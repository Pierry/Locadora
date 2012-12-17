<?php

class ValidacaoRo {
    
    public function ValidarInsertCliente($nome, $email, $telefone, $cpf){
        if (!$this->VerificarCampo($nome) || !$this->VerificarCampo($email) || !$this->VerificarCampo($telefone) || !$this->VerificarCampo($cpf)){
            return "Campos incorretos!";
        } else {            
        }        
    }
    
    public function ValidarConsultaFilme($nome, $genero){
        if (!$this->VerificarCampo($nome) && !$this->VerificarCampo($genero)){
            return false;
        } else {
            return true;
        }
    }

    public function ValidarAluguel($idCliente, $idFilme, $data){
        if (!$this->VerificarCampo($idCliente) || !$this->VerificarCampo($idFilme) || !$this->VerificarCampo($data)){
            return false;            
        } else {
            return true;
        }
    }

    public function VerificarCampo($campo){
        if (!isset($campo) || trim($campo)===''){
            return false;
        } else {
            return true;
        }
    }
}

?>
