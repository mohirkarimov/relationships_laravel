<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $directors = \App\Models\Director::all();
    $films = \App\Models\Film::all();

    // one to one

//    foreach ($directors as $director) {
//        echo 'Director name: ' . $director['name'].'<br>';
//        echo 'Film: ' . $director->film['name'].'<br>';
//        echo '-------------------------------------------<br>';
//    }

//    foreach ($films as $film) {
//        echo 'Film name: ' . $film['name'].'<br>';
//        echo 'Director: ' . $film->director['name'].'<br>';
//        echo '-------------------------------------------<br>';
//    }
//
//    $authors = \App\Models\Author::all();
//    $books = \App\Models\Book::all();
//


    /// one to many

//    foreach ($authors as $author) {
//        echo 'Author name: ' . $author['name'].'<br>';
//        echo'<b>Author\'s books:</b><br>';
//        foreach ($author->books as $book){
//            echo $book['title'].'<br>';
//        }
//        echo '-------------------------------------------<br>';
//    }


//    foreach ($books as $book) {
//        echo 'Book title: ' . $book['title'].'<br>';
//        echo'<b>Author:</b>'. $book->author['name'] .'<br>';
//        echo '-------------------------------------------<br>';
//    }

////////////////////////////////////////////////////////////////////////////////////////////////


    /// Many to many

    $cinemas = \App\Models\Cinema::all();
    $movies = \App\Models\Movie::all();


//    foreach ($cinemas as $cinema) {
//        echo 'Cinema: ' . $cinema['name'] . '<br>';
//        echo '<b>Movies:</b><br>';
//        foreach ($cinema->movies as $movie) {
//            echo $movie['name'] . '<br>';
//        }
//        echo '-------------------------------------------<br>';
//    }

//    foreach ($movies as $movie) {
//        echo 'Movie name: ' . $movie['name'] . '<br>';
//        echo '<b>Cinema:</b><br>';
//        foreach ($movie->cinemas as $cinema) {
//            echo $cinema['name'] . '<br>';
//        }
//        echo '-------------------------------------------<br>';
//    }




});
