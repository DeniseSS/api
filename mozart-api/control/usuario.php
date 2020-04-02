<?php

class Usuario{

 	protected $nome;
 	protected $sobrenome;
 	protected $contato;
 	protected $email;
 	protected $senha;
 	protected $dataNascimento;
 	protected $foto;
 	protected $descricao;


	 public function getNome(){
       return $this->nome;
        
    }
     public function getSobrenome(){
       return $this->sobrenome;
        
    }
     public function getContato(){
       return $this->contato;
        
    }
     public function getEmail(){
       return $this->email;
        
    }
    public function getSenha(){
       return $this->Senha;
        
    }
     public function getDataNasci(){
       return $this->dataNascimento;
        
    }
      public function getFoto(){
       return $this->foto;
        
    }
    


//set valores
   

     public function setNome($nome){
       $this->nome = $nome;
    }
        
    
     public function setSobrenome($sobren){
       $this->sobrenome = $sobren;
        
    }
     public function setContato($cont){
        $this->contato=$cont;
        
    }
     public function setEmail($email){
        $this->email=$email;
        
    }
      public function setSenha($senha){
        $this->email=$senha;
        
    }
     public function setDataNasc($d_nasc){
       $this->dataNascimento=$d_nasc;
        
    }
      public function setFoto($foto){
       $this->foto=$foto;
        
    }
     


}






?>