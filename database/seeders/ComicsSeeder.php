<?php

namespace Database\Seeders;


use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (config('comics.comicBooks') as $comic) {
            $newcomic = new Comic();
            $newcomic->title = $comic['title'];
            $newcomic->description = $comic['description'];
            $newcomic->thumb = $comic['thumb'];

            $newcomic->save();
        }
    }
}