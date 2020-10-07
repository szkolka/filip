<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>strona</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css.css">
    </head>
    <body>
    <div class="container">
        <div class="top">
            <h2>Pobierz: skrypt.php, arkusz.css</h2>
        </div>
        <div class="left">
            <?php

                if(isset($_POST['a'], $_POST['b'], $_POST['c'], $_POST['h'])){
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = $_POST['c'];
                    $h = $_POST['h'];

                $p= ($a+$b+$c)/2;    
                $podstawa = sqrt($p*($p-$a)*($p-$b)*($p-$c));
                $pole = $a*$h + $b*$h + $c*$h + 2*$podstawa;
                $V = $podstawa*$h;   

                    echo("zmienna p to ".round($p,2)."<br>");
                    echo("podstawa to ".round($podstawa,2)."<br>");
                    echo("pole to ".round($pole,2)."<br>");
                    echo("objetosc to ".round($V,2)."<br>");

                }
            ?>
        </div>
        <div class="right">
            <ul>
        <li><a href="index.html" class="button">start</a></li>
            <li><a href="skrypt.php" class="button">skrypt</a></li>
            <li><a href="info.html" class="button">info</a></li>
            </ul>
        </div>
        <div class="bot">
            <h2>Wykonał: 4 Fąfara Filip 4j gr1</h2>
        </div>
    </div>
    </body>
</html>