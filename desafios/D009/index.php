<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 9</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Pegando valores do form
        $v1=$_GET['v1']??0;    
        $p1=$_GET['p1']??1;
        $v2=$_GET['v2']??0;
        $p2=$_GET['p2']??1;

        //calculo da media simples
        $m_simples =($v1+$v2)/2;

        //Calculo da media ponderada
        $m_ponderada = ($v1*$p1+$v2*$p2)/($p1+$p2);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="idv1" required min = "0" step="0.01" value="<?=$v1?>" >
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="idp1" required min = "1"  value="<?=$p1?>" >
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="idv2" required min = "0" step="0.01" value="<?=$v2?>" >
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="idp2" required min = "1"  value="<?=$p2?>" >
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

<section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <strong><?=$v1?></strong> e <strong><?=$v2?></strong>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples </strong>entre os valores é igual a <strong><?=number_format($m_simples,2,",",".")?></strong>.</li>
            <li>A <strong>Média Aritimética Ponderada </strong>com pesos <strong><?=$p1?></strong> e <strong><?=$p2?></strong> é igual a <strong><?=number_format($m_ponderada,2,",",".")?></strong>.</li>
        </ul>
    </section>
</body>
</html>