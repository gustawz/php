<?php
// tentando explicar o basico que sei, aqui define o titulo
$titulo = Página Gerada com PHP;

// aqui o css
$css = 
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: #f0f0f0;
    }
    h1 {
        color: blue;
    }
    button {
        background-color: green;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
    }
;

// aqui o js
$js = 
    function mensagem() {
        alert('PHP gerou este JavaScript!');
    }
;
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    

    

    
    <style>
        <?php echo $css; ?>
    </style>
    




    <script>
        <?php echo $js; ?>
    </script>


</head>

<body>

    <h1><?php echo $titulo; ?></h1>
    <p>Aula teste cod teste</p>
    
    <button onclick="mensagem()">Clique aqui</button>

</body>
</html>
