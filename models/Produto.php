<?php 


namespace app\models;

class Produto {
    protected $nome;
    protected $descricao;
    protected $preco;
    protected $quantidade;


    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

   
}
