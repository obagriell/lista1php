<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"]== "POST") {
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            if ($n1 < $n2) {
                while ($n1 != ($n2-1)) {
                    $n1 += 1;   
                    echo "$n1 ";
                }
            }elseif($n1 > $n2) {
                while ($n2 != ($n1-1)) {
                    $n1 -= 1;   
                    echo "$n1 ";
                }
            }else {
                echo "Não tem número nesse intervalo";
            }
        }


    ?>
    <form action="ativ06.php" method="post">
        <label for="n1">Digite o primeiro número.</label>
        <input type="number" name="n1" required><br>
        <label for="n2">Digite o segundo número.</label>
        <input type="number" name="n2" required><br>

        <input type="submit" value="Verificar intervalo">
    </form>
</body>
</html>