<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>

    <style>
        h1{
            text-align: center;
            color: red;
            text-shadow: black 1px 1px 15px;
        }

        form{
            text-align: center;
        }

        label{
            font-weight: bold;
        }
    </style>
        <title>Cadastro de Produtos</title>
    </head>

<body>
    <h1>Cadastro de Produtos</h1>
    <form action="processar_formulario.php" method="post">
        <label for="nome">Nome do Produto:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="fabricante">Fabricante:</label>
        <select id="fabricante" name="fabricante">
            <?php
            $fabricantes = array("Dell", "HP", "APPLE", "POSITIVO");
            foreach ($fabricantes as $fabricante) { ?>
                <option><?= $fabricante ?></option>;
            <?php
            }
            ?>
        </select><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" min="100" max="10000" step="0.01" required><br><br>

        <label>Disponibilidade:</label>
        <input type="radio" id="disponivel" name="disponibilidade" value="sim" required>
        <label for="disponivel">Sim</label>
        <input type="radio" id="nao_disponivel" name="disponibilidade" value="nao">
        <label for="nao_disponivel">Não</label><br><br>

        <label for="descricao">Descrição:</label><br>
        <textarea id="descricao" name="descricao" rows="4" cols="50"></textarea><br><br>

        <input type="submit" value="Cadastrar Produto" name="enviar">

    </form>