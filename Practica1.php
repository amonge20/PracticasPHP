<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
    <h1>Descrivint a John Doe</h1>

<?php
    //Afegim les varaibles següents
    $persona = array("John Doe", 30, 1986, 03, 11, 935555555,"Blackpool, England", "oswin@dr.who", 180); 

    echo "<h2>Les dades de John són</h2>";
    echo "<li> Es diu: " . $persona[0]."</li>";
    echo "<li> Té " . $persona[1]." anys</li>";
    echo "<li> Va neixer l'any: " . $persona[2] . " - " . $persona[3] . " - " . $persona[4] . "</li>";
    echo "<li> El seu telefón és: " . $persona[5]."</li>";
    echo "<li> Viu a " . $persona[6]."</li>";
    echo "<li> El seu e-mail és el " . $persona[7]."</li>";
    echo "<li> i actualment no treballa</li>";
    echo "<li> Mesura com a " . $persona[8]." d'alçada</li>";
    //En format form no em surt
      ?>


    </body>
</html>