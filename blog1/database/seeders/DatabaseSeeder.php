<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(40)->create();

        $list = ["General", "Mobile", "News", "Tech", "Language"];
        foreach($list as $name) {
            \App\Models\Category::create([
                "name" => $name
            ]);
        }

        // \App\Models\User::factory(10)->create();
    }
}
