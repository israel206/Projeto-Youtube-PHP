<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gafanhoto
 *
 * @author Mr-Robot
 */
require_once 'Pessoa.php';
class Cliente extends Pessoa{
    private $login;
    private $totAssistido;
    
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    public function assistirMaisUm(){
        $this->totAssistido ++;
    }
    public function getLogin() {
        return $this->login;
    }
    public function getTotAssistido() {
        return $this->totAssistido;
    }
    public function setLogin($login) {
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }
}
