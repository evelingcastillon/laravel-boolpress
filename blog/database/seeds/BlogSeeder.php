<?php

use App\Blog;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 12; $i++) { 
            $blog = new Blog();
            $blog->image_url = $faker->imageUrl(640, 480, 'Blogs', true, $blog->title);
            $blog->title = $faker->sentence(3);
            $blog->paragraph = $faker->paragraph();
            $blog->save();
        }
    }
}
