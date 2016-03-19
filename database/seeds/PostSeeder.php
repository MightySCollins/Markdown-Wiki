<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Category::class, 5)->create();
        factory(App\Models\Post::class, 20)->create();
        factory(App\Models\Edit::class, 50)->create();
    }
}
