<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <style>
        .aprovado {
            color: green;
        }

        .reprovado {
            color: red;
        }
        li{
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Exercício 05</h1>

    <?php


    function calcularMedia(float $nota, float $nota2): float
    {
        $media = ($nota + $nota2) / 2;
        return $media;
    }

    function situacao(float $media): string
    {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
    ?>

    <p class="<?= situacao(calcularMedia(8, 8)) == "Reprovado" ? "reprovado" : "aprovado" ?>"> <?= situacao(calcularMedia(8, 8)) ?> - <?= calcularMedia(8, 8) ?></p>
    <p class="<?= situacao(calcularMedia(5, 8)) == "Reprovado" ? "reprovado" : "aprovado" ?>"> <?= situacao(calcularMedia(5, 8)) ?> - <?= calcularMedia(5, 8) ?></p>
<ol>
    <?php
    $alunos = [
        [
            "Nome" => "Motocovisky",
            "nota1" => 10,
            "nota2" => 8
        ],
        [
            "Nome" => "Valeuska",
            "nota1" => 10,
            "nota2" => 9
        ],
        [
            "Nome" => "MMs",
            "nota1" => 9,
            "nota2" => 8
        ],
        [
            "Nome" => "BabaRosa",
            "nota1" => 5,
            "nota2" => 8
        ],
        [
            "Nome" => "Eliandro",
            "nota1" => 5,
            "nota2" => 6
        ],
        
    
    ];

    foreach($alunos as $aluno){

        $media = calcularMedia($aluno["nota1"], $aluno["nota2"])
        ?>
        <li>
            Aluno: <b><?=$aluno['Nome']?></b> <br> 
            Media: <b><?=calcularMedia($aluno['nota1'], $aluno['nota2'])?></b> <br>
            Situação: <b class="<?= situacao($media) == "Reprovado" ? "reprovado" : "aprovado" ?>"><?=situacao($media)?></b></b>

        </li>

        <?php
    }

    ?>
</ol>
</body>

</html>