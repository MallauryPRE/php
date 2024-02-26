<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <?php

    $films = [
        "The Shawshank Redemption" => "Frank Darabont",
        "The Godfather" => "Francis Ford Coppola",
        "The Dark Knight" => "Christopher Nolan",
        "The Lord of the Rings: The Return of the King" => "Peter Jackson",
        "Pulp Fiction" => "Quentin Tarantino",
    ];

    $details = [
        "The Shawshank Redemption" => ["année" => 1994, "note" => 9.2],
        "The Godfather" => ["année" => 1972, "note" => 9.1],
        "The Dark Knight" => ["année" => 2008, "note" => 9.0],
        "The Lord of the Rings: The Return of the King" => ["année" => 2003, "note" => 8.9],
        "Pulp Fiction" => ["année" => 1994, "note" => 8.9],
    ];

    foreach ($films as $film => $realisateur) {
        echo "<li>$film : $realisateur</li>";
    }

    echo "<ul>";
    foreach ($films as $film => $realisateur) {
        echo "<li>$film";
        echo "<ul>";
        echo "<li>$realisateur</li>";
        echo "<li>Année : " . $details[$film]["année"] . "</li>";
        echo "<li>Note : " . $details[$film]["note"] . "</li>";
        echo "</ul>";
        echo "</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>