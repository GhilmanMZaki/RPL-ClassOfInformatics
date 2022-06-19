<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'ayang123',
            'role'=>'Admin',
            'nomortelepon'=>'081394617663',
            'email'=> 'ayang123@gmail.com',
            'password'=> Hash::make('ayang123'),
        ]);
    }
}
