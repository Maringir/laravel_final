<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TouristsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tourists')->insert([
            [
                'first_name' => 'Tom',
                'last_name' => 'Radisson',
                'date_of_birth' => '1962-07-03',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Leo',
                'last_name' => 'Ortego',
                'date_of_birth' => '1974-11-11',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Alex',
                'last_name' => 'Brown',
                'date_of_birth' => '1963-12-18',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Diana',
                'last_name' => 'Helgedottir',
                'date_of_birth' => '1937-12-31',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], [
                'first_name' => 'Daniele',
                'last_name' => 'Radcliffe',
                'date_of_birth' => '1989-07-23',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ]
        ]);
    }
}
