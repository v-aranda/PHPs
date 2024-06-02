<?php 


function valsEmail(string $email): string
{
    $response = filter_var($email,FILTER_VALIDATE_EMAIL) ? 'Email Válido': 'Email inválido';
    return $response;
};

function valsPass(string $senha): string
{
    require 'stringValidator.php';
    $response = '';
    $response .= strlen($senha) < 8? '<li>sua senha deve conter pelomenos 8 caractéres</li>':'';
    $response .= $senha == strtolower($senha)? '<li>sua senha deve conter letras maiusculas</li>':'';
    $response .= $senha == strtoupper($senha)? '<li>sua senha deve conter letras minusculas</li>':'';
    $response .= valsSimbols($senha) ? '<li>sua senha deve conter algum simbolo</li>':'';
    $response .= !valsBanned($senha) ? "<li>sua senha possui caracteres proibídos ( ',".' ",'." $, {, } )</li>":'';
    
    return $response;

}

