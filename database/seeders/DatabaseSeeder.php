<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Book;
use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Director;
use App\Models\Film;
use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


            //Director::factory(30)->create();

//        Film::factory(30)->create();

        //Author::factory(5)->create();

        //Book::factory(50)->create();

//        Cinema::factory(8)->create();
//        Movie::factory(30)->create();



        CinemaMovie::factory(50)->create();
    }
}
