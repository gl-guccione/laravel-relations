<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Author_info;
use App\Author;

class AuthorsInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

      $authors = Author::all();

      foreach ($authors as $author) {

        $newAuthorInfo = new Author_info();

        $newAuthorInfo->author_id = $author->id;

        if (rand(0,1)) {
          $newAuthorInfo->alive = 1;
          $newAuthorInfo->image = $faker->imageUrl(400, 600);
        }

        $newAuthorInfo->biography = $faker->text(500);
        $newAuthorInfo->nationality = $faker->country;

        $newAuthorInfo->save();

      }

    }
}
