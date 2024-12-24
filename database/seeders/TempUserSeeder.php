<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Hash;

class TempUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('temp_users')->insert([
            'name'=>'Anusara Punchihewa',
            'email'=>'anusara@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/001',
            'department'=>'Computer Science',
            'studentId'=>NULL,
            'role'=>'Staff',
            'password'=>Hash::make('anusara123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Channa Vidanagamachchi',
            'email'=>'channa@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/002',
            'department'=>'Mathematics',
            'studentId'=>NULL,
            'role'=>'Staff',
            'password'=>Hash::make('channa123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Nipuni Rathnayake',
            'email'=>'nipuni@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/003',
            'department'=>'Physics',
            'studentId'=>NULL,
            'role'=>'Staff',
            'password'=>Hash::make('nipuni123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Krishan Fernando',
            'email'=>'krishan@gmail.com',
            'designation'=>'Student',
            'staffId'=>NULL,
            'department'=>NULL,
            'studentId'=>'SC/2018/10604',
            'role'=>'Student',
            'password'=>Hash::make('krishan123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Kamal Perera',
            'email'=>'kamal@gmail.com',
            'designation'=>'Student',
            'staffId'=>NULL,
            'department'=>NULL,
            'studentId'=>'SC/2018/10420',
            'role'=>'Student',
            'password'=>Hash::make('kamal123')
        ]);
    }
}
