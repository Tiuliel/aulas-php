<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCÍCIO 04</title>
</head>
<style>
    table{
        width: 50%;
        margin: auto;
        border: 1px solid black
    }

    td{
        border: 1px solid black;
        padding: 10px;
        
    }
    th{
        border: solid black;
    }
    tr:nth-child(odd){
        background-color: gray;
    }
    tr:nth-child(even){
        background-color: burlywood;
    }
    tr:hover{
        background-color: ghostwhite;
        cursor: pointer;
    }
    
</style>

<body>


    <?php
    $linguagens = [
        "HTML" => "Estruturtação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de dados",
        "Java" => "Softwares"
    ];
    ?>


    <table>
        <tr>
            <th>ID</th>
            <th>Línguagem</th>
            <th>Descrição</th>
        </tr>
        <?php
        $i = 1;
        foreach ($linguagens as $linguagem => $descricao) {
        ?>

        <tr>
            <td><?= $i ?></td>
            <td><?= $linguagem ?> </td>
            <td><?= $descricao ?></td>
        </tr>
            
           

        <?php
        $i++;
        }
        ?>

    </table>


</body>

</html>