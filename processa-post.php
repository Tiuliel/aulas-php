<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar dados via <b>POST</b></p>
   
    <?php
    // se os campos nome e e-mail estão vazios 
if( empty ($_POST["nome"]) || empty($_POST["email"])){
?>
    <p style="color: red;">Você deve preencher nome e e-mail</p>
    <p><a href='10-formulario.html'>Voltar</a></p>
    <?php
    

}else {

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    ?>

    <h2>Dados:</h2>
    <ul>
        <li>Nome: </li>
        <li>E-mail: </li>
        <li>mensagem: </li>
        
    </ul>
    <?php
    }
    ?>
</body>
</html>