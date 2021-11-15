<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_arr=array(
            ['id'=> 1, 'name'=> 'Argentina'],
            ['id'=> 2, 'name'=> 'Australia'],
            ['id'=> 3, 'name'=> 'Belgium'],
            ['id'=> 4, 'name'=> 'Cambodia'],
            ['id'=> 5, 'name'=> 'Colombia'],
            ['id'=> 6, 'name'=> 'Croatia'],
            ['id'=> 7, 'name'=> 'Czech Republic'],
            ['id'=> 8, 'name'=> 'Denmark'],
            ['id'=> 9, 'name'=> 'England'],
            ['id'=> 10, 'name'=> 'France'],
            ['id'=> 11, 'name'=> 'Germany'],
            ['id'=> 12, 'name'=> 'Greece'],
            ['id'=> 13, 'name'=> 'Hong Kong'],
            ['id'=> 14, 'name'=> 'Hungary'],
            ['id'=> 15, 'name'=> 'India'],
            ['id'=> 16, 'name'=> 'Indonesia'],
            ['id'=> 17, 'name'=> 'Ireland'],
            ['id'=> 18, 'name'=> 'Israel'],
            ['id'=> 19, 'name'=> 'Italy'],
            ['id'=> 20, 'name'=> 'Japan'],
            ['id'=> 21, 'name'=> 'Kenya'],
            ['id'=> 22, 'name'=> 'Malaysia'],
            ['id'=> 23, 'name'=> 'Mexico'],
            ['id'=> 24, 'name'=> 'Morocco'],
            ['id'=> 25, 'name'=> 'Nepal'],
            ['id'=> 26, 'name'=> 'Peru'],
            ['id'=> 27, 'name'=> 'Philippines'],
            ['id'=> 28, 'name'=> 'Portugal'],
            ['id'=> 29, 'name'=> 'Scotland'],
            ['id'=> 30, 'name'=> 'Singapore'],
            ['id'=> 31, 'name'=> 'South Africa'],
            ['id'=> 32, 'name'=> 'South Korea'],
            ['id'=> 33, 'name'=> 'Spain'],
            ['id'=> 34, 'name'=> 'Sri Lanka'],
            ['id'=> 35, 'name'=> 'Taiwan'],
            ['id'=> 36, 'name'=> 'Thailand'],
            ['id'=> 37, 'name'=> 'the Netherlands'],
            ['id'=> 38, 'name'=> 'Turkey'],
            ['id'=> 39, 'name'=> 'United Arab Emirates'],
            ['id'=> 40, 'name'=> 'United States'],
            ['id'=> 41, 'name'=> 'Vietnam'],
            ['id'=> 42, 'name'=> 'Wales'],
        );

        DB::table('countries')->insert($data_arr);
    }
}
