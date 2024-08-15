<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 1 - Ex001</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="numeros">Digite 6 números</label>
        <input type="text" name="numeros[]" id="numeros" placeholder="Separados por vírgula">
        <input type="submit" value="Enviar">
    </form>
    <?php
        $numerosString=$_POST["numeros"][0];
        $numerosArray= explode(" ", $numerosString);
        

        for ($i = sizeof($numerosArray); $i > 0; $i--){
           print $numerosArray[$i-1] . ' ';
        }
    ?>
</body>
</html>

