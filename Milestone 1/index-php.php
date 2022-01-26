<!-- Importiamo il file .php che contiene il database -->
<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <!-- HEADER -->
    <?php include __DIR__ . '/partials/header.php'; ?>

    <!-- MAIN -->
    <?php include __DIR__ . '/partials/main.php'; ?>

</body>
</html>