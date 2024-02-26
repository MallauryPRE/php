<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $tableau = ['The Shawshank Redemption', 'The Godfather', 'The Dark Knight', 'The Lord of the Rings: The return of th King', 'Pulp Fiction'];
    foreach($tableau as $tableau){
        echo "<pre>";
        var_dump($tableau);
        echo "</pre>";
    }
?>
</body>
</html>