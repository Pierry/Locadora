<?php

class Filme {
    public $idfilme;
    public $titulo;
    public $sinopse;
    public $idgenero;
    
    public function getIdFilme(){
        return $this->idfilme;
    }

    public function getTitulo(){
        return $this->titulo;
    }    
    
    public function getSinopse(){
        return $this->sinopse;
    }        
    
    public function getIdGenero(){
        return $this->idgenero;
    }    
    
    public function setIdFilme($idFilme){
        $this->idfilme = $idFilme;
    }
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function setSinopse($sinopse){
        $this->sinopse = $sinopse;
    }
    
    public function setIdGenero($genero){
        $this->idgenero = $genero;
    }
}
?>
