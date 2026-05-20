<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {//php artisan db:seed --class=MovieSeeder
        //add two movies data
        /*DB::table('movies')->insert([
            [
                'movie_name'=>'Inception',
                'rating'=>9,
                'description'=>'A mind-bending thriller about dreams within dreams.',
                'release_date'=>'2010-07-16',
                'category'=>'Sci-Fi',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'movie_name'=>'The Shawshank Redemption',
                'rating'=>10,
                'description'=>'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_date'=>'1994-09-23',
                'category'=>'Drama',
                'created_at'=>now(),
                'updated_at'=>now(),
            ]
        ]);*/
        //using factory to insert data into database
        Movie::factory()->count(5)->create();
        //make() method will create the model instance but will not save it to the database, while create() method will create the model instance and save it to the database.
    }
}
