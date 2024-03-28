<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nota = $_POST["nota"];
        if ($nota < 0 or  $nota > 10) {
            echo "<p>Inválido</p>";
        }
        else
        {
            echo "<p>Válido</p>";
        }


    }
    ?>
    <form action="ativ03.php" method="post">
        <label for="nota1">Digite um nota entre 0 e 10.</label>
        <input type="number" name="nota" required>
        <input type="submit" value="Verificar nota">
    </form>
</body>
</html>