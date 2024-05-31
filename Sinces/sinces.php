<?php 
include '../config.php';

function sinces(string $date) : string
{
    $nowT = time();
    $whenT = strtotime($date);

    $now = new DateTime(date('Y/m/d'));
    $when = new DateTime($date);
    
   

    $intervalo = $now->diff($when);
    

    $since = $nowT-$whenT;
    if ($since < 60*2)
    {
        return 'Agora mesmo';
    }if ($since < 60**2)
    {
        return floor($since/60)." minutos.";
    }if ($since < (60**2)*2)
    {
        return floor($since/3600)." hora.";
    }if ($since < (60**2*24))
    {
        return floor($since/3600)." horas.";
    }if ($since < (60**2*24)*2)
    {
        return floor($since/(60**2*24))." dia.";
    }if ($since < (60**2*24)*7)
    {
        return floor($since/(60**2*24))." dias.";
    }if ($since < (60**2*24*7)*2)
    {
        return floor($since/(60**2*24*7))." semana.";
    }if ($since < (60**2*24*7*4))
    {
        return floor($since/(60**2*24*7))." semanas.";
    }if ($since < (60**2*24*7*4)*2)
    {
        return floor($since/(60**2*24*7*4))." mês.";
    }if ($since < (60**2*24*7*4*12))
    {
        return floor($since/(60**2*24*7*4))." meses.";
    }if ($intervalo->y == 1)
    {
        return "Esta função foi criada há<br>1 ano.";
    }else{
        return $intervalo->y." anos.";
    }
    

}