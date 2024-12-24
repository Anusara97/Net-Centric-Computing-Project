<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name'=>'Anusara Punchihewa',
            'email'=>'anusara@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/001',
            'department'=>'Computer Science',
            'studentId'=>NULL,
            'role'=>'Admin',
            'password'=>Hash::make('anusara123')
        ]);
    }
}
