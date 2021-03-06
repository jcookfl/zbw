<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsTableSeeder extends Seeder {

    public function run()
    {
	      DB::table('zbw_news')->truncate();
        $faker = Faker::create();
        foreach(range(1, 50) as $index)
        {
          $n = new News();
          $n->news_type_id = $faker->numberBetween(1,5);
          $n->audience_type_id = $faker->numberBetween(1,3);
          $n->title = $faker->sentence(2);
          $n->content = $faker->realText();
          $n->starts = $faker->dateTimeThisDecade('2014-06-12 12:55:30');
          $n->ends = $faker->dateTimeThisDecade('2014-06-12 12:55:30');
          $n->facility_id = $faker->numberBetween(1,8);
	      $n->save();
        }
    }

}
