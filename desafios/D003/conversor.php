<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <link rel="stylesheet" href="style.css">
 <title>Desafio PHP 3</title>
</head>
<body>
    <main>
         <h1>Conversor de moedas v1.0</h1>        
         <p>
        <?php 
            const COTACAO = 4.9;
            // variavel criada para a formatação de moedas internacionalizadas!
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $real = $_GET["din"] ?? "";
            If($real==""){
                echo "Valor não informado!!";
            }else{
                // Jeito convencional de formatação de números

                /*$conv = $real / COTACAO;
                echo "Seus <strong>R\$". number_format($real,2,",",".") . "</strong> equivalem a <strong> U\$\$" . number_format($conv,2,",",".") . "</strong>!";*/

                //Jeito profissional de formatação de números sempre tem que ter em servidores pagos. Para habilitar no servidor local é só achar o intl no arquivo php.ini
                //Moedas com internacionalização!
                $conv = $real / COTACAO;
                echo "Seus <strong>". numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong> " .numfmt_format_currency($padrao,$conv,"USD"). "</strong>!";
            }
        ?>
        <h5>
            <?php 
                echo "<br>*Cotação fixa de R\$". number_format(COTACAO,2,",",".").", informado no Google Finanças. 06/07/2023";    
            ?>
        </h5>
        </p>
       <?php 
      // <button onclick="javascript:window.location.href='index.html'">&#x2b05;Voltar</button>
       ?>
       
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
        </main>
</body>
</html>