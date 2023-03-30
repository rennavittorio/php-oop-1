<?php

require_once './Models/Movie.php';
require_once './Db/db.php';

$films = [];
foreach ($movies as $index => $movie) {
    $film = new Movie($movie['title'], $movie['description'], $movie['genres']);
    $films[] = $film;
}

// var_dump($films);



// $input_title = [$movies[0]['title'], 'LOTR'];
// $input_description = [$movies[0]['description'], 'hobbit, maghi e altre cose'];
// $input_genres = [$movies[0]['genres'], ['fantasy', 'avventure']];

// $film1 = new Movie($input_title[0], $input_description[0], $input_genres[0]);
// $film2 = new Movie($input_title[1], $input_description[1], $input_genres[1]);
// // var_dump($film1);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
    <title>Fake film generator</title>
</head>

<body>

    <div class="container">

        <h1>Film</h1>

        <div class="grid">
            <?php
            foreach ($films as $film) {
            ?>

                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $film->title; ?></h5>
                        <p class="card-text"><?php echo $film->description; ?></p>
                        <p class="card-text mt-auto"><?php echo $film->getGenresText($film->genres); ?></p>
                    </div>
                </div>


            <?php


            }


            ?>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>