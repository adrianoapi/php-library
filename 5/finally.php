<?php

function fun($var)
{
    if (!$var) {
        throw new Exception("Aritmética erro: Divisão por zero...");
    }
    return 1 / $var;
}

try {
    echo fun(0) . "<br />";
} catch (Exception $ex) {
    echo "Exceção capturada: ", $ex->getMessage(), "<br />";
} finally {
    echo "Final do bloco!<br />";
}