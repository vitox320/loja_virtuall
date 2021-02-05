<?php

namespace app\Model;

class Usuario
{
    protected $nome;
    protected $email;
    protected $senha;
    protected $cpf;

    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function create()
    {
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
