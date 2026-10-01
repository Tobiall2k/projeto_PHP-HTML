<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Lume</title>
    <link rel="stylesheet" href="style_cadastro.css">
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
            <a href="#"  class="nav_tt">Cadastro</a>
            <a href="view_sobrenos.php"  class="nav_tt">Sobre nós</a>
        </nav>
    </header>
    <article>
        <div class="cadastro">
            <h1 class= "h1Cadastro">CADASTRO</h1>
        </div>
    </article>
    <main>
        <h2 class="h2cadastro">Cadastro de Produtos</h2>
        
        <form action="logic_controller.php" method="POST">
            <h3 class="h3pratos">Prato 1</h3>
            <label for="nome_produto1" class="form_cadastro">Nome do Prato:</label>
            <br>
            <input type="text" id="nome_produto1" name="nome_produto1" placeholder="Digite o nome do prato..." required class="input_cadastro">
            <br>
            <label for="preco_produto1" class="form_cadastro">Preço:</label>
            <br>
            <input type="number" step="0.01" id="preco_produto1" name="preco_produto1" placeholder="Digite o preço do prato..." required class="input_cadastro">
            <br>
            <label for="categoria1" class="form_cadastro">Informe a categoria do prato:</label>
            <select class="categoria" name="categoria1" id="categoria1">
                <option value="#" selected disabled>Selecione</option>
                <option value="Prato Principal">Prato Principal</option>
                <option value="Sobremesa">Sobremesa</option>
                <option value="Bebida">Bebida</option>
            </select>
            <br>
            <br>

            <h3 class="h3pratos">Prato 2</h3>
            <label for="nome_produto2" class="form_cadastro">Nome do Prato:</label>
            <br>
            <input type="text" id="nome_produto2" name="nome_produto2" placeholder="Digite o nome do prato..." required class="input_cadastro">
            <br>
            <label for="preco" class="form_cadastro">Preço:</label>
            <br>
            <input type="number" step="0.01" id="preco" name="preco_produto2" placeholder="Digite o preço do prato..." required class="input_cadastro">
            <br>
            <label for="categoria2" class="form_cadastro">Informe a categoria do prato:</label>
            <select class="categoria" name="categoria2" id="categoria2">
                <option value="#" selected disabled>Selecione</option>
                <option value="Prato Principal">Prato Principal</option>
                <option value="Sobremesa">Sobremesa</option>
                <option value="Bebida">Bebida</option>
            </select>
            <br>
            <br>

            <h3 class="h3pratos">Prato 3</h3>
            <label for="nome_produto" class="form_cadastro">Nome do Prato:</label>
            <br>
            <input type="text" id="nome_produto3" name="nome_produto3" placeholder="Digite o nome do prato..." required class="input_cadastro">
            <br>
            <label for="preco" class="form_cadastro">Preço:</label>
            <br>
            <input type="number" step="0.01" id="preco" name="preco_produto3" placeholder="Digite o preço do prato..." required class="input_cadastro">
            <br>
            <label for="categoria3" class="form_cadastro">Informe a categoria do prato:</label>
            <select class="categoria" name="categoria3" id="categoria3">
                <option value="#" selected disabled>Selecione</option>
                <option value="Prato Principal">Prato Principal</option>
                <option value="Sobremesa">Sobremesa</option>
                <option value="Bebida">Bebida</option>
            </select>
            <br>
            <br>

            <button type="submit">Cadastrar</button>
        </form>  
    </main>
    <footer>
        <h2 class="h2foot">&copy Casa Lume - 2026</h2>
    </footer>
    
    
</body>
</html>