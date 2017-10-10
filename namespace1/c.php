<?php

require_once 'a.php';
use Application\Form;

var_dump(new Form);
// object(Application\Form)#1 (0) { }


#var_dump(new Field); Erro: Use não defnido

# Correção
var_dump(new \Application\Field());
// object(Application\Field)#1 (0) { }