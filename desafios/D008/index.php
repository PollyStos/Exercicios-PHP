<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //pegando numero do form 
        $numero = $_GET['num']??0;

        //raiz quadrada
        $r_quadrada = sqrt($numero);
        //raiz cubica
        $r_cubica = $numero**(1/3);//modo antigo de resolver potencia ->pow($numero,(1/3));
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="num" id="idnum" step="0.01" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analisando o<strong> número <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($r_quadrada,3,",",".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($r_cubica,3,",",".")?></strong></li>
        </ul>
    </section>
</body>
</html>