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
        \App\Models\User::factory()->create([
            'name' => 'Student User',
            'email' => 'student@student.com',
            'password' => bcrypt('password')
           
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Teacher User',
            'email' => 'teacher@teacher.com',
            'password' => bcrypt('password'),
            'role' => 'teacher'

        ]);
    }
}
