<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <link rel="stylesheet" href="style.css">
 <title>Desafio PHP 2</title>
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
        <?php 
            Echo "Gerando um numero entre <strong>0</strong> e <strong>100</strong>...";
            $ran = mt_rand(0,100);
            echo "<br>O valor gerado foi <strong>$ran</strong> ";
        ?>
        </p>
       <button onclick="javascript:window.location.reload()">Gerar outro &#11119;</button>
       </section>
       
</body>
</html>