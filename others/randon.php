<?php

function radon_numbers()
{
    $data = array();
    while (count($data) < 6) {
        $r = rand(1, 60);
        if (!in_array($r, $data)) {
            array_push($data, $r);
        }
    }
    sort($data);
    return $data;
}

echo "<pre>";
print_r(radon_numbers());
echo "</pre>";
