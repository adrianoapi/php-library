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

    public function getValor()
    {
        $vecto = new DateTime($this->data['dt_vencimento']);
        $agora = new DateTime('now');
        if ($vecto < $agora) {
            $interval = $vecto->diff($agora);
            $days = $interval->days;
            return $this->data['valor'] + $this->data['multa'] + ($this->data['valor'] * $this->data['juros'] * $days);
        } else {
            return $this->data['valor'];
        }
    }

    public function __set($proprieada, $valor)
    {
        if ($proprieada == 'dt_vencimento') {
            $this->setVencimento($valor);
        } else {
            $this->data[$proprieada] = $valor;
        }
    }

    public function setVencimento($vencimento)
    {
        $partes = explode('-', $vencimento);
        if (count($partes) == 3) {
            if (checkdate($partes[1], $partes[2], $partes[0])) {
                $this->data['dt_vencimento'] = $vencimento;
            } else {
                throw new Exception("Data {$vencimento} inválida");
            }
        }
    }

}

try {
    $titulo = new Titulo;
    $titulo->dt_vencimento = '2017-05-20';
    $titulo->valor = 12345;
    $titulo->multa = 2;
    $titulo->juros = 0.01;
    print 'O valor é: ' . number_format($titulo->valor, 2, ',', '.');
} catch (Exception $ex) {
    print $ex->getMessage();
}
