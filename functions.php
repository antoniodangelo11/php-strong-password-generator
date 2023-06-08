<?php

$number_rnd = $_GET['number'] ?? '';

function generate_pw($num)
{
    $arrPass = str_split('abcdefghilmnopqrstuvzxkjywABCDEFGHILMNOPQRSTUVZXKJWY1234567890*#@%&£_-!?^=.,;:');
    shuffle($arrPass);
    $pw = '';

    foreach ($arrPass as $pass) {
        if (strlen($pw) < $num) {
            $pw .= $pass; 
        }
    };
    return $pw;
};