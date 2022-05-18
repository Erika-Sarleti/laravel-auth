<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10;$i++){
            $name=$faker->words(rand(2,8), true);
            Post::create([
                'name'=> $name,
                'content'=>$faker->text(100,500),
                'slug'=>Post::genSlug($name),
            ]);
        }
    }
}
