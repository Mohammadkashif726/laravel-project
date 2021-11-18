<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityExperience extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id'=>1, 'experience_id'=>2, 'city_id'=>1],
            ['id'=>2, 'experience_id'=>3, 'city_id'=>2],
            ['id'=>3, 'experience_id'=>1, 'city_id'=>2],
            ['id'=>4, 'experience_id'=>1, 'city_id'=>3],
            ['id'=>5, 'experience_id'=>2, 'city_id'=>43],
            ['id'=>6, 'experience_id'=>2, 'city_id'=>11],
            ['id'=>7, 'experience_id'=>2, 'city_id'=>51],
            ['id'=>8, 'experience_id'=>2, 'city_id'=>49],
            ['id'=>9, 'experience_id'=>2, 'city_id'=>15],
            ['id'=>10, 'experience_id'=>2, 'city_id'=>16],
            ['id'=>11, 'experience_id'=>2, 'city_id'=>6],
            ['id'=>12, 'experience_id'=>2, 'city_id'=>10],
            ['id'=>13, 'experience_id'=>2, 'city_id'=>1],
            ['id'=>14, 'experience_id'=>2, 'city_id'=>3],
            ['id'=>15, 'experience_id'=>2, 'city_id'=>5],
            ['id'=>16, 'experience_id'=>2, 'city_id'=>1],
            ['id'=>17, 'experience_id'=>2, 'city_id'=>1],
            ['id'=>18, 'experience_id'=>2, 'city_id'=>4],
            ['id'=>19, 'experience_id'=>2, 'city_id'=>17],
            ['id'=>20, 'experience_id'=>2, 'city_id'=>44],
            ['id'=>21, 'experience_id'=>2, 'city_id'=>31],
            ['id'=>22, 'experience_id'=>2, 'city_id'=>13],
            ['id'=>23, 'experience_id'=>2, 'city_id'=>45],
            ['id'=>24, 'experience_id'=>2, 'city_id'=>35],
            ['id'=>25, 'experience_id'=>2, 'city_id'=>29],
            ['id'=>26, 'experience_id'=>2, 'city_id'=>1],
            ['id'=>27, 'experience_id'=>2, 'city_id'=>54],
            ['id'=>28, 'experience_id'=>2, 'city_id'=>40],
            ['id'=>29, 'experience_id'=>2, 'city_id'=>28],
            ['id'=>30, 'experience_id'=>2, 'city_id'=>31],
            ['id'=>31, 'experience_id'=>2, 'city_id'=>13],
            ['id'=>32, 'experience_id'=>2, 'city_id'=>19],
            ['id'=>33, 'experience_id'=>2, 'city_id'=>7],
            ['id'=>34, 'experience_id'=>2, 'city_id'=>6],
            ['id'=>35, 'experience_id'=>2, 'city_id'=>11],
            ['id'=>36, 'experience_id'=>2, 'city_id'=>39],
            ['id'=>37, 'experience_id'=>2, 'city_id'=>56],
            ['id'=>38, 'experience_id'=>2, 'city_id'=>32],
            ['id'=>39, 'experience_id'=>2, 'city_id'=>4],
            ['id'=>40, 'experience_id'=>2, 'city_id'=>2],
        );
        DB::table('city_experiences')->insert($data);
    }
}
