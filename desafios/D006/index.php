<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário Retroalimentado
        $dividendo = $_GET['v1']??0;
        $divisor = $_GET['v2']??1;
       

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="idv1" min="0" value="<?=$dividendo?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" min="1" value ="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            //Pegando os valores do quociente e do resto
            $resto = $dividendo % $divisor;
            $quociente = intdiv($dividendo,$divisor);

            /*
            //Printando o resultado versão simplificada
            echo "<ul>";
            echo"<li>Dividendo: <strong>$dividendo</li></strong>";
            echo"<li>Divisor:<strong> $divisor</li></strong>";
            echo"<li>Quociente: <strong>$quociente</li></strong>";
            echo"<li>Resto: <strong>$resto</li></strong>";
            echo "</ul>";   
            */        
        ?>

        <!--Printando o resultado versão desenhada-->
        <table class="divisao">
            <tr><!--Linhas-->
                <td><?=$dividendo?></td> <!--células-->
                <td><?=$divisor?></td>
            </tr>
        
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>

    </section>
</body>
</html>