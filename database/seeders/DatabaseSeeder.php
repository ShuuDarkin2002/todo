<?php
namespace Database\Seeders;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Seeder;
use App\Models\User;


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
            // UserSeeder::class,
            // CategoriasSeeder::class,
            // TarefassSeeder::class

        ]);
         User::factory(4)->create();
         Category::factory(10)->create();
         Task::factory(5)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\Categorias::factory(30)->count(30)->create();
    }
}
