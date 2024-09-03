<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(Resposta) Exercício 01 - SOMA</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        try{
            $x = (int) $_POST["x"] ?? 0;
            $y = (int) $_POST["y"] ?? 0;
            $result = $x + $y;
            echo "<p> O Resultado Soma é: $result</p>";
            
        }   catch(Exception $e){
            echo "Erro! ".$e->getMessage();
        }  
        }

    ?>    
</body>
</html>