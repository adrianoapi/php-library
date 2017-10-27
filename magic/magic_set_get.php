<?php

class Titulo
{

    private $data;

    public function __get($propriedade)
    {
        if ($propriedade == 'valor') {
            return $this->getValor();
        } else {
            return $this->data[$propriedade];
        }
    }

    

}
