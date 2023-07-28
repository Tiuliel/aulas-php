<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <style>
        <?php $cor = "pink"; ?>body {
            background-color: <?= $cor ?>
        }

        b {
            color: blue
        }
    </style>
    <h1>Exercício 01</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");

    $data = date("d/m/y");
    $hora = date("H:i:s");
    echo "Data: $data";
    echo "<br>";
    echo "Hora: $hora";
    echo "<br><br>";



    // const DATA = date("d/m/y"); erro
    define("DATA", date("d/m/y"));
    $nome = "Eliel";
    $curso = "T.I";
    $cargaHoraria = 1000;
    $faltas = $cargaHoraria / 4;

    echo "<p>No dia " . DATA . " o aluno <b>$nome</b>, do curso de <b>$curso</b>, com a carga horaria de <b>$cargaHoraria</b> horas, foi reprovado por que faltou mais que o Limite de faltas que é de <b>$faltas</b> Hrs...</p>";

    ?>

    <p>Data: <b><?= DATA ?> </b> </p>
    <p>Nome do Aluno: <b><?= $nome ?> </b> </p>
    <p>Nome do curso: <b><?= $curso ?> </b> </p>
    <p>Carga Horaria: <b><?= $cargaHoraria ?> </b> </p>
    <p>limite de faltas: <b><?= $faltas ?> </b> </p>

    <?php
    $teste = "PHP Intelphense";
    echo $teste;
    ?>



</body>

</html>