<!-- MISE EN FORME UNIQUEMENT!
NE PAS TOUCHER LE PHP -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <? include 'header-template.php' ?>
        </div>
        <div class="row">
            <?= $content['nav'] ?>
        </div>
        <div class="row">
            <?= $content['main'] ?>
        </div>
        <div class="row">
        <? include 'footer-template.php' ?>
        </div>
    </div>
</body>

</html>