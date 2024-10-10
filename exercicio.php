<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado Relatório de Clientes</h1>
    <?php
        $pessoa1 = array("codigo" => 1, "nome"=> "Alberto Silva");
        $pessoa2 = array("codigo" => 2, "nome"=> "Kalebe Silva");
        $pessoa3 = array("codigo" => 3, "nome"=> "Guilherme Silva");
        $pessoa4 = array("codigo" => 4, "nome"=> "Lucas Silva");
        $pessoa5 = array("codigo" => 5, "nome"=> "Gabriela Silva");
        $lista['pessoa'][]= $pessoa1;
        $lista['pessoa'][]= $pessoa2;
        $lista['pessoa'][]= $pessoa3;
        $lista['pessoa'][]= $pessoa4;
        $lista['pessoa'][]= $pessoa5;
        var_dump($lista);

        foreach($lista as $listapessoas){?>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
            </tr>
            <?php foreach($listapessoas as $itempessoa=> $valuepessoa){?>
                <tr>
                        <?php foreach($valuepessoa as$item ->){
                            echo "<td> $value <td/>";
                        } ?>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>
    
</body>
</html>