<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::created([
             'name'=>'manager',
             'role_id'=>1,
             'email'=>'hojiakbar@gmail.com',
             'password'=> Hash::make('password'),
        ]);
    }
}
