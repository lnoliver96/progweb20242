<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
        $hora = $datetime->format( 'H' );
        $tela = "";

        if($hora >=0 and $hora <= 12){
            $tela = "<h1>Bom Dia!!</h1> <img></img>"
        }
        else if($hora >12 and $hora <18){
            $tela = ""
        }
        else if{
            $tela = ""
        }
        echo($tela)
    ?>
</body>
</html>