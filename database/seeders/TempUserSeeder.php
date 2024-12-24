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
            'name'=>'Aruna Lorensuhewa',
            'email'=>'aruna@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/002',
            'department'=>'Computer Science',
            'studentId'=>NULL,
            'role'=>'Staff',
            'password'=>Hash::make('aruna123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Channa Vidanagamachchi',
            'email'=>'channa@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/003',
            'department'=>'Mathematics',
            'studentId'=>NULL,
            'role'=>'Staff',
            'password'=>Hash::make('channa123')
        ]);

        DB::table('temp_users')->insert([
            'name'=>'Nipuni Rathnayake',
            'email'=>'nipuni@gmail.com',
            'designation'=>'Academic Staff',
            'staffId'=>'RUH/SC/004',
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
