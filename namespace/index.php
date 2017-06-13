<?php

require_once 'Aviao.php';
require_once 'Barco.php';
require_once 'Carro.php';

use Automovel as Auto;

$a = new Auto\Aviao;
$b = new Auto\Barco;
$c = new Auto\Carro;

$a->andar();
$b->andar();
$c->andar();