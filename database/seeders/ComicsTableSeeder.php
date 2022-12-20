<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('dataseeder.comics');

        foreach ($comics as $comic) {
            $newComics = new Comic();

            $newComics->title = $comic['title'];
            $newComics->description = $comic['description'];
            $newComics->thumb = $comic['thumb'];
            $newComics->price = $comic['price'];
            $newComics->sale_date = $comic['sale_date'];
            $newComics->series = $comic['series'];
            $newComics->type = $comic['type'];

            $newComics->save();

        }
    }
}
