<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Tipos primitivos em PHP</h1>

    <?php 
      //  $num = 0x1A;
        //echo "O valor da variavel num é $num";

        $v = 300;
        var_dump($v);

        //array
        $vet = [6,2.5,3,false];
        var_dump($vet);

        class Pessoa{
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>