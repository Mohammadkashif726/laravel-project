<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_arr=array(
            ['id'=> 1, 'experience_id'=>1, 'Title'=>'The 10 Tastings of Berlin', 'Description'=> 'Ready to taste the best food in Berlin? Satisfy your cravings for local food and culture with highlights along the way, together with a foodie host. Enjoy 10 delicious and typical tastings that range from sweet to savory as well as drinks on a tasty food tour in Berlin.', 'Thumbnails1'=> 'Video1.webm'],
            ['id'=> 2,  'experience_id'=>2, 'Title'=>'Drinks & Bites in Barcelona Tour', 'Description'=> 'Picture this, a night out in Barcelona hopping from hot spot to hot spot, discovering local nightlife while tasting typical local drinks perfectly paired with delicious local bites. Sounds like a fun night? Join a local nightlife expert and discover how the locals unwind in Barcelona.', 'Thumbnails1'=> 'Video2.webm'],
            ['id'=> 3, 'experience_id'=>3,  'Title'=>'The 10 Tastings of Paris', 'Description'=> 'Ready to taste the best food in Paris? Satisfy your cravings for local food and culture with highlights along the way, together with a foodie host. Enjoy 10 delicious and typical tastings that range from sweet to savory as well as drinks on a tasty food tour in Paris..', 'Thumbnails1'=> 'Video3.webm'],
            ['id'=> 4, 'experience_id'=>4,  'Title'=>'The 10 Tastings of Cusco', 'Description'=> 'Ready to taste the best food in Cusco? Satisfy your cravings for local food and culture with highlights along the way, together with a foodie host. Enjoy 10 delicious and typical tastings that range from sweet to savory as well as drinks on a tasty food tour in Cusco..', 'Thumbnails1' => 'Cities9/2.jpg'],
            ['id'=> 5, 'experience_id'=>5,  'Title'=>'The 10 Tastings of Cusco', 'Description'=> 'Ready to taste the best food in Cusco? Satisfy your cravings for local food and culture with highlights along the way, together with a foodie host. Enjoy 10 delicious and typical tastings that range from sweet to savory as well as drinks on a tasty food tour in Cusco..', 'Thumbnails1'=> 'Cities9/1.jpg'],
            ['id'=> 6, 'experience_id'=>6,  'Title'=>'The 10 Tastings of Dublin', 'Description'=> 'Ready to taste the best food in Dublin? Satisfy your cravings for local food and culture with highlights along the way, together with a foodie host. Enjoy 10 delicious and typical tastings that range from sweet to savory as well as drinks on a tasty food tour in Dublin..', 'Thumbnails1'=> 'Cities10/1.jpg'],
        );

        DB::table('experiences')->insert($data_arr);
    }
}
