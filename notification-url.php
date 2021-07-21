<?php



$nomeArquivo = date_timestamp_get(date_create());

//criamos o arquivo
$arquivo = fopen('webhooks-response/'.$nomeArquivo.'.txt','w');

//verificamos se foi criado
if ($arquivo == false) die('Não foi possível criar o arquivo.');

//escrevemos no arquivo
$texto = file_get_contents('php://input');

fwrite($arquivo, $texto);

//Fechamos o arquivo após escrever nele

fclose($arquivo); ?>

