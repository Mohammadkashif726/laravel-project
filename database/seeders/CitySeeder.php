<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id'=>1, 'name'=>'Buenos Aires Tours', 'country_id'=>'1'],
            ['id'=>2, 'name'=>'Melbourne Tours', 'country_id'=>'1'],
            ['id'=>3, 'name'=>'Perth Tours', 'country_id'=>'1'],
            ['id'=>4, 'name'=>'Sydney Tours', 'country_id'=>'1'],
            ['id'=>5, 'name'=>'Antwerp Tours', 'country_id'=>'1'],
            ['id'=>6, 'name'=>'Bruges Tours', 'country_id'=>'1'],
            ['id'=>7, 'name'=>'Brussels Tours', 'country_id'=>'1'],
            ['id'=>8, 'name'=>'Phnom penh Tours', 'country_id'=>'1'],
            ['id'=>9, 'name'=>'Siem Reap Tours', 'country_id'=>'1'],
            ['id'=>10, 'name'=>'Medellin Tours', 'country_id'=>'1'],
            ['id'=>11, 'name'=>'Dubrovnik Tours', 'country_id'=>'1'],
            ['id'=>12, 'name'=>'Prague Tours', 'country_id'=>'1'],
            ['id'=>13, 'name'=>'Copenhagen Tours', 'country_id'=>'1'],
            ['id'=>14, 'name'=>'London Tours', 'country_id'=>'1'],
            ['id'=>15, 'name'=>'York Tours', 'country_id'=>'1'],
            ['id'=>16, 'name'=>'Paris Tours', 'country_id'=>'1'],
            ['id'=>17, 'name'=>'Berlin Tours', 'country_id'=>'1'],
            ['id'=>18, 'name'=>'Munich Tours', 'country_id'=>'1'],
            ['id'=>19, 'name'=>'Athens Tours', 'country_id'=>'1'],
            ['id'=>20, 'name'=> 'Hong Kong Tours', 'country_id'=>'1'],
            ['id'=>21, 'name'=>'Budapest Tours', 'country_id'=>'1'],
            ['id'=>22, 'name'=>'Kochi Tours', 'country_id'=>'1'],
            ['id'=>23, 'name'=>'Mumbai Tours', 'country_id'=>'1'],
            ['id'=>24, 'name'=>'Bali Tours', 'country_id'=>'1'],
            ['id'=>25, 'name'=>'Jakarta Tours', 'country_id'=>'1'],
            ['id'=>26, 'name'=>'Yogyakarta Tours', 'country_id'=>'1'],
            ['id'=>27, 'name'=>'Dublin Tours', 'country_id'=>'1'],
            ['id'=>28, 'name'=>'Jerusalem Tours', 'country_id'=>'1'],
            ['id'=>29, 'name'=>'Tel Aviv Tours', 'country_id'=>'1'],
            ['id'=>30, 'name'=>'Bologna Tours', 'country_id'=>'1'],
            ['id'=>31, 'name'=>'Florence Tours', 'country_id'=>'1'],
            ['id'=>32, 'name'=>'Milan Tours', 'country_id'=>'1'],
            ['id'=>33, 'name'=>'Naples Tours', 'country_id'=>'1'],
            ['id'=>34, 'name'=>'Palermo Tours', 'country_id'=>'1'],
            ['id'=>35, 'name'=>'Rome Tours', 'country_id'=>'1'],
            ['id'=>36, 'name'=>'Venice Tours', 'country_id'=>'1'],
            ['id'=>37, 'name'=>'Verona Tours', 'country_id'=>'1'],
            ['id'=>38, 'name'=>'Kyoto Tours', 'country_id'=>'1'],
            ['id'=>39, 'name'=>'Tokyo Tours', 'country_id'=>'1'],
            ['id'=>40, 'name'=>'Nairobi Tours', 'country_id'=>'1'],
            ['id'=>41, 'name'=>'Kota Kinabalu Tours', 'country_id'=>'1'],
            ['id'=>42, 'name'=>'Kuala Lumpur Tours', 'country_id'=>'1'],
            ['id'=>43, 'name'=>'Penang Tours', 'country_id'=>'1'],
            ['id'=>44, 'name'=>'Mexico City Tours', 'country_id'=>'1'],
            ['id'=>45, 'name'=>'Marrakech Tours', 'country_id'=>'1'],
            ['id'=>46, 'name'=>'Bhaktapur Tours', 'country_id'=>'1'],
            ['id'=>47, 'name'=>'Kathmandu Tours', 'country_id'=>'1'],
            ['id'=>48, 'name'=>'Cusco Tours', 'country_id'=>'1'],
            ['id'=>49, 'name'=>'Lima Tours', 'country_id'=>'1'],
            ['id'=>50, 'name'=>'Cebu Tours', 'country_id'=>'1'],
            ['id'=>51, 'name'=> 'Manila Tours', 'country_id'=>'1'],
            ['id'=>52, 'name'=>'Palawan Tours', 'country_id'=>'1'],
            ['id'=>53, 'name'=>'Krakow Tours', 'country_id'=>'1'],
            ['id'=>54, 'name'=>'Warsaw Tours', 'country_id'=>'1'],
            ['id'=>55, 'name'=>'Lisbon Tours', 'country_id'=>'1'],
            ['id'=>56, 'name'=>'Porto Tours', 'country_id'=>'1'],
            ['id'=>57, 'name'=>'Edinburgh Tours', 'country_id'=>'1'],
            ['id'=>58, 'name'=>'Singapore Tours', 'country_id'=>'1'],
            ['id'=>59, 'name'=>'Cape Town Tours', 'country_id'=>'1'],
            ['id'=>60, 'name'=>'Seoul Tours', 'country_id'=>'1'],
            ['id'=>61, 'name'=> 'Barcelona Tours', 'country_id'=>'1'],
            ['id'=>62, 'name'=>'Madrid Tours', 'country_id'=>'1'],
            ['id'=>63, 'name'=>'Palma De Mallorca Tours', 'country_id'=>'1'],
            ['id'=>64, 'name'=>'Seville Tours', 'country_id'=>'1'],
            ['id'=>65, 'name'=>'Valencia Tours', 'country_id'=>'1'],
            ['id'=>66, 'name'=>'Colombo Tours', 'country_id'=>'1'],
            ['id'=>67, 'name'=>'Galle Tours', 'country_id'=>'1'],
            ['id'=>68, 'name'=>'Kandy Tours', 'country_id'=>'1'],
            ['id'=>69, 'name'=>'Taipei Tours', 'country_id'=>'1'],
            ['id'=>70, 'name'=>'Bangkok Tours', 'country_id'=>'1'],
            ['id'=>71, 'name'=>'Chiang Mai Tours', 'country_id'=>'1'],
            ['id'=>72, 'name'=>'Chiang Rai Tours', 'country_id'=>'1'],
            ['id'=>73, 'name'=>'Nakhon Sawan Tours', 'country_id'=>'1'],
            ['id'=>74, 'name'=>'Amsterdam Tours', 'country_id'=>'1'],
            ['id'=>75, 'name'=>'Eindhoven Tours', 'country_id'=>'1'],
            ['id'=>76, 'name'=>'Istanbul Tours', 'country_id'=>'1'],
            ['id'=>77, 'name'=>'Abu Dhabi Tours', 'country_id'=>'1'],
            ['id'=>78, 'name'=>'Dubai Tours', 'country_id'=>'1'],
            ['id'=>79, 'name'=>'New Orleans Tours', 'country_id'=>'1'],
            ['id'=>80, 'name'=>'New York City', 'country_id'=>'1'],
            ['id'=>81, 'name'=>'San Francisco Tours', 'country_id'=>'1'],
            ['id'=>82, 'name'=>'Hanoi Tours', 'country_id'=>'1'],
            ['id'=>83, 'name'=>'Ho Chi Minh City Tours', 'country_id'=>'1'],
            ['id'=>84, 'name'=>'Hoi An Tours', 'country_id'=>'1'],
            ['id'=>85, 'name'=>'Hue Tours', 'country_id'=>'1'],
            ['id'=>86, 'name'=>'Nha Trang Tours', 'country_id'=>'1'],
            ['id'=>87, 'name'=>'Cardiff Tours', 'country_id'=>'1'],
        );
        DB::table('cities')->insert($data);
    }
}
                                                                                                