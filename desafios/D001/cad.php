<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <link rel="stylesheet" href="style.css">
 <title>Desafio PHP 1</title>
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <p>
        <?php 
            $num = $_GET["numero"] ?? "";
            If($num==""){
                echo "Número não informado!!";
            }else{
                $antecessor = $num -1;
                $sucessor = $num + 1;
                echo "O número escolhido foi <strong> $num</strong>.<br>O seu <em>antecessor</em> é <strong>$antecessor</strong>.<br>Seu <em>sucessor</em> é <strong>$sucessor</strong>.";    
            }
        ?>
        </p>
        
        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2b05;Voltar</button>-->
      
       
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </section>
</body>
</html>