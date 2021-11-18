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
            ['id'=>5, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>6, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>7, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>8, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>9, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>10, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>11, 'tour_id'=>3, 'user_id'=>4],
            ['id'=>12, 'tour_id'=>55, 'user_id'=>4],
            ['id'=>13, 'tour_id'=>17, 'user_id'=>4],
            ['id'=>14, 'tour_id'=>18, 'user_id'=>4],
            ['id'=>15, 'tour_id'=>19, 'user_id'=>4],
            ['id'=>16, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>17, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>18, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>19, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>20, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>21, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>22, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>23, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>24, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>25, 'tour_id'=>2, 'user_id'=>4],
            ['id'=>26, 'tour_id'=>39, 'user_id'=>4],
            ['id'=>27, 'tour_id'=>10, 'user_id'=>4],
            ['id'=>28, 'tour_id'=>41, 'user_id'=>4],
            ['id'=>29, 'tour_id'=>34, 'user_id'=>4],
            ['id'=>30, 'tour_id'=>18, 'user_id'=>4],
            ['id'=>31, 'tour_id'=>4, 'user_id'=>4],
            ['id'=>32, 'tour_id'=>5, 'user_id'=>4],
            ['id'=>33, 'tour_id'=>4, 'user_id'=>1],
            ['id'=>34, 'tour_id'=>3, 'user_id'=>2],
            ['id'=>35, 'tour_id'=>4, 'user_id'=>6],
            ['id'=>36, 'tour_id'=>11, 'user_id'=>40],
            ['id'=>37, 'tour_id'=>14, 'user_id'=>33],
            ['id'=>38, 'tour_id'=>12, 'user_id'=>40],
            ['id'=>39, 'tour_id'=>4, 'user_id'=>17],
            ['id'=>40, 'tour_id'=>36, 'user_id'=>14],
        );
        DB::table('tour_hosts')->insert($data);
    }
}
