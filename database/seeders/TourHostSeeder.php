<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class TourHostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            ['id'=>1, 'tour_id'=>1, 'user_id'=>1],
            ['id'=>2, 'tour_id'=>2, 'user_id'=>2],
            ['id'=>3, 'tour_id'=>3, 'user_id'=>3],
            ['id'=>4, 'tour_id'=>4, 'user_id'=>4],
        );
        DB::table('tour_hosts')->insert($data);
    }
}
