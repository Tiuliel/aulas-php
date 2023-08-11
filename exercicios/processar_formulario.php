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
 
        if (!empty($_POST["produto"]) || !empty($_POST["preco"])) {

            $produto = filter_input(INPUT_POST, "produto", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $filtro_preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);
            $preco = filter_var($filtro_preco, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

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
        } else { ?>

            <article class="text-center">
                        <h2 class="card-title alert alert-danger">Faltou algumas informações!!</h2>
                        <p class="card-text">É <b>obrigatorio</b> preencher <b>NOME</b> e <b>PREÇO</b>!!!</p>
                    </article>
                    <?php
        }
        
        ?>


    </main>
</body>

</html>