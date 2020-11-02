<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 50; $i++) {
        $new_comic = new Comic();
        $new_comic->isbn = $faker->numberBetween(9000000000000, 9999999999999);
        $new_comic->title = $faker->text(50);
        $new_comic->price = $faker->randomFloat(2, 1, 9999);
        $new_comic->number = $faker->numberBetween(1, 500);
        $new_comic->save();
      }

    }
}
