<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Pegando dados do form
        $num = $_GET['seg']??0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="temp">QUal é o total de segundos?</label>
            <input type="number" name="seg" id="idseg" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($num,0,",",".")?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <?php 
                //calculando quantidade de semanas
                //  $mes = intdiv($mun,30);

                $temp=$num;
                $seg = $temp%60;
                $temp = intdiv($temp,60);// min
                $min = $temp%60;
                $temp = intdiv($temp,60);// hora
                $horas = $temp%24;
                $temp = intdiv($temp,24);// dia
                $dias= $temp%7;
                $temp = intdiv($temp,7);// semana
                $sem = $temp%4.345238095238095;
                $temp = intdiv($temp,4.345238095238095);// mes
                $mes = $temp%12;
                $temp = intdiv($temp,12);// ano
                $ano = $temp;
               
               
             
                    echo"<li>$ano anos </li><li>$mes mêses </li><li>$sem semanas </li><li>$dias dias </li><li>$horas horas </li><li>$min minutos </li><li>$seg segundos</li>";
                
            ?>
        </ul>
    </section>
</body>
</html>