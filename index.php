<?php

$numCharacters = $_GET['number'] ;
var_dump($numCharacters);

require_once __DIR__ . '/partials/functions.php';


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Php Strong Password Generator</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Password Generator</h1>
        <form action="index.php" method="GET">
            <div class="mb-3 d-flex flex-column justify-content-center text-center">
                <label for="number" class="form-label">Scegli tu la lunghezza della tua password!</label>
                <input type="number" min="1" class="form-control" id="password" aria-describedby="emailHelp" name="number" placeholder="Inserisci numero">
            </div>

            <p><?php generateCasualPassword($numCharacters) ?></p>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>