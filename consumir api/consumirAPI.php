<?php

$url = "http://localhost/API-REST/api/v1/estoque/mostrar";
$ch = curl_init($url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
$resultado = json_decode(curl_exec($ch));

foreach($resultado->dados as $row){
    //var_dump($resultado);ucfirst
    echo ucwords($row->produto);
}