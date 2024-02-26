<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    include 'script.php';
    $tableauNombre = array(0,1,2,3,4,5,6);
    print_r($tableauNombre);
    $somme = 0;
    foreach($tableauNombre as $valeur){
        $somme += $valeur;
    }
    $moyenne = $somme / count($tableauNombre);
    // $ecart_type = stats_standard_deviation($tableauNombre);

    echo "La somme des nombres est : $somme .";
    echo "La moyenne des nombres est : $moyenne .";
    // echo "L'écart-type est : $ecart_type .";
    ?>
</body>
</html>