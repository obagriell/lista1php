<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 08</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"]  ;
            $numero2 = rand(1,50);
            if ($numero == $numero2) {
                echo "<p>Você adivinhou</p>";
            }elseif ($numero<1 or $numero>50) {
                echo "<p>Digite um número entre 1 e 50</p>";
            }else{ 
                echo "<p>Você errou</p>";
            }
        }


    ?>
    <form action="ativ08.php" method="post">
        <label for="numero">Digite um número entre 1 e 50</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Adivinhe">



    </form>
</body>
</html>