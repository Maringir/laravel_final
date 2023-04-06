<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('travels')->insert([
            [
                'title' => 'Norwegian Fjords',
                'description' => 'FACTS ABOUT THE FJORDS
                UNESCO has included the fjords of Fjord Norway, exemplified by the Geirangerfjord and the Nærøyfjord, on its prestigious World Heritage List.The fjords are often described as “own work of art of nature”, formed when the glaciers retreated and seawater flooded the U-shaped valleys.
                Gudvangen and Geiranger, the two innermost villages of the Nærøyfjord and the Geirangerfjord, are amongst the most popular cruise ship ports in Scandinavia.
                Thanks to the warm Gulf Stream and air currents caused by the coriolis effect, the Norwegian fjords enjoy a relatively mild climate and remain virtually ice-free. Seals, porpoises and a variety of fish species swim in the fjords, while eagles and other birds soar in the skies above.
                The fjords are often very deep. The Sognefjord is the deepest as it drops 1,308 metres below sea level. Since the fjords are so deep, they permit navigation by large ships, allowing you to experience their beauty at close range.',
                'travel_date' => '2023-07-01',
                'duration_days' => '7',
                'image' => 'https://assets.simpleviewcms.com/simpleview/image/upload/c_fill,g_xy_center,h_702,q_65,w_1200,x_2341,y_1520/v1/clients/norway/robert_bye_xjQhTrxyVBw_unsplash_913d2956-7e65-4f35-9e2e-cbe6b773b030.jpg',
                'price_euro' => '1700',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Iceland',
                'description' => 'Come join us on our best-selling Ring Road tour! You will visit all the main attractions of the legendary Ring Road. You will find this classic circle tour provides the perfect mix of culture, nature and great value.
                If you want to see the best of Iceland and enjoy great value, this is your trip! You will have a complete overview of “must-see“ Ring Road attractions such as the Golden Circle, the Glacier Lagoon, Lake Myvatn, Dettifoss and Snæfellsnes Peninsula. You will see the amazing diversity of Icelandic landscapes from volcanoes and glaciers to fjords and thundering waterfalls. We have also included some great experiences that show you Icelandic unique culture and geology. We offer this tour in two sizes: Classic and Small Group.
                We support Icelandic nature!  As part of our pledge to preserve fragile nature of Iceland, all our escorted tours include carbon offsetting through Kolviður, the Iceland Carbon Fund (ICF)',
                'travel_date' => '2023-07-15',
                'duration_days' => '8',
                'image' => 'https://images.prismic.io/visiticeland/2a0621ec-6655-48fe-99c5-afa9c1ef9bcf_Svartifoss+Vatnajokull+National+Park.jpg?auto=compress,format',
                'price_euro' => '2300',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Baltics in a week',
                'description' => 'Estonia is the northernmost country in the Baltic States and is the one that is most ethnically and culturally unique compared to Lithuania and Latvia.
                Most famed for the excellently-preserved medieval old town in its capital city of Tallinn, there is so much more to this country than that. Alternative culture, an innovative cuisine, hip and modern cities, and a large expanse of forests, bogland, and beaches make Estonia one of the most interesting countries to visit in Europe.
                Like its neighbours, Latvia boasts some stunning nature, a beautiful coastline, and quaint cities that just beg to be explored. While Riga is an incredibly dynamic city and worth a stand-alone visit, there is much more to this country than the capital.
                And of course, no Baltics itinerary would be complete without including the southernmost country in the Baltic States, Lithuania.
                Lithuania has a number of interesting sites, beautiful and impeccable nature to explore, and it is another country that travellers could easily spend weeks in.
                ',
                'travel_date' => '2023-06-10',
                'duration_days' => '7',
                'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fmeetmeindepartures.com%2Fbest-of-the-baltics-estonia-latvia-lithuania%2F&psig=AOvVaw1PhtqZO1iMWTcgIsuIhUmq&ust=1680628423288000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCLCN1YObjv4CFQAAAAAdAAAAABAD',
                'price_euro' => '1300',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Poland',
                'description' => 'From the towering Tatra Mountains to the wild Baltic Sea, Poland is filled with vibrant cities known for their splendid heritage, mouthwatering cuisine and stunning architecture. Poland is home to numerous attractions and landmarks that are sure to delight visitors from all over the world. A getaway to Poland will keep everyone happy — from beach-goers and hiking fans to city break lovers. The secret lies in the evident diversity between its cities, each of which is waiting to tell a unique story. It is time to be captivated by a fantastic city break crammed with charming districts, modern city centres and bustling streets.',
                'travel_date' => '2023-06-01',
                'duration_days' => '9',
                'image' => 'https://www.poland.travel/en/travel-inspirations/warsaw-named-european-best-destination-2023#i',
                'price_euro' => '1400',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
            [
                'title' => 'Austrian Adventure',
                'description' => 'Austrian adventure vacation and hiking tour like no other, the dramatic Alps are an ever-present reminder of the grandeur of mother nature. It is almost hard to believe so many incredible landscapes can be packed into the Salzburg and Tyrol regions of western Austria. Each morning you will awaken to breathtaking scenery and spend the day exploring through glacier-carved gorges, biking through quaint villages and rafting near roaring waterfalls. It is here you will discover that storybook castles do exist and that the hills of Salzburg bring out the inner Sound of Music singer in you. Grab your pack, frolic to the peaceful tunes of mother nature and see for yourself why an Austria adventure vacation and hiking tour is just the thing to refresh your body and rejuvenate your sense of wanderlust.',
                'travel_date' => '2023-07-01',
                'duration_days' => '8',
                'image' => 'https://www.google.lt/imgres?imgurl=https%3A%2F%2Fcdn.britannica.com%2F20%2F191120-050-B6C0B7E9%2Fvillage-Hallstatt-Alps-Austria.jpg&tbnid=1IKicQ9x5vueeM&vet=12ahUKEwiA9re-m47-AhWYuioKHd6UAJ8QMygAegUIARC1AQ..i&imgrefurl=https%3A%2F%2Fwww.britannica.com%2Fplace%2FAustria&docid=QhiaJsu99xXllM&w=1000&h=667&q=austria&ved=2ahUKEwiA9re-m47-AhWYuioKHd6UAJ8QMygAegUIARC1AQ',
                'price_euro' => '1700',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ], 
        ]);
    }
}
