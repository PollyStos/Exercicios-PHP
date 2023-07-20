<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //ano atual
        $atual = date('Y');

        //Pegando dados do form 
        $nasc = $_GET['nasc']??1900;
        $ano = $_GET['ano']?? $atual;

    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="idnasc" min="1900" max="<?=$atual-1?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos no ano <strong><?=$atual?></strong>)</label>
            <input type="number" name="ano" id="idano"  value="<?=$ano?>">
            <input type="submit" value="Qual será sua idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
        //Calculo da idade
        if ($ano > $nasc){
            $idade = $ano - $nasc; 
            echo"<p>Quem nasceu em $nasc vai ter <strong>$idade ". ($idade==1?'ano':'anos'). "</strong> em <strong>$ano</strong>!</p>";
        }else{
            echo"Ano escolhido menor que seu ano de nascimento. Corrija as datas e tente novamente!!";
        }
        ?>
    </section>
</body>
</html>