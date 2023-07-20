<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 5</title>
</head>
<body>
    <main>
         <h1>Analisador de Número Real</h1>        
         <p>
        <?php 
            //pesquisar qual item está vindo do html
           // var_dump($_GET);
            
           $n_real = $_GET["n_real"]?? 0 ;
           $inteira = (int) $n_real;
           $fracao = $n_real - $inteira;

           echo "Analisando o número <strong>".number_format($n_real,3,",",".")."</strong> informado pelo usuário.";
           echo "<ul>
                    <li>A parte inteira do número é <strong>". number_format($inteira,0,",",".")."</strong></li>
                    <li>A parte inteira do número é <strong>". number_format($fracao,3,",",".")."</strong>.</li>
                </ul>";
           
       ?>
       </p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
        </main>
</body>
</html>