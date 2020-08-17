<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visualizacao
 *
 * @author Mr-Robot
 */
require_once 'Video.php';
require_once 'Cliente.php';
class Visualizacao {
    private $espectador;
    private $filme;
    
    public function __construct($espectador, $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->SetTotAssistido($this->espectador->getTotAssistido() + 1);
    }
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if($porc <= 20){
            $nova = 3;
        }else if($porc <= 50){
            $nova = 5;
        }else if($porc <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    
    
    public function getEspectador() {
        return $this->espectador;
    }
    public function getFilme() {
        return $this->filme;
    }
    public function setEspectador($espectador) {
        $this->espectador = $espectador;
    }
    public function setFilme($filme) {
        $this->filme = $filme;
    }
}
