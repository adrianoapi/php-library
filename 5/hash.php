<?php

$pass = "abc123";

# passowrd_has();
$hash = password_hash($pass, PASSWORD_DEFAULT);

# verify
if (password_verify($pass, $hash)) {
    echo true;
} else {
    echo false;
}

$array = password_get_info($hash);
echo "<pre>";
print_r($array);