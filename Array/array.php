<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $superheroes = array(
        " spider- an " => array(
            " name " => "Peter Parker",
            " email " => "peterparker@mail.com "
        ),
        "super-man" => array(
            " name " => " Clark Kent ",
            " email " => " clarkkent@mail.com"
        ),
        "iron-man " => array(
            " name " => " Tony Stark ",
            " email " => " tonystark@mail.com"
        )
    );

    foreach ($superheroes as $key => $value) {
        echo "Key : $key";
        echo "Value: ";
        foreach ($value as $index => $item) {
            echo "$index => $item<br>";
        }
    }

    ?>
</body>

</html>