<?php
$testo = $_GET['testo']
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Il testo è lungo:</h1>
    <?php
    echo strlen($testo) . ' ' . 'caratteri'
        ?>
</body>

</html>