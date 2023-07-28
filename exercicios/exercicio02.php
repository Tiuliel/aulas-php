<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<style>
section {
    display: flex;
    justify-content: space-between;
}

article{
    padding: 15px;
    min-width: 140px;
    width: 40%;
    border-radius: 30px;
    box-shadow: 10px 10px 100px red;}

    h1{
        text-align: center;
    }
</style>

<body>
<h1>Exercicio 02</h1>
    <?php
    $dados = array("maria123", "maria@123.com", "123456", 30, "feminino", "Sao Paulo");
    $dados2 = array("joao321", "joao@321.com", "654321", 50, "masculino", "Bahia");
    ?>
    <section>
        <article>
            <h2>Maria</h2>
            <p>Usuario: <?=$dados[0]?></p>
            <p>Email: <?=$dados[1]?></p>
            <p>Idade: <?=$dados[3]?></p>
            <p>Sexo: <?=$dados[4]?></p>
            
            
        </article>

        <article>

        <h2>João</h2>
        <p>Usuario: <?=$dados2[0]?></p>
            <p>Email: <?=$dados2[1]?></p>
            <p>Idade: <?=$dados2[3]?></p>
            <p>Sexo: <?=$dados2[4]?></p>
        </article>
    </section>
    
</body>

</html>