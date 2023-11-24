<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo con CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .saludo {
            font-size: 2em;
            color: #333;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="saludo">
        <?php
            echo "¡Hola Mundo!";
        ?>
    </div>
</body>
</html>
