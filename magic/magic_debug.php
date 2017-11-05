<?php

class Teste
{

    private $quadrado;

    public function __construct($val)
    {
        $this->quadrado = $val;
    }

    public function __debugInfo()
    {
        return [
            'valor_quadrado' => $this->quadrado ** 2,
        ];
    }

}

var_dump(new Teste(9));
