<?php 

require 'loginVlaidators.php';

function vals(string $entrada, string $type ='email'):string
{

    $validacao = match($type)
    {
        'email' => valsEmail($entrada),
        'password' => valsPass($entrada)
    };

    return $validacao;
    
}