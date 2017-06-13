<?php

class Caixa
{

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
            $this->getNotasSaque($valor);
        } else {
            echo "Saldo insuficiente!";
        }
    }

    public function getExtrato()
    {
        return $this->saldo;
    }

    /**
     * Lógica da liberação de notas
     * @param type $valor
     */
    private function getNotasSaque($valor)
    {
        $i = $j = 0;
        rsort($this->notas);
        while ($i < count($this->notas)) :
            # Menor quantidade de notas da maior possível                      
            $qtd[$i] = floor($valor / $this->notas[$i]);

            # Subtrai a quantidade de dinheiro já calculada do valor                      
            $valor = $valor - ($qtd[$i] * $this->notas[$i]);
            $i++;
        endwhile;
        while ($j < count($this->notas)) :
            echo ($qtd[$j] > 1 ? $qtd[$j] . " notas" : $qtd[$j] . " nota") . " de " . $this->notas[$j] . "<br/>";
            $j++;
        endwhile;
    }

    public function getCedulas()
    {
        $arr = [
            100 => "Cem",
            50 => "Cinquenta",
            20 => "Vinte",
            10 => "Dez",
            5 => "Cinco",
            2 => "Dois"
        ];
    }

}

$obj = new Caixa();
$obj->setDeposito(500);
$obj->setDeposito(700);
echo $obj->getExtrato();
echo "<hr>";
echo $obj->setSaque(778);
