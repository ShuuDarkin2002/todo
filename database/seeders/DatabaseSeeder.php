<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            //    UserSeeder::class,
            //    CategorySeed::class
        ]);

        User::factory(10)->create();
        Category::factory(6)->create();
        Task::factory(30)->create();
    }
}
