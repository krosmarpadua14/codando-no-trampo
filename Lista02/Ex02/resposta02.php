<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        try{
            $x = (int) $_POST["x"] ?? 0;
            $y = (int) $_POST["y"] ?? 0;
            $result = $y - $x;
            echo "<p> O resultado Sub é $result</p>";

        }   catch(Exception $e){
            echo "Erro!".$e->getMessage();
        }
        }
    ?>
</body>
</html>