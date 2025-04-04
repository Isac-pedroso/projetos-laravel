<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*User::create([
            'firstName'=>'Isac',
            'lastName'=>'Pedroso',
            'email'=>'teste@gmail.com',
            'password'=>bcrypt('teste123')
        ]);*/
        User::factory(10)->create();
    }
}
