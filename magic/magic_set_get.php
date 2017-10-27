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
        $vecto = new DateTime($this->data[$dt_vencimento]);
        $agora = new DateTime('now');
        if ($vecto < $agora) {
            $interval = $vecto->diff($agora);
            $days = $interval->days;
            return $this->data['valor'] + $this->data['multa'] + ($this->data['valor'] * $this->data['juros'] * $days);
        } else {
            return $this->data['valor'];
        }
    }

}
