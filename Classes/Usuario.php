<?php
require_once("config.php");
class Usuario {
    private $idusuario;
    private $desclogin;
    private $senhalogin;
    private $dtcadastro;
    
    public function getId(){
        return $this->idusuario;
    }
    public function getDescLogin(){
        return $this->desclogin;
    }
    public function getSenha(){
        return $this->senhalogin;
    }
    public function getDtCadastro(){
        return $this->dtcadastro;
    }
    public function setId($idusuario){
        $this->idusuario=$idusuario;
    }
    public function setDescLogin($desclogin){
        $this->desclogin=$desclogin;
    }
    public function setSenha($senhalogin){
        $this->senhalogin=$senhalogin;
    }
    public function setDtCadastro($dtcadastro){
        $this->dtcadastro=$dtcadastro;
    }

   


?>