<?php

$number_rnd = $_GET['number'] ?? '';

function generate_pw($ciccio)
{
    $arrPass = str_split('abcdefghilmnopqrstuvzxkjywABCDEFGHILMNOPQRSTUVZXKJWY1234567890*#@%&£_-!?');
    $pw = '';

    foreach ($arrPass as $pass) {
        if (strlen($pw) < $ciccio) {
            
        }
    }
}
?>