<?php

/* url da api */
$url_api = "http://localhost/API-REST/api/v1/estoque/mostrar";

/* inicia a api */
$iniciar = curl_init($url_api);

/* converte a resposta em um array e não deixa em uma unica string*/
curl_setopt($iniciar,CURLOPT_RETURNTRANSFER,true);

/* verifica a ssl */
curl_setopt($iniciar,CURLOPT_SSL_VERIFYPEER,false);

/* Converte json para objeto php */
$acessa = json_decode(curl_exec($iniciar));

/* lista os dados de acordo com id */
foreach($acessa->dados as $coluna)
{   $i = 0;
    while($i <= 0)
    {
        echo "ID: " . $coluna->id;
        echo "</br>";
        echo "Produto: " . $coluna->produto;
        echo "</br>";
        echo "Preço: " . $coluna->preco;
        echo "</br>";
    $i++;
}
}

