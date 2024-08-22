<?php
// URL da API requisitada
// Verificar qual API será utilizada e ler documentação
$url = "";

// Inicializa o cURL
$ch = curl_init();

// Configura a URL e outras opções
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição e obtém a resposta
$response = curl_exec($ch);

if(curl_errno($ch)) {
    echo 'Erro na requisição: ' . curl_error($ch);
} else {
    $dados = json_decode($response, true);
    
    print_r($dados);
}

curl_close($ch);
?>
