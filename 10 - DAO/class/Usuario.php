<?php

class Usuario {
    
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;
    
    public function getIdusuario(){
        return $this->idusuario;
    }
    
    public function setIdusuario($value){
        $this->idusuario = $value;
    }
    
    public function getDeslogin(){
        return $this->deslogin;
    }
    
    public function setDeslogin($value){
        $this->deslogin = $value;
    }
    
    public function getDessenha(){
        return $this->dessenha;
    }
    
    public function setDessenha($value){
        $this->dessenha = $value;
    }
    
    public function getDtcadastro(){
        return $this->dtcadastro;
    }
    
    public function setDtCadastro($value){
        $this->dtcadastro = $value;
    }
    
    public function loadById($id){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
                ":ID" => $id
        ));
        
        if(count($results) > 0){
        
            $this->setData($results[0]);
        }
        
    }
    
    public static function getList(){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios ORDER BY dessenha;");
    }
    
    public static function seach($login){
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEACH ORDER BY dessenha;", array(
            ':SEACH' =>  "%".$login."%"
        ));
    }
    
    public function login($login, $password){
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
                ":LOGIN" => $login,
                ":PASSWORD" => $password
        ));
        
        if(count($results) > 0){
        
            $row = $results[0];
            
            $this->setData($results[0]);
            
        }else{
            throw new Exception("Login e/ou senha inválidos", 1);
        }
    }
    
    public function setData($data){
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }
    
    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'    => $this->getDeslogin(),
            ':PASSWORD' => $this->getDessenha()
        ));
        
        if(count($results) > 0 ){
            $this->setData($results[0]);
        }
    }
    
    public function __construct($login = "", $password = ""){
        $this->setDeslogin($login);
        $this->setDessenha($password);
    }
    
    public function __toString(){
    
        return json_encode(array(
            "idusuario"  => $this->getIdusuario(),
            "deslogin"   => $this->getDeslogin(),
            "dessenha"   => $this->getDessenha(),
            "tcadastro"  => $this->getDtcadastro()->format("d/m/Y H:i:s")
        ));
        
    }
    
}

?>