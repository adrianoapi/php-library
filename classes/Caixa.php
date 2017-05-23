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
            $this->getNotasSaque($valor);
        }else{
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
        $i = $a = $soma = 0;
        $notas = array(100, 50, 20, 10, 5, 2);
        rsort($notas);
        while ($i < count($notas)) :
            # Menor quantidade de notas da maior possível                      
            $qtd[$i] = floor($valor / $notas[$i]);

            # soma +1 a cada interação                     
            $soma += $qtd[$i];

            # Subtrai a quantidade de dinheiro já calculada do valor                      
            $valor = $valor - ($qtd[$i] * $notas[$i]);
            $i++;
        endwhile;

        while ($a < count($notas)) :
            echo ($qtd[$a] > 1 ? $qtd[$a]." notas" : $qtd[$a]." nota")." de " . $notas[$a] . "<br/>";
            $a++;
        endwhile;
    }

}

$obj = new Caixa();
$obj->setDeposito(500);
$obj->setDeposito(700);
echo $obj->getExtrato();
echo "<hr>";
echo $obj->setSaque(775);
