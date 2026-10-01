<?php

$produtos = [
    ['nome_produto' => $_POST['nome_produto1'], 'preco_produto' => $_POST['preco_produto1'], 'categoria' => $_POST['categoria1']],
    ['nome_produto' => $_POST['nome_produto2'], 'preco_produto' => $_POST['preco_produto2'], 'categoria' => $_POST['categoria2']],
    ['nome_produto' => $_POST['nome_produto3'], 'preco_produto' => $_POST['preco_produto3'], 'categoria' => $_POST['categoria3']]
];

$contador_comida = 0;
$contador_sobremesa = 0;
$contador_bebida = 0;
$subtotal = 0;


function listar_pedidos_novos($informacoes) {
    foreach ($informacoes as $informacao) {
        return $informacao;
    }
}

function calcular_per_lucro($precos){
    foreach($precos as $preco) {
        if ($preco >= 50) {
            return $lucro = $preco * 0.1;
        } elseif ($preco >= 25) {
            return $lucro = $preco * 0.05;
        } else {
            return $lucro = $preco * 0.025;
        }
    } 
}

require_once "view_report.php";
