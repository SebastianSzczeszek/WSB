<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "text<br>";
    $name="Janusz";
    $surneme="Kowalski";

    echo $name." ".$surneme,"<br>";
    echo $name." ".$surneme,"<br>";

    echo "$name $surneme";
    echo '$name $surneme';

    //heredoc
    echo <<<show
    <hr>
    IMIE: $name<br>
    NAZWISKO: $surneme
    <hr>

show;

    $text=<<<show
    <hr>
    IMIE: $name<br>
    NAZWISKO: $surneme
    <hr>

show;
    echo$text;



    ?>

</body>
</html>
