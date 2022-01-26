<!-- Importiamo il file .php che contiene il database -->
<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>

<body>
    
    <div id="root">

        <!-- HEADER -->
        <?php include __DIR__ . '/partials/header.php'; ?>

        <!-- MAIN -->
        <?php include __DIR__ . '/partials/main.php'; ?>
        
    </div>


    <!-- Javascript -->
    <script src="js/script.js"></script>
</body>
</html>