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
['id'=>7, 'type'=>'Walking tour', 'duration'=> '1.5 hours', 'is_private'=>true, 'owner_id'=>7, 'city_id'=>7, 'cover_photo'=>'ToursV-7.webm', 'per_person_price' => '€11 per person', 'reasons_to_book' => '1: Discover the real Berlin in a nutshell
2: Learn how to navigate the city
3: Get the latest tips & tricks from a local
4: Ask anything during this private tour
5: Can be 100% personalized to your wishes
6: The best way to kickstart your stay
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>8, 'type'=>'Walking tour', 'duration'=> '2.5 hours', 'is_private'=>true, 'owner_id'=>8, 'city_id'=>8, 'cover_photo'=>'ToursV-8.webm', 'per_person_price' => '€22 per person', 'reasons_to_book' => '1: Experience a different side of Berlin
2: Dive into the local lifestyle and culture
3: Discover trendy and up and coming areas
4: Get off the main touristic path with a local
5: Can be 100% personalized to your wishes
6: Get inspired with exciting local stories
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>9, 'type'=>'Walking tour', 'duration'=> '2.5 hours', 'is_private'=>true, 'owner_id'=>9, 'city_id'=>9, 'cover_photo'=>'ToursV-9.jpg', 'per_person_price' => '€27 per person', 'reasons_to_book' => '1: Your very own city tour in Berlin
2: Fully personalized: 100% created for you
3: See the best of Berlin with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>10, 'type'=>'Bicycle tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>10, 'city_id'=>10, 'cover_photo'=>'ToursV-10.webm', 'per_person_price' => '€41 per person', 'reasons_to_book' => '1: See the remains of the famous Berlin Wall
2: Enjoy the main historical spots of the city
3: Taste the traditional Currywurst
4: 100% personalized experience just for you
5: Private tour: only you & your local host!
6: Bike rental included!
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>11, 'type'=>'Walking tour', 'duration'=> '1.5 hours', 'is_private'=>true, 'owner_id'=>11, 'city_id'=>11, 'cover_photo'=>'ToursV-11.jpg', 'per_person_price' => '€12 per person', 'reasons_to_book' => '1: Discover the real Melbourne in a nutshell
2: Learn how to navigate the city
3: Get the latest tips & tricks from a local
4: Ask anything during this private tour
5: Can be 100% personalized to your wishes
6: The best way to kickstart your stay
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>12, 'type'=>'Walking tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>12, 'city_id'=>12, 'cover_photo'=>'ToursV-12.jpg', 'per_person_price' => '€67 per person', 'reasons_to_book' => '1: Can be 100% customized to your food wishes
2: Taste the best of the Australian cuisine
3: Try classic small meat pie & vegemite toast at real local hotspots
4: 10 local tastings
5: Stop to see highlights of the city along the way
6: It’s not just food; it’s local culture
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>13, 'type'=>'Car', 'duration'=> '2 hours', 'is_private'=>true, 'owner_id'=>13, 'city_id'=>13, 'cover_photo'=>'ToursV-13.jpg', 'per_person_price' => '€30 per person', 'reasons_to_book' => '1: See hundreds of kanagaroos
2: Stroll in stunning Australian countryside.
3: Lookout for colourful Parrots like the cockatoo
4: All this in just 2 hours
5: Local safety regulations are put in place to ensure your comfort'],
['id'=>14, 'type'=>'Walking Tour', 'duration'=> '2.5 hours', 'is_private'=>true, 'owner_id'=>14, 'city_id'=>14, 'cover_photo'=>'ToursV-14.jpg', 'per_person_price' => '€18 per person', 'reasons_to_book' => '1: Enjoy magical rooftop views
2: Experience Paris by night with a local
3: Walk on the famous Champs Elysées
4: Learn interesting facts & stories
5: Marvel at the enlightened Eiffel tower
6: 100% tailored tour to your wishes
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>15, 'type'=>'Walking Tour', 'duration'=> '3.5 hours', 'is_private'=>true, 'owner_id'=>15, 'city_id'=>15, 'cover_photo'=>'ToursV-15.webm', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Explore the best of the city in only 3 hours
2: Spot classics like Musée du Louvre & Palais Royal
3: Discover hidden gems away from the tourist paths
4: Experience the city from a local’s perspective
5: Can be 100% personalized to your wishes
6: Privately guided by a local expert
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>16, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>16, 'city_id'=>16, 'cover_photo'=>'ToursV-16.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local s,afety regulations are put in place to ensure your comfort'],
['id'=>18, 'type'=>'Walking Tour', 'duration'=> '2.4 hours', 'is_private'=>false, 'owner_id'=>18, 'city_id'=>18, 'cover_photo'=>'ToursV-18.jpg', 'per_person_price' => '€24 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>19, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>19, 'city_id'=>19, 'cover_photo'=>'ToursV-19.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>20, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>20, 'city_id'=>20, 'cover_photo'=>'ToursV-20.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>21, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>21, 'city_id'=>21, 'cover_photo'=>'ToursV-21.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>22, 'type'=>'Walking Tour', 'duration'=> '3.5 hours', 'is_private'=>true, 'owner_id'=>22, 'city_id'=>22, 'cover_photo'=>'ToursV-22.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>23, 'type'=>'Walking Tour', 'duration'=> '1 hours', 'is_private'=>true, 'owner_id'=>23, 'city_id'=>23, 'cover_photo'=>'ToursV-23.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>24, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>24, 'city_id'=>24, 'cover_photo'=>'ToursV-24.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>25, 'type'=>'Walking Tour', 'duration'=> '4 hours', 'is_private'=>true, 'owner_id'=>25, 'city_id'=>25, 'cover_photo'=>'ToursV-25.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>26, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>26, 'city_id'=>26, 'cover_photo'=>'ToursV-26.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>27, 'type'=>'Walking Tour', 'duration'=> '2.5 hours', 'is_private'=>false, 'owner_id'=>27, 'city_id'=>27, 'cover_photo'=>'ToursV-27.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>28, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>28, 'city_id'=>28, 'cover_photo'=>'ToursV-28.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>29, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>29, 'city_id'=>29, 'cover_photo'=>'ToursV-29.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>30, 'type'=>'Walking Tour', 'duration'=> '2 hours', 'is_private'=>true, 'owner_id'=>30, 'city_id'=>30, 'cover_photo'=>'ToursV-30.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>31, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>31, 'city_id'=>31, 'cover_photo'=>'ToursV-31.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>32, 'type'=>'Bicycle Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>32, 'city_id'=>32, 'cover_photo'=>'ToursV-32.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>33, 'type'=>'Walking Tour', 'duration'=> '2.5 hours', 'is_private'=>true, 'owner_id'=>33, 'city_id'=>33, 'cover_photo'=>'ToursV-33.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>34, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>34, 'city_id'=>34, 'cover_photo'=>'ToursV-34.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>35, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>35, 'city_id'=>35, 'cover_photo'=>'ToursV-35.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>36, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>36, 'city_id'=>36, 'cover_photo'=>'ToursV-36.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>37, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>37, 'city_id'=>37, 'cover_photo'=>'ToursV-37.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>38, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>38, 'city_id'=>38, 'cover_photo'=>'ToursV-38.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>39, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>39, 'city_id'=>39, 'cover_photo'=>'ToursV-39.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],
['id'=>40, 'type'=>'Walking Tour', 'duration'=> '3 hours', 'is_private'=>true, 'owner_id'=>40, 'city_id'=>40, 'cover_photo'=>'ToursV-40.jpg', 'per_person_price' => '€31 per person', 'reasons_to_book' => '1: Your very own city tour in Paris
2: Fully personalized: 100% created for you
3: See the best of Paris with a local expert
4: Perfect for a special event or specific theme
5: Customized around your schedule
6: Tips & tricks on how to navigate the city
7: Local safety regulations are put in place to ensure your comfort'],

        );
        DB::table('tours')->insert($data);
    }
}
