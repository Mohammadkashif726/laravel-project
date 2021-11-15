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
            ['id'=>5, 'experience_id'=>2, 'city_id'=>1],
        );
        DB::table('city_experiences')->insert($data);
    }
}
