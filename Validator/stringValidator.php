<?php 

function valsSimbols($entrada){
    return !(str_contains($entrada,'-') || str_contains($entrada,'*') 
    || str_contains($entrada,'&') || str_contains($entrada,'%')
    || str_contains($entrada,'#') || str_contains($entrada,'@') 
    || str_contains($entrada,'!')   
    || str_contains($entrada,'_') || str_contains($entrada,"+")
    || str_contains($entrada,'=') || str_contains($entrada,"/")
    || str_contains($entrada,"|") || str_contains($entrada,"?")
    || str_contains($entrada,"<") || str_contains($entrada,">")
    || str_contains($entrada,".") || str_contains($entrada,",")
    || str_contains($entrada,":") || str_contains($entrada,";")
    || str_contains($entrada,"´") || str_contains($entrada,"`")
    || str_contains($entrada,"~") || str_contains($entrada,"^")
    || str_contains($entrada,"¨") || str_contains($entrada,'(') 
    || str_contains($entrada,')') || str_contains($entrada,"[")
    || str_contains($entrada,"]")  || str_contains($entrada,"ª")
    || str_contains($entrada,"º") || str_contains($entrada,"°")
    );
}

function valsBanned($entrada){
    return !(str_contains($entrada,'"') 
    || str_contains($entrada,"{")|| str_contains($entrada,"}")
    || str_contains($entrada,"'")|| str_contains($entrada,'$')
    );
}