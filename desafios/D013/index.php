<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    //Pegando valor do form
        $valor = $_GET['valor']??0;

        //criando padrão de moeda
        $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idvalor" min="0" step="5" value="<?=$valor?>" >
            <h5>*Notas disponíveis, R$100, R$50, R$20, R$10 e R$5</h5>
            <input type="submit" value="Sacar">
        </form>
    </main>

        <?php 
         $n_100 = intdiv($valor,100);
            $temp = $valor%100;
            $n_50 = intdiv($temp,50);
            $temp %= 50;
            $n_20 = intdiv($temp,20);
            $temp %= 20;
            $n_10 = intdiv($temp,10);
            $temp %= 10;
            $n_5 = intdiv($temp,5);
            ?>

    <section>
        <h2>Saque de <?=numfmt_format_currency($padrao,$valor,'BRL')?> realizdo</h2>
           <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
            <ul>
                <li><img src="img/100r.jpg" alt="nota de 100" class="nota"> x<?=$n_100?></li>
                <li><img src="img/50r.jpeg" alt="nota de 50" class="nota"> x<?=$n_50?> </li>
                <li><img src="img/20r.jpeg" alt="nota de 20" class="nota"> x<?=$n_20?></li>
                <li><img src="img/10r.jpg" alt="nota de 10" class="nota"> x<?=$n_10?></li>
                <li><img src="img/5r.jpeg" alt="nota de 5" class="nota"> x<?=$n_5?></li>
            </ul>
        
    </section>
</body>
</html>