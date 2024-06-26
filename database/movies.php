<?php
function getMovies(): array
{
    $moviesList = [];

    $text = file_get_contents(__DIR__ . "/moviesDB.json");
    $movies = json_decode($text, true);

    foreach ($movies as $movie) {
        try {
            $newMovie = new Movie($movie['title'], $movie['description'], $movie['vote'], ...$movie['genres']);
            if (isset($image)) {
                $newMovie->setImage($movie->image);
            }
            $moviesList[] = $newMovie;
        } catch (Exception $e) {
            echo $e;
        } catch (Error $e) {
            echo $e;
        }
    }

    return $moviesList;
}
