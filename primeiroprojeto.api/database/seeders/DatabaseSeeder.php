<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        /*$this->call([
            // UsersSeeder::class,
            //CategoriasSeeder::class,
        ]);*/
        //$this->call(CategoriasSeeder::class);
        $this->call([
            //UsersSeeder::class,
            //CategoriasSeeder::class,
            ProdutosSeeder::class,
        ]);
    }
}
