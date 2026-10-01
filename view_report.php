<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Lume</title>
    <link rel="stylesheet" href="style_report.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <img class="img_logo" src="Logo_sem_fundo.png" alt="Logo">
        <nav>
            <a href="view_home.php"  class="nav_tt">Home</a>
            <a href="view_cadastro.php"  class="nav_tt">Cadastro</a>
            <a href="view_sobrenos.php"  class="nav_tt">Sobre nós</a>
        </nav>
    </header>
    <article>
        <div class="pratos">
            <h1 class= "h1Pratos">PRATOS</h1>
        </div>
    </article>
    <main>
        <?php
            for ($i = 0; $i < count($produtos); $i++){
                $produtos_listados = [];
                $precos = [];
                $categoria = [];
                array_push($produtos_listados,$produtos[$i]['nome_produto']);
                array_push($precos, $produtos[$i]['preco_produto']);
                array_push($categoria, $produtos[$i]['categoria']);
        ?>
            <section>
                <h2 class="h2pedidos">Produto <?=$i+1?></h2>
                <br>
                <p class="paragrafoPedidos"><strong>Nome: </strong><?=listar_pedidos_novos($produtos_listados)?></p>
                <p class="paragrafoPedidos"><strong>Subtotal: </strong> R$<?=number_format(listar_pedidos_novos($precos), 2, ",", ".")?></p>
                <p class="paragrafoPedidos"><strong>Categoria: </strong> <?=listar_pedidos_novos($categoria)?></p>
                <p class="paragrafoPedidos"><strong>Valor adicional de lucro:</strong>R$<?=number_format(calcular_per_lucro($precos), 2, ",", ".")?></p>
                <p class="paragrafoPedidos"><strong>Valor de Venda: </strong>R$<?=number_format($produtos[$i]['preco_produto'] + calcular_per_lucro($precos), 2, ",", ".")?></p>
                <br>
            </section>
        <?php } ?>
    </main>