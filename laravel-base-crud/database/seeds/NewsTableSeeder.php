<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsList = config("comics");

        foreach ($newsList as $news) {
            $newEntry = new News();

            $newEntry->title = $news['title'];
            $newEntry->description = $news['description'];

            $newEntry->save();
        }
    }
}
