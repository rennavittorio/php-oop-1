<?php

require_once './Models/Movie.php';

$input_title = ['the matrix', 'LOTR'];
$input_description = ['uomini vs macchine: chi vincerà la battaglia?', 'hobbit, maghi e altre cose'];
$input_genres = [['sci-fi', 'action', 'fantasy'], ['fantasy', 'avventure']];

$film1 = new Movie($input_title[0], $input_description[0], $input_genres[0]);
$film2 = new Movie($input_title[1], $input_description[1], $input_genres[1]);
// var_dump($film1);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Fake film generator</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film1->title; ?></h5>
                        <p class="card-text"><?php echo $film1->description; ?></p>
                        <p class="card-text"><?php echo $film1->getGenresText($film1->genres) ?></p>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $film2->title; ?></h5>
                        <p class="card-text"><?php echo $film2->description; ?></p>
                        <p class="card-text"><?php echo $film2->getGenresText($film1->genres) ?></p>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>