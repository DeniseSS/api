<?php
require_once("usuario.php");

class Artista extends Usuario{

	protected $descricao;
 

	
	public function getDescricao(){
       return $this->descricao;
        
    }
    public function setDescricao($desc){
       $this->descricao=$desc;
        
    }
  

   

}
  





?>