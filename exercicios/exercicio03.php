<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <?php
    $salario = 1100;

    if ($salario < 1500) {
      $novoSalario = $salario * 1.15;
    } elseif ($salario <= 3000){
       $novoSalario = $salario * 1.10;
    }
    else {
        $novoSalario = $salario *1.05;
    }
    
    $SalarioFormatadoComAumento = number_format($novoSalario,2,",",".");
    $SalarioFormatadoSemAumento = number_format($salario,2,",",".");
    ?>


    <p>Salario sem reajuste: <?=$SalarioFormatadoSemAumento?></p>
    <p>Salario com reajuste: <?=$SalarioFormatadoComAumento?></p>
    
</body>
</html>