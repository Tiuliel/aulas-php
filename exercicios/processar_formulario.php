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
if (isset($_POST["enviar"])) 
        if (!empty($_POST["produto"]) || !empty($_POST["preco"])) {

            $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

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
        }
        ?>


    </main>
</body>

</html>