<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //pegando salário do formulario via get
        $salario = $_GET['sal']??0;

        //Valor do salario minimo em 2023
        $sal_minimo = 1320;

        //apurando quantos salarios mínimos cabem no salário e separando o resto.
        $qtt_sal_minimo = intdiv($salario,$sal_minimo);
        $resto =fmod($salario, $sal_minimo);  //(( $salario*100)%($sal_minimo*100))/100;
       
    // criando um padrão de dinheiro
    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="idsal" step="0.01" min = "0" value="<?=$salario?>">
            <?= "<h5>Considerando o salário mínimo de ".numfmt_format_currency($padrao,$sal_minimo,"BRL").".</h5>"?>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>
            <?php 
             //validando a resposta
                if($resto==0){
                    if ($qtt_sal_minimo<=1) {
                       echo "Quem recebe um salário de <strong>".numfmt_format_currency($padrao,$salario,'BRL')."</strong> ganha <strong>$qtt_sal_minimo salário mínimo</strong>.";
                    }else{
                        echo "Quem recebe um salário de <strong>".numfmt_format_currency($padrao,$salario,'BRL')."</strong> ganha <strong>$qtt_sal_minimo salários mínimos</strong>.";
                    }
                }else{
                        if ($qtt_sal_minimo<=1) {
                           echo "Quem recebe um salário de <strong>".numfmt_format_currency($padrao,$salario,'BRL')."</strong> ganha <strong>$qtt_sal_minimo salário mínimo</strong> + <strong>".numfmt_format_currency($padrao,$resto,'BRL')."</strong>.";
                        }else{
                            echo "Quem recebe um salário de <strong>".numfmt_format_currency($padrao,$salario,'BRL')."</strong> ganha <strong>$qtt_sal_minimo salários mínimos</strong> + <strong>".numfmt_format_currency($padrao,$resto,'BRL')."</strong>.";
                        }
                }
            ?>
        </p>
    </section>
</body>
</html>