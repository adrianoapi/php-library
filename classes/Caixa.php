<?php

class Caixa
{

    private $saque;
    private $saldo;
    private $notas = array(100, 50, 20, 10, 5, 2);

    public function __construct()
    {
        echo "<h1>caixa at work</h1>";
    }

    public function setDeposito($valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function setSaque($valor)
    {
        if ($valor <= $this->saldo) {
            $this->notas_saque($valor);
        }
    }

    public function getExtrato()
    {
        return $this->saldo;
    }

    public function notas_saque($valor)
    {
        $notas = rsort($this->notas);
        $i = $a = $soma = 0;

        while ($i < count($notas)) :
            $qtd[$i] = floor($valor / $notas[$i]);
            $soma += $qtd[$i];
            $valor = $valor - ($qtd[$i] * $notas[$i]);
            $i++;
        endwhile;

        while ($a < count($notas)) :
            echo " $qtd[$a]x notas de " . $notas[$a] . "<br>";
            $a++;
        endwhile;
    }

}

$obj = new Caixa();
$obj->setDeposito(500);
$obj->setDeposito(750);
echo $obj->getExtrato();