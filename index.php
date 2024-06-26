<?php
require_once(__DIR__ . "/Models/Movie.php");
require_once(__DIR__ . "/database/movies.php");

$movies = getMovies();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($movies as $movie) : ?>
        <div>
            <ul>
                <li>
                    <?php echo $movie->getTitle() ?>
                </li>
                <li>
                    <?php echo $movie->getImage() ?>
                </li>
                <li>
                    <?php echo $movie->getDescription() ?>
                </li>
                <li>
                    Voto :<?php echo $movie->getVote() ?>
                </li>
                <li> Generi:
                    <ul>
                        <?php foreach ($movie->getGenres() as $genre) : ?>
                            <li> <?php echo $genre ?> </li>
                        <?php endforeach ?>
                    </ul>
                </li>
            </ul>
            <hr>
        </div>
    <?php endforeach ?>
</body>

</html>