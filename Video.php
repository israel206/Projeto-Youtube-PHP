<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author Mr-Robot
 */
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzido;
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzido = false;
    }
    public function like() {
        $this->curtidas ++;
    }
    public function pause() {
        $this->reproduzido = false;
    }
    public function play() {
        $this->reproduzido = true;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAvaliacao() {
        return $this->avalicao;
    }
    public function getViews() {
        return $this->views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function getReproduzido() {
        return $this->reproduzido;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function setReproduzido($reproduzido) {
        $this->reproduzido = $reproduzido;
    }
}
