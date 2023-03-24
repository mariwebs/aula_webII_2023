<?php
include "../Model/BD.class.php";

class UsuarioController {

    private $model;
    private $table = "usuario";

    public function __construct(){

        $this->model = new BD();
    }

    public function salvar($dados){

        $this->model->inserir($this->table, $dados);

    }

    public function carregar(){
        
        return $this->model->select($this->table);
    }

    public function deletar($id){
        
        return $this->model->remove($this->table,$id);
    }

    public function buscar($id){
        
        return $this->model->buscar($this->table,$id);
    }

}
