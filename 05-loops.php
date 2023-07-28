<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>

<body>
    <h1>Estruturas de Controle e Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>
    <?php
    $i = 1;
    while ($i <= 5) {
    ?>
        <p><?= $i ?></p>
    <?php
        $i++;
    }
    ?>

    <h2>DO/WHILE (repita/até) </h2>
    <?php
    $j = 1;
    do {
    ?>
        <div>
            <h3>Título...</h3>
            <p>lorem ipsum dolor sit amet.</p>
        </div>
    <?php
        $j++;
    } while ($j <= 10);
    ?>


    <H2>FOR (para)</H2>
    <?php
    // variável de controle; condição; atualizção
    for ($i = 1; $i <= 3; $i++) {
    ?>
        <p><code>i</code> vale:<b><?= $i ?></b></p>
    <?php
    }
    ?>

    <ol>
        <?php
        $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
        for ($i = 0; $i <= 11; $i++) {
        ?>
            <li> Meses do Ano: <?= $meses[$i] ?></li>


        <?php

        }
        ?>
    </ol>

    <?php
    $alunos = ["Melissa", "Tanaka", "Zimbo", "Eduardo", "Kaue"];
    /*Função count() ou sizeof()
literalmente conta a quantidade de elementos dentro de um array, retorando um número inteiro */

    /* Guardamos em "cache" (memória) a quantidade de elementos, evitando assim a contagem a cada iteração do loop e melhorando a performance */

    $quantidade = count($alunos);
    for ($i = 0; $i < count($alunos); $i++) {
    ?>
        <p>Nome: <b><?= $alunos[$i] ?></b></p>
    <?php
    }
    ?>

    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Útil (e mais fácil) para lidar com <code>arrays</code></p>

    <ol>
        <?php foreach ($meses as $mes) { ?>
            <li><?= $mes ?></li>

        <?php } ?>
    </ol>

    <h3>manipulando arrays associativos</h3>

    <?php //array associativo
    $clubes = [
        "Curintia" => "Timinho",
        "Palmera" => "Pepa",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe"
    ];

    foreach ($clubes as $clube => $apelido) {
    ?>
        <p>O <?= $clube ?> é conhecido como <?= $apelido ?>.</p>
    <?php
    }
    ?>

    <h2>Loop com Matriz</h2>
    <?php
    $planoDeEstudos = [
        ["HTML", "CSS", "JS"],
        ["React", "react Native"]
    ];

    //usando for aninhado
    for ($linha = 0; $linha < count($planoDeEstudos); $linha++) {
        for ($coluna = 0; $coluna < count($planoDeEstudos[$linha]); $coluna++) {
    ?>
            <p><b><?= $planoDeEstudos[$linha][$coluna] ?></b></p>
    <?php
        }
    }
    ?>
    <hr>
    <?php
    //Usando foreach aninhado 
    foreach ($planoDeEstudos as $linha) {
        foreach ($linha as $coluna) {
        
    ?>
        <p><i><?= $coluna ?></i></p>
    <?php
    }
    }
    ?>

    <h3>Loop com Matriz associativa</h3>
    <?php
    $clientes = [
        [
            "nome" => "chaves",
            "idade" => 8
        ],
        [
            "nome" => "chapolin",
            "idade" => 25
        ],
        [
            "nome" => "chiquinha",
            "idade" => 10
        ]
        ];

        foreach($clientes as $cliente){
            ?>
            <p>Nome: <?=$cliente["nome"]?></p>
            <p>Idade: <?=$cliente["idade"]?></p>
            <?php
        }

        /* Lembrete sobre sintaxe de estruturas de controle (condicionais e loops) 

        if(){             OU    if();
        } else {          OU    else:
        }                 OU    endif;

        for (){         OU    for:
        }               OU    endfor;
        */
    ?>
</body>

</html>