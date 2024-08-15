<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - Ex002</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numeros">Digite 8 números:</label>
        <input type="text" name="numeros[]" id="numeros" placeholder="Separados por vírgula">
        <br>
        <label for="posicaoX">Digite dois valor entre 1 e 8:</label>
        <input type="number" name="posicaoX" id="posicaoX" placeholder="ex:. 2">
        <input type="number" name="posicaoY" id="posicaoY" placeholder="outro valor.. ex:. 4">
        </br>

        <input type="submit" value="Enviar">
    </form>

    <?php 
        $numerosString=$_POST["numeros"][0];
        $numerosArray= explode(",", $numerosString);
        $posicaoX = $_POST["posicaoX"];
        $posicaoY = $_POST["posicaoY"];

        print "<h3>" . $numerosArray[$posicaoX-1] + $numerosArray[$posicaoY-1] . "</h3>";
    ?>
</body>
</html>