<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
</head>

<body>
    <main>
        <?php
/* Nem precisava deste primeiro if.
Afinal, você já tinha definido o action do formulário (indicando que
os dados viriam pra cá) */        
if (isset($_POST["enviar"])) 
        if (!empty($_POST["produto"]) || !empty($_POST["preco"])) {

            $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            /* Aqui no $preco, o ideal é sanitizar em vez de validar.
            Você deverá usar dois filtros: um para sanitização de float e outro para permitir dígitos/casas
            decimais. */
            $filtro_preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
            $preco = "R$" . number_format($filtro_preco, 2, ",", ".");

            $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ?>
            <p>Produto Cadastrado: <?= $produto ?></p>
            <p>Preço: <?= $preco ?></p>
            <p>Fabricante: <?= $fabricante ?></p>
            <p>Disponibilidade: <?= $disponibilidade ?></p>
            <p>Descrição: <?= $descricao ?></p>
        <?php
        } /* faltou fazer um else aqui né?
        Sua programação do empty está certa, mas quando acontece
        de não preencher os campos obrigatórios, a tela fica em branco.
        Então, o usuário não saberia o que aconteceu e nem o que fazer. */
        ?>


    </main>
</body>

</html>