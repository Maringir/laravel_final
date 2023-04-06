<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'country' => 'Norway',
                'description' => 'Nordic country in Northern Europe, the mainland territory of which comprises the western and northernmost portion of the Scandinavian Peninsula.',
                'population' => ' 5488984',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'France',
                'description' => 'officially the French Republic (French: République française),[14] is a country located primarily in Western Europe. It also includes overseas regions and territories in the Americas and the Atlantic, Pacific and Indian Oceans,[XII] giving it one of the largest discontiguous exclusive economic zones in the world.',
                'population' => '68042591',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'Lithuania',
                'description' => 'Lithuanian: Lietuva, officially the Republic of Lithuania (Lithuanian: Lietuvos Respublika), is a country in the Baltic region of Europe.[a] It is one of three Baltic states and lies on the eastern shore of the Baltic Sea.',
                'population' => '2840758',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'Estonia',
                'description' => 'formally the Republic of Estonia,[b] is a country by the Baltic Sea in Northern Europe. It is bordered to the north by the Gulf of Finland across from Finland, to the west by the sea across from Sweden, to the south by Latvia, and to the east by Lake Peipus and Russia.',
                'population' => '1357739',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'Malta',
                'description' => 'officially the Republic of Malta (Maltese: Repubblika ta Malta), is an island country in the Mediterranean Sea. It consists of an archipelago, between Italy and Libya, and is part of Southern Europe',
                'population' => '519562',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'Iceland',
                'description' => 'Nordic island country in the North Atlantic Ocean and in the Arctic Ocean. Iceland is the most sparsely populated country in Europe.',
                'population' => '376248',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                'country' => 'Austria',
                'description' => 'landlocked country in the southern part of Central Europe, lying in the Eastern Alps.[12] It is a federation of nine states, one of which is the capital, Vienna, the most populous city and state.',
                'population' => '9027999',
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
        ]);
    }
}
