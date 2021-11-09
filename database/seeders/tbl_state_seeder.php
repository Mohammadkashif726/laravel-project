<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tbl_state_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data_arr=array(
            ['id' => 782352, 'country_id' => 166, 'name' => 'Azad Kashmir', 'active' => 1, 'slug' => 'azad-kashmir'],
            ['id' => 782353, 'country_id' => 166, 'name' => 'Balochistan', 'active' => 1, 'slug' => 'balochistan'],
            ['id' => 782354, 'country_id' => 166, 'name' => 'Islamabad', 'active' => 1, 'slug' => 'islamabad'],
            ['id' => 782355, 'country_id' => 166, 'name' => 'Khyber Pakhtunkhwa', 'active' => 1, 'slug' => 'khyber-pakhtunkhwa'],
            ['id' => 782356, 'country_id' => 166, 'name' => 'Punjab', 'active' => 1, 'slug' => 'punjab'],
            ['id' => 782357, 'country_id' => 166, 'name' => 'Sindh', 'active' => 1, 'slug' => 'sindh'],

            // UAE
            ['id' => 782358, 'country_id' => 229, 'name' => 'Dubai', 'active' => 1, 'slug' => 'dubai'],
            ['id' => 782359, 'country_id' => 229, 'name' => 'Abu Dhabi', 'active' => 1, 'slug' => 'abu-dhabi'],
            ['id' => 782360, 'country_id' => 229, 'name' => 'Sharjah	Sharjah', 'active' => 1, 'slug' => 'sharjah-sharjah'],
            ['id' => 782361, 'country_id' => 229, 'name' => 'Ras Al Khaimah', 'active' => 1, 'slug' => 'ras-al-khaimah'],
            ['id' => 782362, 'country_id' => 229, 'name' => 'Fujairah', 'active' => 1, 'slug' => 'fujairah'],
            ['id' => 782363, 'country_id' => 229, 'name' => 'Ajman', 'active' => 1, 'slug' => 'ajman'],
            ['id' => 782364, 'country_id' => 229, 'name' => 'Umm Al Quwain', 'active' => 1, 'slug' => 'umm-al-quwain'],
    	);
        DB::table('states')->insert($data_arr);
    }
}
