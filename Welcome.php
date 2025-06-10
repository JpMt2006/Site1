<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro</title>
    <link rel="icon" type="imagem"
    href="https://img.cdndsgni.com/preview/10996772.jpg">
    <link rel="stylesheet" type="text/css" href="Minha pagina.css" media="screen" /> 
</head>
<body>

<h2>Informações Recebidas:</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nome: " . htmlspecialchars($_POST["nome"]) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($_POST["data_nascimento"]) . "<br>";
    echo "CPF: " . htmlspecialchars($_POST["cpf"]) . "<br>";
    echo "Tipo de Endereço: " . htmlspecialchars($_POST["tipo_endereco"]) . "<br>";
    echo "Logradouro: " . htmlspecialchars($_POST["logradouro"]) . "<br>";
    echo "Número: " . htmlspecialchars($_POST["numero"]) . "<br>";
    echo "Complemento: " . htmlspecialchars($_POST["complemento"]) . "<br>";
    echo "Mensagem: " . nl2br(htmlspecialchars($_POST["mensagem"])) . "<br>";
} else {
    echo "Nenhum dado recebido.";
}
?>
<button type="confirm">Clique para confirmar</button>
</body>
</html>