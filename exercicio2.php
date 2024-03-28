<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $mes = $_POST["mes"];

        switch ($mes) {
            case 1:
                echo "<p>Janeiro</p>";
                break;
            case 2:
                echo "<p>Fevereiro</p>";
                break;
            case 3:
                echo "<p>Março</p>";
                break;
            case 4:
                echo "<p>Abril</p>";
                break;
            case 5:
                echo "<p>Maio</p>";
                break;
            case 6:
                echo "<p>Junho</p>";
                break; 
           case 7:
                echo "<p>Julho</p>";
                break;
            case 8:
                echo "<p>Agosto</p>";
                break;
            case 9:
                echo "<p>Setembro</p>";
                break;
            case 10:
                echo "<p>Outubro</p>";
                break;
            case 11:
                echo "<p>Novembro</p>";
                break;
            case 12:
                echo "<p>Dezembro</p>";
                break;
            default:
                echo "<p>Não existe esse mês</p>";
                break;
        }
    }
    ?>
    <form action="ativ02.php" method="post">
        <label for="mes">Digite o mês:</label>
        <input type="number" name="mes" required>
        <input type="submit" value="Verificar mês">
    </form>
</body>
</html>