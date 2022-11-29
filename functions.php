<?php


function passwordGenerator($number)
{
    /* //random characters
    $randomChar = random_bytes($number);


    $password = bin2hex($randomChar);

    return $password; */

    $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMOPQRSTUVWXYZ<>§^$?!%&/@*-';

    $password = '';

    for ($i = 0; $i < $number; $i++) {
        $randomCharacter = $characters[rand(0, strlen($characters)-1)]; //carattere in posizione randomica

        $password.= $randomCharacter;
    }
    return $password;
}