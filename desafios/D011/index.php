<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Pegar valor do form
        $p_prod = $_GET['p_prod']??0;
        $porc = $_GET['reajuste']??0;

        //criar padrao de dinheiro
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

        //calculo do novo valor
        $n_valor = $p_prod+($p_prod*$porc/100);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="p_prod">Preço do Produto (R$)</label>
            <input type="number" name="p_prod" id="idp_prod" min="0.10" step="0.01" value="<?=$p_prod?>">
            <label for="reajuste">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porc?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=numfmt_format_currency($padrao, $p_prod,'BRL')?>, com <strong><?=$porc?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao,$n_valor,'BRL')?></strong> a partir de agora.</p>
    </section>

    <script>
        mudaValor()
        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>