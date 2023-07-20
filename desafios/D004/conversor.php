<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <link rel="stylesheet" href="style.css">
 <title>Desafio PHP 4</title>
</head>
<body>
    <main>
         <h1>Conversor de moedas v1.0</h1>        
         <p>
        <?php 
         // variavel criada para a formatação de moedas internacionalizadas!
         $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

         //pegando a data atual da execução do programa.
         $inicio = date("m-d-Y", strtotime("-7 days"));
         $fim = date("m-d-Y");

        //url tirada do site do Banco Central do Brasil -> https://dadosabertos.bcb.gov.br/
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
       // var_dump($dados); //array(2) { ["@odata.context"]=> string(127) "https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)" ["value"]=> array(1) { [0]=> array(2) { ["cotacaoCompra"]=> float(4.8971) ["dataHoraCotacao"]=> string(23) "2023-07-06 13:07:23.157" } } }
        
        $cotacao = $dados["value" ][0]["cotacaoCompra"];
        
        $real = $_GET["din"] ?? "";
        If($real==""){
            echo "Valor não informado!!";
        }else{
            // Jeito convencional de formatação de números
           /* $dolar = $real / COTACAO;
            echo "Seus <strong>R\$". number_format($real,2,",",".") . "</strong> equivalem a <strong> U\$\$" . number_format($dolar,2,",",".") . "</strong>!";*/


            //Jeito profissional de formatação de números sempre tem que ter em servidores pagos. Para habilitar no servidor local é só achar o intl no arquivo php.ini
            //Moedas com internacionalização!
            $dolar = $real / $cotacao;
           
            echo "Seus <strong>". numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong> " .numfmt_format_currency($padrao,$dolar,"USD"). "</strong>!";
                       
            }
        ?>
        <h5>
            <?php 
                echo "*Cotação fixa de ". numfmt_format_currency($padrao, $cotacao,"BRL").", informado no <a href=\"https://dadosabertos.bcb.gov.br\">Banco Central do Brasil</a>.";    
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