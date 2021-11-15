<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id'=>1, 'type'=>'Walking tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>1, 'city_id'=>1, 'cover_photo'=>'ToursV-1.webm', 'per_person_price' => '€54 per person', 'reasons_to_book' => '1: Can be 100% customized to your food wishes
2: Taste the best of the German cuisine
3: Try classic beer & currywurst with sauerkraut at real local hotspots
4: 10 local tastings
5: Stop to see highlights of the city along the way
6: It’s not just food; it’s local culture
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>2, 'type'=>'Walking tour', 'duration'=> '4 hours', 'is_private'=>true, 'owner_id'=>2, 'city_id'=>2, 'cover_photo'=>'ToursV-2.webm', 'per_person_price' => '€26 per person', 'reasons_to_book' => '1: Dive into the intriguing history of Berlin
2: Get to know more about WWII
3: See main landmarks & their historical relevance
4: Enjoy a tour by the side of a history expert
5: Can be 100% personalized to your wishes
6: All your questions answered by your local host
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>3, 'type'=>'Walking tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>3, 'city_id'=>3, 'cover_photo'=>'ToursV-3.jpg', 'per_person_price' => '€30 per person', 'reasons_to_book' => '1: Explore the best of the city in only 3 hours
2: Spot classics like Chinatown & Block Arcade
3: Discover hidden gems away from the tourist paths
4: Experience the city from a local’s perspective
5: Can be 100% personalized to your wishes
6: Privately guided by a local expert
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>4, 'type'=>'Walking tour', 'duration'=> '2.5 hours', 'is_private'=>true, 'owner_id'=>4, 'city_id'=>4, 'cover_photo'=>'ToursV-4.jpg', 'per_person_price' => '€19 per person', 'reasons_to_book' => '1: Experience a different side of Melbourne
2: Dive into the local lifestyle and culture
3: Discover trendy and up and coming areas
4: Get off the main touristic path with a local
5: Can be 100% personalized to your wishes
6: Get inspired with exciting local stories
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>5, 'type'=>'Walking tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>5, 'city_id'=>5, 'cover_photo'=>'ToursV-5.webm', 'per_person_price' => '€94 per person', 'reasons_to_book' => '1: Can be 100% customized to your food wishes
2: Taste the best of the French cuisine
3: Try classic cheese board & crêpe at real local hotspots
4: 10 local tastings
5: Stop to see highlights of the city along the way
6: It’s not just food; it’s local culture
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>6, 'type'=>'Walking tour', 'duration'=> '1.5 hours', 'is_private'=>true, 'owner_id'=>6, 'city_id'=>6, 'cover_photo'=>'ToursV-6.webm', 'per_person_price' => '€11 per person', 'reasons_to_book' => '1: Discover the real Paris in a nutshell
2: Learn how to navigate the city
3: Get the latest tips & tricks from a local
4: Ask anything during this private tour
5: Can be 100% personalized to your wishes
6: The best way to kickstart your stay
7: Local safety regulations are put in place to ensure your comfort'],
        );
        DB::table('tours')->insert($data);
    }
}
