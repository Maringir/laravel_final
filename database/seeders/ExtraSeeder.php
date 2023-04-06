<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('extras')->insert([
            [
                'name' => 'Norwegian Fjord Cruise',
                'description' => 'Book a Norwegian Fjords Cruise with Cunard. See the vast landscapes of Norway and sample the Scandinavian culture. See available cruises and book today',
                'price_eur' => '90',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name' => 'Salt mine Hallstatt',
                'description' => 'Hallstatt Salzwelten: Welcome to the oldest Salt Mine in the world! Risk a "World Heritage View" from the Skywalk. Travel 7000 years in time!',
                'price_eur' => '60',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name' => 'Lava tunnel Iceland',
                'description' => 'Explore an underground lava tube created by the mighty power of a volcanic eruption over 5,000 years ago on a journey through the Raufarhólshellir lava tunnel. Experience one of the longest lava tubes in Iceland, easily accessible all year round.',
                'price_eur' => '49',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name' => 'Lithuanian dinner',
                'description' => 'Potato Dumplings Filled with Minced Meat (Cepelinai) are typically filled with minced meat, Cold Beet Soup, Potato Pancakes, Fried Bread with Garlic, Meat-Filled Pastries, Peas with Cracklings',
                'price_eur' => '29',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'name' => 'Estonian swamp hike',
                'description' => 'Kisejärve hiking trail is 6 km long and runs along former horse roads and swamp borders (rubber boots are recommended). The hiking trails takes you past several lakes, valuable nature and bog communities and you can also see the results of the activities of beavers.',
                'price_eur' => '59',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
        ]);
    }
}
