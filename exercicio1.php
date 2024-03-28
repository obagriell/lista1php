<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    
    $mensagem = ($idade >= 18) ? "é maior de 18" : "não é maior de 18";

    
    echo "<p>$nome $mensagem e tem $idade anos.</p>";
}
?>

<form method="post" action="ativ01.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" required><br>

    <input type="submit" value="Verificar Idade">
</form>
</body>
</html>