<!-- Importo i dati dal foglio functions -->
<?php
include_once __DIR__ . '/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BOOSTRAP LINK/SCRIPT -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="container">
        <h1>Generatore di Password</h1>
        <form method="get">
            <div class="mb-3 w-25">
                Lunghezza Password: 
                <input type="number" class="form-control" name="number">
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
            <a href="/php-strong-password-generator" class="btn btn-danger">Annulla</a>
        </form>
        <h2>La tua Password è: <?= generate_pw($number_rnd) ?></h2>
    </div>
</body>

</html>